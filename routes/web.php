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

Route::group(['prefix' => 'admin'], function () {

    // crud teacher by admin
    Route::get('get-teacher', function (){
        echo "23";
    });
    Route::post('update-teacher');
    Route::post('new-teacher');
    Route::post('delete-teacher');

    // crud student by admin
    Route::get('get-student', function (){
        echo "23";
    });
    Route::post('update-student');
    Route::post('new-student');
    Route::post('delete-student');

    // crud subject by admin
    Route::get('get-subject', function (){
        echo "23";
    });
    Route::post('update-subject');
    Route::post('new-subject');
    Route::post('delete-subject');
});
