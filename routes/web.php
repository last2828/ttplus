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


Route::post('/photos', 'Admin\PhotoController@upload');

Route::group(['namespace' => 'Front', 'as' => 'pages.'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about-us', 'AboutController@index')->name('about');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'AdminController@index')->name('dashboard');

    Route::group(['prefix' => 'catalog', 'namespace' => 'Catalog'], function () {
        Route::resources(['products' => 'ProductController']);
        Route::resources(['attributes' => 'AttributeController']);
        Route::resources(['groups' => 'GroupController']);
        Route::resources(['product_categories' => 'CategoryController']);
    });

    Route::group(['prefix' => 'blog', 'namespace' => 'Blog'], function () {
        Route::resources(['posts' => 'PostController']);
        Route::resources(['categories' => 'CategoryController']);
    });

    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::get('/', 'AboutController@index')->name('index');
        Route::put('/update', 'AboutController@update')->name('update');
    });



});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
