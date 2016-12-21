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

Route::get('/', ['as' => 'home', 'uses' => 'PageController@home']);
Route::get('about', ['as' => 'about', 'uses' => 'PageController@about']);

Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', ['as' => 'contact.store', 'uses' => 'ContactController@store']);

Route::get('login', ['as' => 'login', 'uses' => 'LoginController@create']);
Route::post('login', ['as' => 'login.store', 'uses' => 'LoginController@store']);
Route::get('logout', ['as' => 'logout', 'uses' => 'LoginController@destroy']);

Route::group(['prefix' => 'blog', 'as' => 'blog.', 'namespace' => 'Blog'], function() {
	Route::get('category', ['as' => 'category.index', 'uses' => 'CategoryController@index']);
	Route::get('category/{slug}/show', ['as' => 'category.show', 'uses' => 'CategoryController@show']);
	Route::get('article', ['as' => 'article.index', 'uses' => 'ArticleController@index']);
	Route::get('article/{slug}/show', ['as' => 'article.show', 'uses' => 'ArticleController@show']);
});

Route::group(['prefix' => 'dash', 'as' => 'dash.', 'middleware' => 'auth'], function() {
	Route::get('/', ['as' => 'index', 'uses' => 'DashController@index']);
	Route::get('contact', ['as' => 'contact.index', 'uses' => 'ContactController@index']);
	
	Route::group(['prefix' => 'blog', 'as' => 'blog.', 'namespace' => 'Blog\Dash'], function() {
		Route::resource('category', 'CategoryController');
		Route::get('article', ['as' => 'article.index', 'uses' => 'ArticleController@index']);
		Route::get('article/create', ['as' => 'article.create', 'uses' => 'ArticleController@create']);
		Route::get('article/{article}/show', ['as' => 'article.show', 'uses' => 'ArticleController@show']);
		Route::get('article/{slug}/edit', ['as' => 'article.edit', 'uses' => 'ArticleController@edit']);
		Route::put('article', ['as' => 'article.update', 'uses' => 'ArticleController@update']);
		Route::post('article', ['as' => 'article.store', 'uses' => 'ArticleController@store']);
		Route::delete('article/{article}', ['as' => 'article.destroy', 'uses' => 'ArticleController@destroy']);
	});
});
