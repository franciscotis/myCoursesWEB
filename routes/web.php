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

Route::get('/','CourseController@index')->name('index');

Route::get('/create','CourseController@create')->name('course.create');

Route::post('/store','CourseController@store')->name('course.store');

Route::get('/edit/{id}','CourseController@edit')->name('course.edit');

Route::put('/update/{id}','CourseController@update')->name('course.update');

Route::delete('/delete/{id}','CourseController@delete')->name('course.delete');
