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
    return redirect('index');
});

//Route::get('/', 'IndexController@index');

Route::get('index', 'IndexController@index');

Route::any('contact', 'ContactController@index');

Route::any('about', 'AboutController@index');

Route::any('article', 'ArticleController@index');