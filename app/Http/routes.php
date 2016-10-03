<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middlewareGroups' => 'web'], function () {

	Route::group(['middleware' => 'unAuthenticated'], function() {

	    Route::get('/', 'UserRegisterController@register_page');
		Route::post('public/registration', 'UserRegisterController@register_submit');

   	});
	Route::get('dashboard', 'AuthController@auth_login');
   	Route::group(['middleware' => 'adminAuth'], function() {
   		


   	});

	// basic calls
	Route::get('check_email/{email}', 'BasicController@check_email');

});

