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

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/posts/create','PostController@create');

Route::resource('/posts','PostController');

Route::get('generate-pdf','PDFController@generatePDF');


Route::get('users', 'UserController@users');
Route::post('delete/{id}', 'UserController@delete');

Route::resource('books','BookController');

Route::get('excel', 'BookControllerExcel@index');
Route::post('excel/import', 'BookControllerExcel@import');
Route::get('excel/export', 'BookControllerExcel@export');
