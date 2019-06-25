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
    return view('welcome');
});

Route::get('/dh', function () {
    return view('welcome');
});

Route::get('/producto/{id}', function ($id) {
    return "hola este es el parámetro: $id.";
});

Route::get('/parametroCondicional/{id?}', function ($id = "No recibí datos") {
     return "hola este es el parámetro condicional: $id.";
});

Route::get('/pasandoDatos', function () {
    $saludo = "Hola Turno Tarde.";

    // return view('welcome', ['hola' => $saludo]);
    //$vac = compact('saludo');
      //return view('welcome', compact('saludo'));
      return view('welcome')->with('hola', $saludo);
});

//Route::get('/peliculas2','PeliculasController@listarPeliculas');

Route::get('/peliculas', 'MovieController@list');

// Route::get('/actors', function(){
//   return view('actors');
// });
Route::get('/actors', 'ActorController@index');

Route::get('/actores','ActorController@directory');

Route::get('/actor/{id}','ActorController@show');

Route::get('/actores/buscar','ActorController@search');

Route::get('/agregarPelicula', function(){
  return view('agregarPelicula');
});
Route::post('/agregarPelicula', 'MovieController@create');

Route::get('/borrarPelicula','MovieController@delete');

Route::get('/pelicula/{id}','MovieController@showMovie');

//
