<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('employees', 'EmployeeController@index');
Route::get('employees_by_department', 'EmployeeController@empByDepartment');
Route::get('search_emp', 'EmployeeController@getEmployee');
Route::get('employee/{id}', 'EmployeeController@show');
Route::post('employee', 'EmployeeController@store');
Route::put('employee/{id}', 'EmployeeController@update');
Route::delete('employee/{id}', 'EmployeeController@destroy');

Route::get('departments', 'DepartmentController@index');
Route::get('department/{id}', 'DepartmentController@show');
Route::post('department', 'DepartmentController@store');
Route::put('department/{id}', 'DepartmentController@update');
Route::delete('department/{id}', 'DepartmentController@destroy');