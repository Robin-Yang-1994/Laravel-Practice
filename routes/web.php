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

//Route::get('/', function () {
  //  return view('welcome');
//});

// Route::get('about', function () {
//     return view('page.about');
// });

//Route::get('/people', function(){

//	people = ['Robin', 'Kevin', 'Gary'];

//	return view('page.people', compact('people'));
//});

Route::get('/', 'PageController@home');

Route::get('about', 'PageController@about');

Route::get('cars', 'CarsController@index');

Route::get('cars/{car}', 'CarsController@show');

Route::post('cars/{car}/informations', 'CarsController@addCarInformation');

Route::get('informations/{information}/edit', 'InformationsController@editInformation');

Route::patch('informations/{information}', 'InformationsController@updateInformation' );
