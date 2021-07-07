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
    return view('pages.Index');

});



Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/profile', 'PagesController@profile');

Route::get('/menu', 'PagesController@menu');
Route::get('/mylisting', 'PagesController@mylisting');

Route::get("/index", "PagesController@index");
Route::get('/detail','PagesController@detail');

Route::get('/home', 'HomeController@index');
Route::get("/main", "PagesController@main");
Route::get("/submit", "PagesController@submit");


Route::resource('vendors',"VendorsController");
Route::resource('foods', "FoodsController");

//route for creating food for a particular vendor

Route::get('/food/create/{id}',"FoodsVendorController@create");

Route::post('/food/store/{id}', "FoodsVendorController@store");

Route::get('/food/index/{id}', "FoodsVendorController@index");

//route for uploading images to the vendor

Route::get('/vendors/uploadImage/{id}', "VendorImageController@create" );

Route::post('/vendors/storeImage/{id}',"VendorImageController@store");

Route::get('/vendors/image_ask/{id}',"VendorImageController@ask");

Auth::routes();



