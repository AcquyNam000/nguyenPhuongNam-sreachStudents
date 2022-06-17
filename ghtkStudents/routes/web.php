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


Route::get('/','studentController@index' );
//Route::get('/', function()
//{
//    return view('home');
//});
//
Route::get('/sreachNoImport', function()
{
    return view('processing');
});



Route::get('/trangchu','studentController@index');
Route::post('/processing','studentController@import_csv');
Route::post('/sreach','studentController@sreach');
Route::get('/hien','studentController@hien');





