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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'PageController@index')->name('dashboard');
        Route::group(['prefix' => 'catalog', 'namespace' => 'Catalog'], function () {
            Route::get('/', 'ProductController@getAll')->name('catalog');
            Route::get('/create', 'ProductController@create')->name('create_product');
        });
        Route::group(['prefix' => 'product-groups', 'namespace' => 'Catalog'], function () {
            Route::get('/', 'GroupsController@getAll')->name('groups');
            Route::get('/create', 'GroupController@create')->name('create_group');
        });
        Route::group(['prefix' => 'categories', 'namespace' => 'Catalog'], function () {
            Route::get('/', 'CategoryController@getAll')->name('categories');
            Route::get('/create', 'CategoryController@create')->name('create_category');
        });
        Route::group(['prefix' => 'attributes', 'namespace' => 'Catalog'], function () {
            Route::get('/', 'AttributeController@getAll')->name('attributes');
            Route::get('/create', 'AttributeController@create')->name('create_attribute');
        });
});


