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
Route::get('/books', 'BookController@index')->name('book.list');
Route::get('/books/add', 'BookController@add')->name('book.add');
Route::post('/books/insert', 'BookController@insert')->name('book.insert');
Route::get('/books/{id}/edit', 'BookController@edit')->name('book.edit');
Route::post('/books/{id}/update', 'BookController@update')->name('book.update');
Route::get('/books/{id}/delete', 'BookController@delete')->name('book.delete');
