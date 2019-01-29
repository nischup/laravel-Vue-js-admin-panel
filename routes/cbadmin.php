<?php 

Route::get('/',"LoginController@index" )->name('login.index')->middleware('guest.cbadmin');
Route::post('/',"LoginController@verify" )->name('login.verify');


Route::group(['middleware' => 'auth.cbadmin'], function () {
    
    Route::get('/dashboard',function () {
    return view('backend-file.dashboard');
} )->name('home.index');

	Route::resource('admin-new', 'CbAdminController');
	Route::resource('message', 'MessageController');
	Route::resource('team-member', 'TeamMemberController');
	Route::resource('service-setup', 'ServiceController');
	Route::resource('visitor-gallery', 'VisitorGalleryController');

	Route::get('/logout',"LoginController@logout" )->name('login.logout');

});


