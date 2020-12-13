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
Route::get('/books/add', 'BookController@index')->name('book.add');
Route::get('/books/{id}/edit', 'BookController@index')->name('book.edit');
Route::get('/books/{id}/delete', 'BookController@index')->name('book.delete');
