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

Route::get('/', function () {
    /*return view('welcome');*/
      return view('auth.login');
});
Route::get('register', function (){
	return view('home.register');
});


Route::auth();

Route::get('home', ['uses' => 'HomeController@index', 'as' => 'home']);
/*Route::get('home', 'HomeController@index');*/

Route::get('showfriend', 'HomeController@showfriend');

Route::get('viewprofile/{id}', ['uses' => 'HomeController@viewProfile', 'as' => 'viewprofile']);

Route::get('editprofile/{id}', 'HomeController@editprofile');
/*Route::get('viewprofile/{id}', 'HomeController@viewProfile');*/