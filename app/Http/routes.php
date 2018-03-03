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
    return view('welcome');
});

Route::get('/error', function() {
    return view('errors.error');
});

Route::group(['prefix' => 'maths', 'middleware' => ['guest', 'web', 'validator']], function() {
    Route::get('/add', 'MathController@add');
    Route::get('/sub', 'MathController@sub');
    Route::get('/mul', 'MathController@mul');
    Route::get('/divide', 'MathController@divide');
});
