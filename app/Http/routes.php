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

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

Route::get('about', ['as' => 'about', 'uses' => 'IndexController@about']);

Route::get('team', ['as' => 'team', 'uses' => 'IndexController@team']);

Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@contact']);

Route::get('mission', ['as' => 'mission', 'uses' => 'IndexController@mission']);

Route::post('contact', ['as' => 'contactUs', 'uses' => 'ContactController@contactUs']);

Route::get('search', ['as' => 'search', 'uses' => 'SearchController@search']);

Route::get('profile/{id}', ['as' => 'profile', 'uses' => 'UserController@index']);

/*
| Authentication routes
 */
 // Authentication routes...
 Route::get('login', ['as' => 'getLogin', 'uses' => 'Auth\AuthController@getLogin']);
 Route::post('login', ['as' => 'postLogin', 'uses' => 'Auth\AuthController@postLogin']);
 Route::get('logout', ['as' => 'getlogout', 'uses' => 'Auth\AuthController@getLogout']);

 // Registration routes...
 Route::get('register', ['as' => 'getRegister', 'uses' => 'Auth\AuthController@getRegister']);
 Route::post('register', ['as' => 'postRegister', 'uses' => 'Auth\AuthController@postRegister']);
/*
| End authentication routes
*/

Route::auth();

Route::get('/home', 'HomeController@index');
