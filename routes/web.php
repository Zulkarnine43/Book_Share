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

Route::get('/user/signup', 'UserLoginController@user_signup')->name('user_signup');


Route::post('/user/signup/db', 'UserLoginController@user_reg_db')->name('user_reg_db');

Route::get('/user/login', 'UserLoginController@usr_login')->name('usr_login');

Route::post('/user/login/db', 'UserLoginController@user_db_action')->name('user_db_action');

Route::get('/upload/book', 'BooksController@upload_book')->name('upload_book');

Route::post('/upload/book/db', 'BooksController@upload_book_db')->name('upload_book_db');

Route::get('/dwnlod_book/{id}', 'BooksController@dwnlod_book')->name('dwnlod_book');

Route::get('/', 'PagesController@index')->name('index');

Route::get('/books', 'BooksController@index')->name('books.index');
Route::get('/books/single-book', 'BooksController@show')->name('books.show');
