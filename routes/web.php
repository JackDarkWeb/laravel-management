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


Route::get('/', 'HomeController@index')->name('home');
Route::get('about', 'HomeController@about')->name('about');
Route::get('service', 'HomeController@service')->name('service');
Route::get('contact', 'HomeController@contact')->name('contact');
Route::post('contact', 'HomeController@store')->name('contact.store');


Route::group(['prefix' => 'announces'], function(){

    Route::get('/', 'AnnounceController@index')->name('announces');
    Route::get('recent', 'AnnounceController@recent')->name('recent');
    Route::get('{id}/{slug}', 'AnnounceController@show')->name('announce')->where(['id' => '[0-9]+']);
    Route::get('category/{category}', 'AnnounceController@category')->name('category');

});

Route::group(['prefix' => 'admin'], function (){

    Route::get('/', 'Admin\\AdminController@index')->name('admin.index');
    Route::post('/', 'Admin\\AdminController@checkAdmin')->name('admin.store');
    Route::get('admin-lock', 'Admin\\AdminController@create')->name('admin.lock')->middleware('admin');
    Route::post('admin-lock', 'Admin\\AdminController@store')->name('admin.lock.store');
});














/*
Route::auth();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

});
*/

