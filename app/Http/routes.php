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

Route::resource('articles', 'articlesController'); //Este metodo crea rutas por defecto para, registrar, ver, editar y eliminar

Route::get('article/{slug}', [					//De esta manera creamos una ruta personalizada
	'uses'	=> 'articlesController@show',		//La ruta por defecto muestra los articulos por id
	'as'	=> 'article.ver',					//Con esta ruta podemos mostrar los articulos por su slug.

]);