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

Route::resource('message', 'MessageController');
Route::resource('team-member', 'TeamMemberController');
Route::resource('service-setup', 'ServiceController');
Route::resource('visitor-gallery', 'VisitorGalleryController');

// Route::get('login', function () {
//     return view('backend-file.login');
// });



Auth::routes();

Route::get('/admin', 'PagesController@dashboard')->name('dashboard');
