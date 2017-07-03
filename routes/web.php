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

//Rutas del FrontEnd

Route::get('/', [
		'as'	=>'front.index', 
		'uses' 	=> 'FrontController@index'
]);

Route::get('categories/{name}', [
	'uses'	=> 'FrontController@searchCategory',
	'as' 	=> 'front.search.category'
]);

Route::get('tags/{name}', [
	'uses' 	=> 'FrontController@searchTag',
	'as' 	=> 'front.search.tag'
]);

Route::get('articles/{slug}', [
	'uses'  => 'FrontController@viewArticle',
	'as' 	=> 'front.view.article'
]);

Route::group(['prefix'=> 'admin', 'middleware' => ['auth']], function () {

	/*Route::get('/', ['as'=>'admin.index', function() {
		return view('admin.index');
	}]);*/

	Route::group(['middleware'=>'admin'], function() {
		Route::resource('users', 'UsersController');
		Route::get('users/{id}/destroy', [
			'uses' => 'UsersController@destroy',
			'as' => 'admin.users.destroy'
		]);	
	});
	
	Route::resource('categories', 'CategoriesController');
	Route::get('categories/{id}/destroy', [
		'uses' => 'CategoriesController@destroy',
		'as' => 'admin.categories.destroy'
	]);

	Route::resource('tags', 'TagsController');
	Route::get('tags/{id}/destroy', [
		'uses' => 'TagsController@destroy',
		'as' => 'admin.tags.destroy'
	]);

	Route::resource('articles', 'ArticlesController');
	Route::get('articles/{id}/destroy', [
		'uses' => 'ArticlesController@destroy',
		'as' => 'admin.articles.destroy'
	]);

	Route::get('images', [
		'uses' => 'ImagesController@index',
		'as' => 'admin.images.index'
	]);
});

Route::get('/logout', function () {
	Auth::logout();

	return redirect('/');
});

Route::auth();

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
/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/

//Route::get('/home', 'HomeController@index');
