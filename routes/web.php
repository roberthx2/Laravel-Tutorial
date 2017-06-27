<?php

use Illuminate\Auth\Middleware\Authenticate;

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
    return view('welcome');
});


/*Route::get('articles/{nombre?}', function ($nombre = "No coloco nombre") {
	echo "Esta es la seccion de articulos y el nombre es: ".$nombre;
});*/

/*Route::get('articles', [
		'as' => 'articles',
		'uses' => 'UserController@view',
]);*/

/*Route::group(['prefix' => 'articles'], function (){

	Route::get('view/{articles?}', function($articles = "vacio"){
		echo $articles;
	});
});*/

/*Route::group(['prefix' => 'articles'], function (){

	Route::get('view/{id}', [
		'uses' 	=> 'TestController@view',
		'as' 	=> 'articlesView',
	]);
});*/

Route::group(['prefix'=> 'admin'], function () {

	Route::resource('users', 'UsersController');
	Route::get('users/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as' => 'admin.users.destroy'
	]);

	Route::resource('categories', 'CategoriesController');
	Route::get('categories/{id}/destroy', [
		'uses' => 'CategoriesController@destroy',
		'as' => 'admin.categories.destroy'
	]);
});

/*Route::get('admin/auth/login', [
	'uses'=>'Auth\LoginController@getLogin',
	'as'=>'admin.auth.login'
]);

Route::post('admin/auth/login', [
	'uses'=>'Auth\LoginController@postLogin',
	'as'=>'admin.auth.login'
]);

Route::get('admin/auth/logout', [
	'uses'=>'Auth\LoginController@getLogout',
	'as'=>'admin.auth.logout'
]);
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
