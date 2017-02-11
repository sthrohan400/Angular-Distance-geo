<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() { 
	Route::get('/dashboard','Dashboard\DashboardController@index'); 
	Route::get('/logout','Dashboard\DashboardController@logout'); 
}); 

/*
|--------------------------------------------------------------------------
| Country Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() { 
	Route::group(['prefix' => 'web'], function() { 
	Route::group(['prefix' => 'country'], function() { 
		Route::get('/','Country\CountryController@index');

		Route::post('/create','Country\CountryController@create');
		Route::get('/delete/{id}','Country\CountryController@delete');
		Route::get('/edit/{id}','Country\CountryController@edit');
		Route::post('/update/{id}','Country\CountryController@update');
		
		
	}); 
	Route::group(['prefix' =>'conversion'],function(){
		Route::get('/','conversion\ConversionController@index');
		Route::post('/create','conversion\ConversionController@create');


	});
	}); 
}); 