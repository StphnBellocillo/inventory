<?php

use Illuminate\Support\Facades\Route;

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

// Brands

Route::post('/brands', 'BrandController@create');
Route::get('/brands/all', 'BrandController@getAll');
Route::get('/brands/{id}', 'BrandController@findId');
Route::put('/brands/update/{id}', 'BrandController@update');
Route::get('/brands/delete/{id}', 'BrandController@delete');

// Category

Route::post('/category', 'CategoryController@create');
Route::get('/category/all', 'CategoryController@getAll');
Route::get('/category/{id}', 'CategoryController@findId');
Route::put('/category/update/{id}', 'CategoryController@update');
Route::get('/category/delete/{id}', 'CategoryController@delete');

// Group

Route::post('/group', 'GroupController@create');
Route::get('/group/all', 'GroupController@getAll');
Route::get('/group/{id}', 'GroupController@findId');
Route::put('/group/update/{id}', 'GroupController@update');
Route::get('/group/delete/{id}', 'GroupController@delete');
