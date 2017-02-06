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
    return view('home/index');
});

Route::resource('index', 'Index@Controller', ['prefix' => 'api']);

Route::group(['prefix' => 'article'], function() {
	Route::get('hot', 'Article\ArticleController@hotArticle');
});