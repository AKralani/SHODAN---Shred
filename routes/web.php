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


Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');

Route::get('/register', 'RegistrationController@register')->name('register');
Route::post('/register', 'RegistrationController@postRegister')->name('post-register');


