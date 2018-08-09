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

Route::get('/all', 'EmployeeController@all');
Route::get('user/{id}', 'UserController@update');
Route::get('/index', 'EmployeeController@index');
Route::get('/yes', 'EmployeeController@yes');
Route::get('/employee/{family_name_kana}/{given_name_kana}/position','EmployeeController@return_place');
Route::get('/beacon/{family_name_kana}/{given_name_kana}/{major}/{minor}','EmployeeController@check_beacon');