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


Route::get('/photos', 'Admin\PhotoController@index');
Route::post('/photos/upload', 'Admin\PhotoController@upload');
Route::get('/photos/delete/{id}', 'Admin\PhotoController@delete');

Route::group(['namespace' => 'Front', 'as' => 'pages.'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    
    Route::group(['prefix' => 'catalog', 'namespace' => 'Catalog', 'as' => 'catalog.'], function () {
        Route::get('/', 'CatalogController@index')->name('index');

        Route::group(['prefix' => 'dunkermotoren', 'as' => 'dunkermotoren.'], function () {
            Route::get('/', 'CategoryController@dunkermotoren')->name('index');
            Route::get('/{category}', 'CategoryController@index')->name('category');
            Route::get('/{category}/{group?}', 'CategoryController@index')->name('group');
            Route::get('/{category}/{group?}/detail/{product}', 'ProductController@index')->name('product');
        });

        Route::group(['prefix' => 'jianghai', 'as' => 'jianghai.'], function () {
            Route::get('/', 'CategoryController@jianghai')->name('index');
            Route::get('/{category}', 'CategoryController@index')->name('category');
            Route::get('/{category}/detail/{product}', 'ProductController@index')->name('product');
        });

    });

    Route::group(['prefix' => 'info', 'namespace' => 'News', 'as' => 'news.'], function () {
        Route::get('/', 'NewsController@index')->name('index');
        Route::get('/{slug}', 'ArticleController@index')->name('article');
    });


    Route::get('/about-us', 'AboutController@index')->name('about');
    Route::get('/about-us/style', 'AboutController@style');
    Route::get('/contact', 'ContactController@index')->name('contact');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('/upload-file', 'AdminController@manager')->name('file-manager');

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

Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/home', 'HomeController@index')->name('home');
