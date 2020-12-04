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

Route::get('/', 'HomeController@index')->name('home.index');

// contact
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact.store');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/volunteer', 'volunteer')->name('volunteer');
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::view('/donate', 'donate')->name('donate');

// paystack
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/thanks', 'PaymentController@handleGatewayCallback');
Route::view('/thank', 'thank')->name('thank');

// affiliates
Route::get('/publication', 'PublicationController@index')->name('publication.index');
Route::get('/news', 'NewsController@index')->name('news.index');

// videos
Route::get('/video', 'VideoController@index')->name('video.index');

// board ofmtrustees
Route::get('/board', 'BoardController@index')->name('board.index');

// teams
Route::get('/team', 'TeamController@index')->name('team.index');

Route::view('/organisation', 'organisation')->name('organisation');
