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

Route::get('/form', 'ProductController@index')->name('form');
Route::post('/add', 'ProductController@add')->name('add');
Route::get('/form-cat', 'CategoryController@index')->name('form_cat');
Route::post('/create-category', 'CategoryController@add')->name('add_cat');