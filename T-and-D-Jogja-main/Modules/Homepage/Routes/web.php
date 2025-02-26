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

Route::name('homepage.')->group(function() {
    Route::get('/', 'HomepageController@index')->name('index');

    // type
    Route::get('/tipe/{programtype:slug}', 'HomepageController@tipe')->name('tipe');

    // program
    Route::get('/programme/{program:slug}', 'HomepageController@program')->name('program');
    Route::post('/programme/{program:slug}', 'HomepageController@daftar_program')->name('daftar_program')->middleware('auth');

    // search
    Route::post('/cari', 'HomepageController@cari')->name('cari');
});
