<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@homepage');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/m/changepass', 'HomeController@changePasswordView')->name('changepass');
    Route::post('/m/changePass', 'HomeController@changePasswordPost')->name('changePass');
});

Route::get('/about', 'PagesController@about')->name('about');
Route::get('/products', 'PagesController@products')->name('products');
Route::get('/product/{id}', 'PagesController@product')->name('product');
Route::get('/gallery', 'PagesController@gallery')->name('gallery');
Route::get('/contact', 'PagesController@contact')->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
