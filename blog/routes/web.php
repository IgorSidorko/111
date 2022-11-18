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


Route::get('/home', [App\Http\Controllers\ShopController::class, 'ShowHome']);

// Route::get('/catalog', 'MainController@ShowCatalog');

// Route::get('/location', 'MainController@ShowLocation');