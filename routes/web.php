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

Route::group(['namespace' => 'Front', 'as' => 'pages.'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/offers-store', 'OfferController@store')->name('offers.store');
    
    Route::group(['prefix' => 'catalog', 'namespace' => 'Catalog', 'as' => 'catalog.'], function () {
        Route::get('/', 'CatalogController@index')->name('index');

        Route::group(['prefix' => 'dunkermotoren', 'as' => 'dunkermotoren.'], function () {
            Route::get('/', 'CategoryController@dunkermotoren')->name('index');
            Route::get('/{category}', 'CategoryController@index')->name('category');
            Route::get('/{category}/{group?}', 'CategoryController@index')->name('group');
            Route::get('/{category}/{group?}/detail/{product}', 'ProductController@dunker')->name('product');
        });

        Route::group(['prefix' => 'jianghai', 'as' => 'jianghai.'], function () {
            Route::get('/', 'CategoryController@jianghai')->name('index');
            Route::get('/{category}', 'CategoryController@index')->name('category');
            Route::get('/{category}/detail/{product}', 'ProductController@jianghai')->name('product');
        });

    });

    Route::group(['prefix' => 'info', 'namespace' => 'News', 'as' => 'news.'], function () {
        Route::get('/', 'NewsController@index')->name('index');
        Route::get('/{slug}', 'ArticleController@index')->name('article');
    });


    Route::get('/about-us', 'AboutController@index')->name('about');
    Route::get('/contact', 'ContactController@index')->name('contact');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {

    Route::get('/', 'AdminController@index')->name('dashboard');

    Route::group(['prefix' => 'gallery'], function() {
        Route::get('/upload-file', 'PhotoController@manager')->name('file-manager');
        Route::get('/photos', 'PhotoController@index');
        Route::post('/photos/upload', 'PhotoController@upload');
        Route::get('/photos/delete/{id}', 'PhotoController@delete');
    });

    Route::resources(['prefix' => 'blog', 'as' => 'blog.', 'namespace' => 'Blog', 'posts' => 'PostController']);

    Route::group(['prefix' => 'catalog', 'as' => 'catalog.', 'namespace' => 'Catalog'], function () {
        Route::resources(['products' => 'ProductController']);
        Route::resources(['attributes' => 'AttributeController']);
        Route::resources(['groups' => 'GroupController']);
        Route::resources(['product_categories' => 'CategoryController']);
    });

    Route::group(['as' => 'info_pages.', 'namespace' => 'InfoPages'], function () {
        Route::get('/about/', 'AboutController@index')->name('index');
        Route::put('/about/update', 'AboutController@update')->name('update');
        Route::get('/contact', 'ContactController@index')->name('index');
        Route::put('/contact/update', 'ContactController@update')->name('update');
    });
});


Auth::routes();

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
