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
Route::get('/acce', 'PublictionController@acce')->name('acce');
Route::get('/acce', 'PublictionController@acce')->name('acce');

