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

Route::post('/contact', 'ContactController@store')->name('contact.store');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::view('/donate', 'donate')->name('donate');
Route::view('/contact', 'contact')->name('contact');

// paystack
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/thanks', 'PaymentController@handleGatewayCallback');
