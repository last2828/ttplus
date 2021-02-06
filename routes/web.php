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

\Route::group(['namespace' => 'Front', 'as' => 'pages.'], function () {
    \Route::get('/', 'HomeController@index')->name('home');
    \Route::get('/contact', 'HomeController@contact')->name('contact');
    \Route::get('/about-us', 'HomeController@about')->name('about');

    \Route::group(['prefix' => 'catalog', 'namespace' => 'Catalog', 'as' => 'catalog.'], function () {
        \Route::get('/', 'CatalogController@index')->name('index');
        \Route::get('/{category}', 'CatalogController@mainCategoryList')->name('maincategory');

        \Route::group(['prefix' => 'category', 'as' => 'category.'], function() {
            \Route::get('/{category}', 'CatalogController@subCategoryList')->name('subcategory');
            \Route::get('/{category}/{group?}', 'CatalogController@subCategoryList')->name('group');
        });

        \Route::get('/detail/{product}', 'CatalogController@showProduct')->name('product');
    });

    \Route::group(['prefix' => 'info', 'namespace' => 'Blog', 'as' => 'posts.'], function () {
        \Route::get('/', 'PostController@index')->name('index');
        \Route::get('/{slug}', 'PostController@show')->name('show');
    });

    \Route::post('/offers-store', 'OfferController@store')->name('offers.store');
});

\Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    \Route::get('/', 'AdminController@index')->name('dashboard');
    \Route::get('/upload-file', 'ImageController@manager')->name('file-manager');

    \Route::group(['prefix' => 'blog', 'as' => 'blog.', 'namespace' => 'Blog'], function () {
        \Route::resources(['posts' => 'PostController']);
    });

    \Route::group(['prefix' => 'catalog', 'as' => 'catalog.', 'namespace' => 'Catalog'], function () {
        \Route::resources(['products' => 'ProductController']);
        \Route::resources(['attributes' => 'AttributeController']);
        \Route::resources(['groups' => 'GroupController']);
        \Route::resources(['product_categories' => 'CategoryController']);
    });

    \Route::group(['as' => 'info_pages.', 'namespace' => 'InfoPages'], function () {
        \Route::get('/about/', 'AboutController@index')->name('about.index');
        \Route::put('/about/update', 'AboutController@update')->name('about.update');
        \Route::get('/contact', 'ContactController@index')->name('contact.index');
        \Route::put('/contact/update', 'ContactController@update')->name('contact.update');
    });
});

Auth::routes();

\Route::get('logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth');
