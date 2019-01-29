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

Route::get('/','PagesController@index');
Route::get('office-team','PagesController@team')->name('office-team');
Route::get('gallery','PagesController@visitor')->name('gallery');
Route::get('service','PagesController@service')->name('service');
Route::get('contact','PagesController@contact')->name('contact');
Route::post('sent-message','PagesController@message')->name('sent-message');

