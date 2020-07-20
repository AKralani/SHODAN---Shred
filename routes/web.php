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
// kod i ri gjithashtu
Route::get('/post/show/{id}', 'PostController@show')->name('post.show');
// New code nashta kishe mujt me shti ne new folder po njiher per njiher pe lo qishtu
Route::get('/posts', 'PostController@index')->name('posts');
// Comments
Route::post('/comment/store', 'CommentController@store')->name('comment.add');
// Replies
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');
// DELETE COMMENTS AND REPLIES
Route::delete('/delete/{id}', 'CommentController@destroy')->name('comment.destroy');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/profiles/{user}', 'ProfileController@show')->name('profile');
Route::get('/profiles/{user:name}/edit', 'ProfileController@edit')->middleware('can:edit,user');
Route::patch('/profiles/{user:name}', 'ProfileController@update')->middleware('can:edit,user');

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

