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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index');
Route::resource('/', 'HomeController');
Route::resource('/news', 'NewsController');
Route::resource('/fleet', 'FleetController');
Route::resource('/grocery', 'GroceryController');
Route::resource('/parts', 'PartsController');
Route::resource('/about', 'AboutController');
Route::resource('/order', 'OrderController');
Route::resource('/recipe', 'RecipeController');
Route::resource('/contact', 'ContactController');
Route::get('/river', 'RiverController@index');

Route::get('/sparkpost', function () {
  Mail::send('emails.test', [], function ($message) {
    $message
      ->from('postmaster@ergon.com', 'Elvis Presley')
      ->to('duncan.fraiser@ergon.com', 'Darth Dunk')
      ->subject('From SparkPost with ❤');
  });
});