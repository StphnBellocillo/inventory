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

// Registration

Route::post('/registration', 'RegistrationController@create');
Route::get('/registration/all', 'RegistrationController@getAll');
Route::get('/registration/{id}', 'RegistrationController@findId');
Route::put('/registration/update/{id}', 'RegistrationController@update');
Route::get('/registration/delete/{id}', 'RegistrationController@delete');

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


// Attribute

Route::post('/attribute', 'AttributeController@create');
Route::get('/attribute/all', 'AttributeController@getAll');
Route::get('/attribute/{id}', 'AttributeController@findId');
Route::put('/attribute/update/{id}', 'AttributeController@update');
Route::get('/attribute/delete/{id}', 'AttributeController@delete');

// Attribute Value

Route::post('/attributevalue', 'AttributeValueController@create');
Route::get('/attributevalue/all', 'AttributeValueController@getAll');
Route::get('/attributevalue/{id}', 'AttributeValueController@findId');
Route::put('/attributevalue/update/{id}', 'AttributeValueController@update');
Route::get('/attributevalue/delete/{id}', 'AttributeValueController@delete');

// Product

Route::post('/product', 'ProductController@create');
Route::get('/product/all', 'ProductController@getAll');
Route::get('/product/{id}', 'ProductController@findId');
Route::put('/product/update/{id}', 'ProductController@update');
Route::get('/product/delete/{id}', 'ProductController@delete');

// Order    

Route::post('/order', 'OrderController@create');
Route::get('/order/all', 'OrderController@getAll');
Route::get('/order/{id}', 'OrderController@findId');
Route::put('/order/update/{id}', 'OrderController@update');
Route::get('/order/delete/{id}', 'OrderController@delete');

// Company

Route::post('/company', 'CompanyController@create');
Route::get('/company/all', 'CompanyController@getAll');
Route::get('/company/{id}', 'CompanyController@findId');
Route::put('/company/update/{id}', 'CompanyController@update');
Route::get('/company/delete/{id}', 'CompanyController@delete');

// Profile

Route::post('/profile', 'ProfileController@create');
Route::get('/profile/all', 'ProfileController@getAll');
Route::get('/profile/{id}', 'ProfileController@findId');
Route::put('/profile/update/{id}', 'ProfileController@update');
Route::get('/profile/delete/{id}', 'ProfileController@delete');