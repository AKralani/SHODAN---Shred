<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::post('/posts', 'PostController@store');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/profiles/{user}', 'ProfileController@show')->name('profile');

Route::get('/register', 'RegistrationController@register')->name('register');
Route::post('/register', 'RegistrationController@postRegister')->name('post-register');


Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts', 'PostController@update');

Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');


Route::get('/register', 'RegistrationController@register')->name('register');
Route::post('/register', 'RegistrationController@postRegister')->name('post-register');

Route::get('/search-users', 'SearchController@index');
Route::get('/search-users/action', 'SearchController@action')->name('search-users.action');

Route::post('/posts/{post}/like', 'PostLikesController@store');
Route::delete('/posts/{post}/like', 'PostLikesController@destroy');
