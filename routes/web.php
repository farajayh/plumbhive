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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::resource('/','ThreadController');
Route::resource('/thread','ThreadController');
Route::resource('comment', 'CommentController', ['only'=>['update', 'destroy']]);

Auth::routes();

//Route::get('/test/{slug}', 'ThreadController@showsingle');
Route::get('/test/{id}', 'ThreadController@showreplies');
Route::get('/profile', 'ProfileController@show_profile');
Route::post('/profile', 'ProfileController@update_profile');
Route::get('/change-password', 'ProfileController@show_change_password');
Route::post('/change-password', 'ProfileController@change_password');
Route::get('/post/{slug}', 'ThreadController@showsingle');
Route::get('/category/{category}', 'ThreadController@posts_by_category');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::view('/about', 'about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@contact_submit')->name('contact_submit');
Route::post('comment/create/{thread}','CommentController@addThreadComment')->name('threadcomment.store');
Route::post('reply/create/{comment}','CommentController@addReplyComment')->name('replycomment.store');