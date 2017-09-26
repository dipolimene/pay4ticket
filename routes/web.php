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

// Homepage route
Route::get('/', 'ViewController@show');

// User registration routes...
Route::get('/sellticket/register', 'RegisterController@show');
Route::post('/sellticket/register', 'RegisterController@store');

// Authenticating user access routes...
Route::get('/sellticket/login', 'SessionController@show')->name('home');
Route::post('/sellticket/login', 'SessionController@store');	

// Logout route...
Route::get('/logout', 'SessionController@logout');

// Password reset link request routes...
/*Route::get('password/email', 'Auth\ResetPasswordController@getEmail');
Route::post('password/email', 'Auth\ResetPasswordController@postEmail');*/

// Password reset routes...
/*Route::get('password/reset/{token}', 'Auth\ResetPasswordController@getReset');
Route::post('password/reset', 'Auth\ResetPasswordController@postReset');*/

// Dashboard/Profile registration routes...
Route::get('/dashboard/{id}', 'ProfileController@show');
Route::post('/dashboard/{id}', 'ProfileController@store');

// Events form routes...
Route::get('/dashboard/event/{id}', 'EventController@show');
Route::post('/dashboard/event/{id}', 'EventController@store');


/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
