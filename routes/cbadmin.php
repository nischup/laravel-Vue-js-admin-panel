<?php 

Route::get('/',"LoginController@index" )->name('login.index')->middleware('guest.cbadmin');
Route::post('/',"LoginController@verify" )->name('login.verify');


Route::group(['middleware' => 'auth.cbadmin'], function () {
    
    Route::get('/home',function () {
    return view('cbadmin.index');
} )->name('home.index');

Route::get('/logout',"LoginController@logout" )->name('login.logout');

});


