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
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('invoice', 'InvoiceController');

Route::get('addproduct', 'InvoiceController@addProduct');

Route::resource('product', 'ProductController');

Route::resource('clinic', 'ClinicController');

Route::get('/addproduct/{productRow}', 'InvoiceController@addProduct');

Route::get('/productdetail/{productId}', 'ProductController@productDetail');
Route::get('/invoice/delete/{invoiceId}', 'InvoiceController@destroy');
//Route::get('/invoices', 'InvoiceController@index')->name('invoice');
