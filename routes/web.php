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
	Route::resource('projects','ProjectsController');
	Route::resource('tasks','TasksController');
});
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/projects','ProjectsController@index')->name('projects');