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
    return view('home.welcome');
});

Route::get('about', function (){

    return view('home.about');
});

Route::get('contact', function (){

    return view('home.contact');
});


Route::get('service', function (){

    return view('home.service');
});

Route::group(['prefix' => 'announce'], function(){

    Route::get('/', function (){

    });

    Route::get('{slug}-{id}', function ($slug, $id){

        /*
        $post = [];
        return response()->json($post);
        redirect()->back();
        */
    });

    Route::get('recent', function (){

    });

});














/*
Route::auth();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

});
*/

