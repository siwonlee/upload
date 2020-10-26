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
    // return view('welcome');
    return view('auth.login');
});

Route::get('/test', function () {
    return view('test');
}); 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('test');
})->name('dashboard');

Route::get('/add_upc', 'UpcController@add_upc')->name('add_upc');
Route::post('/add_upc', 'UpcController@add_upc_post')->name('add_upc_post');
Route::get('/add_upc/status', 'UpcController@status')->name('add_upc_status');
Route::get('/add_upc/sub/{id}', 'UpcController@subcategory');
Route::post('/add_upc_upload', 'UpcController@add_upc_upload')->name('add_upc_upload');


Route::get('/check_digit', 'CheckdigitController@index')->name('check_digit');
Route::get('/check_digit/find', 'CheckdigitController@find')->name('check_digit.find');
Route::get('/check_digit/check', 'CheckdigitController@check')->name('check_digit.check');
Route::get('/check_digit/convert', 'CheckdigitController@convert')->name('check_digit.convert');
Route::get('/check_digit/plu', 'CheckdigitController@plu')->name('check_digit.plu');



Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/category/general', 'CategoryController@general')->name('category.general');

