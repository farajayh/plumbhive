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
Route::get('/post/{slug}', 'ThreadController@showsingle');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@contact_submit')->name('contact_submit');
Route::post('comment/create/{thread}','CommentController@addThreadComment')->name('threadcomment.store');
Route::post('reply/create/{comment}','CommentController@addReplyComment')->name('replycomment.store');