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
Route::group(['prefix' => 'tasks'], function () {
    Route::get('/', 'TaskController@index')->name('tasks.index');

    Route::get('/create', 'TaskController@create')->name('tasks.create');
    Route::post('/', 'TaskController@store')->name('tasks.store');

});
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

