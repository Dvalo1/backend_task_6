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
	return view('index');
});

Route::get("/products", "ProductsController@index");

Route::get("products/create","ProductsController@create");

Route::post("/products/store","ProductsController@store")->name("storeproducts");

Auth::routes();

Route::get("/home", "HomeController@index")->name('home');

Route::get("/admin/edit/{id}","ProductsController@edit")->name("adminedit");

Route::post("/admin/update","ProductsController@update")->name("adminupdate");