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

Route::name('program.')->middleware('can:admin')->prefix('program')->group(function() {
    Route::get('/', 'ProgramController@index')->name('index');
    Route::post('/', 'ProgramController@index');
    Route::get('/type', 'ProgramController@type')->name('type');
    Route::post('/type', 'ProgramController@type');
    Route::get('/category', 'ProgramController@category')->name('category');
    Route::post('/category', 'ProgramController@category');
    Route::get('/location', 'ProgramController@location')->name('location');
    Route::post('/location', 'ProgramController@location');
    Route::get('/office', 'ProgramController@office')->name('office');
    Route::post('/office', 'ProgramController@office');
    Route::get('/members', 'ProgramController@members')->name('members');
    Route::post('/members', 'ProgramController@members');
});

Route::name('program.')->prefix('my-program')->middleware('can:member')->group(function(){
    Route::get('/', 'ProgramController@myprogram')->name('myprogram');
    Route::post('/', 'ProgramController@myprogram');
});
