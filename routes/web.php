<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();


Route::get('/', 'produitController@showProduct');
Route::get('/home', 'produitController@index');
Route::get('/dashbord', 'adminController@index');
Route::post('/search','produitController@search');

Route::get('/search','produitController@result');
Route::get('/addproduct','produitController@addproduct');
Route::post('/insertproduct','produitController@insertproduct');

Route::get('/updateproduct/{id}','produitController@store');
Route::get('/deleteproduct','produitController@insertproduct');
Route::post('/updateprod','produitController@updateProduct');
Route::get('/deleteproduct/{id}','produitController@destroy');
Route::get('/details/{id}','produitController@detais');
Route::get('/productDelete/{id}','adminController@productdelete');
Route::post('/rating','ratingController@store');
