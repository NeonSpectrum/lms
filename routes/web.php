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

Route::prefix('courses')->group(function () {
	Route::get('/', function () {
		return view('courses.index');
	})->name('courses');
	Route::get('sections', function () {
		return view('courses.sections.index');
	})->name('sections');
	Route::get('sections/lessons', function () {
		return view('courses.sections.lessons.index');
	})->name('lessons');
	Route::get('sections/lessons/files', function () {
		return view('courses.sections.lessons.files.index');
	})->name('files');
});

// Route::get('courses', function () {
// 	return view('courses');
// });
Route::get('students', function () {
	return view('students');
})->name('students');
Route::get('dashboard', function () {
	return view('dashboard');
});

Route::middleware('auth')->group(function () {

});
/////////////Breadcrumbs/////////////////
// Home
Breadcrumbs::for ('students', function ($trail) {
	$trail->push('Main: Students', route('students'));
});

Breadcrumbs::for ('courses', function ($trail) {
	$trail->push('Main: Courses', route('courses'));
});

Breadcrumbs::for ('sections', function ($trail) {
	$trail->parent('courses');
	$trail->push('Section', route('sections'));
});

Breadcrumbs::for ('lessons', function ($trail) {
	$trail->parent('sections');
	$trail->push('Lessons', route('lessons'));
});
Breadcrumbs::for ('files', function ($trail) {
	$trail->parent('lessons');
	$trail->push('Files	', route('files'));
});
