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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/gallery', 'GalleryController@index');
Route::get('/getgallery/{id}', 'GalleryController@getgallery');
Route::post('/fileupload', 'GalleryController@post_upload');
Route::match(['get', 'post'],'fileupload2', 'GalleryController@post_upload2');
