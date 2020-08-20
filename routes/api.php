<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/category','CategoryController@index');
Route::get('/category/{id}','CategoryController@show');
Route::post('/category','CategoryController@store');
Route::put('/category/{category}','CategoryController@update');
Route::delete('/category/{category}','CategoryController@destroy');

Route::get('/subcategory','SubCategoryController@index');
Route::get('/subcategory/create','SubCategoryController@create');
Route::get('/subcategory/{subCategory}','SubCategoryController@show');
Route::get('/subcategory/edit/{subCategory}','SubCategoryController@edit');
Route::post('/subcategory','SubCategoryController@store');
Route::put('/subcategory/{subCategory}','SubCategoryController@update');
Route::delete('/subcategory/{subCategory}','SubCategoryController@destroy');
