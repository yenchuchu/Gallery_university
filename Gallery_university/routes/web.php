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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/upload', 'backend\UserController@index')->name('backend.index');
    Route::post('/handling-upload', 'backend\UserController@uploadImage')->name('backend.uploadImage');
});
Route::get('/', 'frontend\GalleryController@index')->name('frontend.gallery.index');
//    Route::get('/create_user', 'backend\UserController@createUser');

Auth::routes();
