<?php

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
    return view('welcome');
});

Auth::routes();

Route::post('quote','QuoteController@store')->name('quote.store');
Route::post('quote/upvote/{quote}', 'UpvoteController@store')->name('upvote.store');


Route::get('/home', 'HomeController@index')->name('home');
