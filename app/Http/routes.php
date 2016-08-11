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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('articles', 'ArticlesController');

//Route::get('article/{slug}', [                    //De esta manera creamos una ruta personalizada
//    'uses' => 'articlesController@show',        //La ruta por defecto muestra los articulos por id
//    'as' => 'article.ver',                    //Con esta ruta podemos mostrar los articulos por su slug.
//]);
Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {
    Route::resource('users', 'UsersController');
    Route::get('users/{id}/destroy', [
        'uses' => 'UsersController@destroy',
        'as' => 'admin.users.destroy'
    ]);
    Route::resource('categories','CategoriesController');
    Route::get('categories/{id}/destroy',[
        'uses'=>'CategoriesController@destroy',
        'as'=>'admin.categories.destroy'
    ]);
});

/*// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);*/

Route::get('admin/auth/login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as' => 'admin.auth.login'
]);
Route::post('admin/auth/login', [
    'uses' => 'Auth\AuthController@postLogin',
    'as' => 'admin.auth.login'
]);
Route::get('admin/auth/logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as' => 'admin.auth.logout'
]);

//Route::post('admin/auth/login', 'Auth\AuthController@postLogin');
//Route::get('admin/auth/logout', 'Auth\AuthController@getLogout');
