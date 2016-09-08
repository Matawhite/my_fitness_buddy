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

// Route::get('/', function () {
//   $people = ['Matt', 'Chelsea', 'Scout', 'Atticus'];
//   return view('welcome',compact('people'));
// });
//
// Route::get('about', function(){
//   return view('pages.about');
// });


Route::get('/', function(){ return view('welcome');});
Route::post('add', 'MealsController@store');
Route::get('meals', 'MealsController@index');
Route::get('meals/{meal}', 'MealsController@show');
Route::post('meals/{meal}/nutrients', 'NutrientController@store');
