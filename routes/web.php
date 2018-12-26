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

Route::get('sign','MainController@sign');

Route::resource('employee','EmployeeController');

Route::get('main','MainController@index');

Route::get('nabza','MainController@nabza');

Route::get('akhbar','MainController@akhbar');

Route::get('mokawalate','MainController@mokawalate');

Route::get('masharee3','MainController@masharee3');

Route::get('makalate','MainController@makalate');

Route::get('etasel','MainController@etasel');

Route::get('talabas3ar','MainController@talabas3ar');

Route::get('userlogin','MainController@userlogin');
Route::get('userlogout','MainController@userlogout');
Route::post('userlogin','MainController@user');

Route::get('employeelogin','MainController@employeelogin');
Route::get('employeelogout','MainController@employeelogout');
Route::post('employeelogin','MainController@employee');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
