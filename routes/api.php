<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/all', 'Api\EmployeeController@all');
Route::get('/employee/{family_name}/{given_name}','Api\EmployeeController@match');
Route::post('/employee/{family_name}/{given_name}/position','Api\BeaconController@beacon');
Route::get('/employee/{given_name}','Api\EmployeeController@test');
Route::get('/index/', 'Api\EmployeeController@error');

Route::get('/employee/{given_name}','Api\EmployeeController@test');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
