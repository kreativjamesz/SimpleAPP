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
Auth::routes();
Route::middleware('role:superadministrator|administrator')->group(function () {
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
	Route::get('/shopping-list', 'ShoppingListController@index')->name('shopping-list');
	/* USERS */
	Route::resource('users','UsersController');
	/* PROJECTS */
	/* Route::resource('projects','ProjectsController'); */
	/* Cannot use resource coz some part of a view can be navigate by a Simple User. */
	/* PROJECTS GET */
	Route::get('/projects/create','ProjectsController@create')->name('projects.create');
	/* PROJECTS POST */
	Route::post('/projects','ProjectsController@store')->name('projects.store');
	Route::post('/projects/create','ProjectsController@update')->name('projects.update');
	Route::post('/projects/create','ProjectsController@destroy')->name('projects.destroy');
	/* TASKS */
	/* Route::resource('tasks','TasksController'); */
	/* Cannot use resource coz some part of a view can be navigate by a Simple User. */
	/* TASKS GET */
	Route::get('/tasks','TasksController@index')->name('tasks.index');
	Route::get('/tasks/create','TasksController@create')->name('tasks.create');
	/* TASKS POST */
	Route::post('/tasks','TasksController@store')->name('tasks.store');
	Route::post('/tasks/create','TasksController@update')->name('tasks.update');
	Route::post('/tasks/create','TasksController@destroy')->name('tasks.destroy');

});
	
/* PROJECTS */
Route::get('/projects','ProjectsController@index')->name('projects.index');
Route::get('/projects/update','ProjectsController@show')->name('projects.show');	

/* TASKS */
Route::get('/tasks','TasksController@index')->name('tasks.index');
Route::get('/tasks/update','TasksController@show')->name('tasks.show');	

/* PROFILE */
Route::get('/profile', 'ProfileController@index')->name('profile');