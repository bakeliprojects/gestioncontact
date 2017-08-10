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

Route::get('/', function (){               
    return view('welcome');
});

  Route::resource('contact', 'contacController');

 
  Route::get('fatou', 'contacController@index');
  Route::get('kine/{id}', 'contacController@show');
  Route::get('giv/{id}/edit', 'contacController@edit');


 Route::get('bin/create', 'ContacController@create');
 Route::post('bin', 'ContacController@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
