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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all', 'Api\EmployeeController@all');
Route::get('/employee/{family_name}/{given_name}','Api\EmployeeController@match');
Route::get('/index/', 'Api\EmployeeController@error');
Route::get('/employee/{given_name}','Api\EmployeeController@test');


