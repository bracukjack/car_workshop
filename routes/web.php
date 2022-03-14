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

Route::get('/', 'DashboardController@index')->name('index');
Route::get('/dashboard', 'DashboardController@index')->name('index');

Route::group(['middleware' => 'auth','cekrole:admin'], function(){
	Route::resource('/admin/car_owners','CarOwnersController');
	Route::get('/admin/car_owners_delete/{id}','CarOwnersController@destroy');

	Route::resource('/admin/cars_work','CarsController');
	Route::get('/admin/car_work_delete/{id}','CarsController@destroy');

	Route::resource('/admin/mechanics','MechanicsController');
	Route::get('/admin/mechanics_delete/{id}','MechanicsController@destroy');

	Route::resource('/admin/services','ServicesController');
	Route::get('/admin/services_delete/{id}','ServicesController@destroy');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
