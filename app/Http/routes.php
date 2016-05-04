<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Routing\Router;

Route::auth();

Route::get('/', ['as' => 'main', function () {
    return view('index');
}]);

//Route::get('/news/{slug}', ['as' => 'news.show', 'uses' => 'NewsController@show']);

//Route::get('news', ['as' => 'news', 'uses' => 'NewsController@index']);

Route::group(['middleware' => [ 'guest']], function (Router $router) {
	Route::get('published', ['as' => 'posts', 'uses' => 'PostController@index']);
	Route::get('unpublished', ['as' => 'posts.unpublished', 'uses' => 'PostController@unpublished']);
	$router->resource('post', 'PostController');
	$router->resource('news', 'NewsController');
});
