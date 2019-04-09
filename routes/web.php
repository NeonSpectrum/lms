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

Route::get('login', function () {
	return view('login');
})->name('login')->middleware('guest');
Route::get('navbar', function () {
	return view('navbar');
});
Route::get('logout', 'AuthController@logout');

Route::post('login', 'AuthController@login');
Route::get('dashboard', function () {
	return view('dashboard');
});
Route::get('courses', function () {
	return view('courses');
});
Route::get('students', function () {
	return view('students');
});

Route::middleware('auth')->group(function () {

});
