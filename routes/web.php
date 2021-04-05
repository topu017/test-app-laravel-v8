<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('userAccountInfo/{id}/showAccountInfo', 'App\Http\Controllers\HomeController@showAccountInfo')->name('showAccountInfo');
Route::post('user/{id}/storePhoto', ['uses' => 'App\Http\Controllers\HomeController@storePhoto', 'as' => 'storePhoto']);

//Users Backend
Route::get('users/index', ['uses' => 'App\Http\Controllers\UserController@index', 'as' => 'users.index']);
Route::get('users/create', ['uses' => 'App\Http\Controllers\UserController@create', 'as' => 'users.create']);
Route::post('storeUser', 'App\Http\Controllers\UserController@storeUser')->name('storeUser');
Route::get('users/{id}/showUserSingleData', 'App\Http\Controllers\UserController@showUserSingleData')->name('showUserSingleData');
Route::get('users/{id}/edit', ['uses' => 'App\Http\Controllers\UserController@edit', 'as' => 'users.edit']);
Route::post('users/{id}/updateUser', ['uses' => 'App\Http\Controllers\UserController@updateUser', 'as' => 'updateUser']);
Route::DELETE('users/{id}/destroyUser', ['uses' => 'App\Http\Controllers\UserController@destroyUser', 'as' => 'destroyUser']);


//Department Backend
Route::get('departments/index', ['uses' => 'App\Http\Controllers\DepartmentController@index', 'as' => 'departments.index']);
Route::get('departments/create', ['uses' => 'App\Http\Controllers\DepartmentController@create', 'as' => 'departments.create']);
Route::post('storeDepartment', 'App\Http\Controllers\DepartmentController@storeDepartment')->name('storeDepartment');
Route::get('departments/{id}/showDepartmentSingleData', 'App\Http\Controllers\DepartmentController@showDepartmentSingleData')->name('showDepartmentSingleData');
Route::get('departments/{id}/edit', ['uses' => 'App\Http\Controllers\DepartmentController@edit', 'as' => 'departments.edit']);
Route::post('departments/{id}/updateDepartment', ['uses' => 'App\Http\Controllers\DepartmentController@updateDepartment', 'as' => 'updateDepartment']);
Route::DELETE('departments/{id}/destroyDepartment', ['uses' => 'App\Http\Controllers\DepartmentController@destroyDepartment', 'as' => 'destroyDepartment']);
