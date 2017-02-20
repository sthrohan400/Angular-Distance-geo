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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('register/forex/public','FrontendPageController@public_Forex');
Route::post('register/forex/public','FrontendRequestController@register_Public_Forex');
Route::get('','FrontendPageController@index');





/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() { 
	Route::get('/dashboard','Dashboard\DashboardController@index'); 
	Route::post('/login','AuthenticateUserController@checkLogin');
	Route::get('/logout','AuthenticateUserController@checklogout'); 
	Route::get('/login',function(){
	return view('backend.login');
});
}); 


Route::group(['prefix' => 'admin'], function() { 

	/*
|--------------------------------------------------------------------------
| Forex Api  Routes
|--------------------------------------------------------------------------
*/
	Route::group(['prefix' => 'forex'], function() { 
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
		Route::get('/delete/{id}','conversion\ConversionController@delete');


	});
	}); 

/*
|--------------------------------------------------------------------------
| Horoscope Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'horoscope'], function() { 
	
	Route::group(['prefix' => 'setting'], function() { 
		Route::get('/','Rashi\RashiController@index');
		Route::post('/create','Rashi\RashiController@create');
		Route::get('/delete/{id}','Rashi\RashiController@delete');
		Route::get('/edit/{id}','Rashi\RashiController@edit');
		Route::post('/update/{id}','Rashi\RashiController@update');

	});	

	Route::group(['prefix' => 'rashi'], function() { 

		Route::get('/{page}','Rashi\RashiHandlerController@index');
		Route::post('/create','Rashi\RashiHandlerController@create');
		Route::get('/delete/{id}','Rashi\RashiHandlerController@delete');
	});
	
	});		
}); 