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


Auth::routes(['register' => false]);;

Route::group( ['middleware' => ['auth']], function()
{
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('schools','SchoolsController');
Route::resource('invoice','InvoicesController');
Route::resource('students','StudentsController');
Route::resource('payment','PaymentsController');




});

