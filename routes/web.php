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
    return view('aims');
});

Route::get('/teacher','TeachersController@show');

Route::get('/teacher/add','TeachersController@create');

Route::post('/teacher','TeachersController@store');

Route::get('/teacher/{id}/edit','TeachersController@edit');

Route::put('/teacher/{id}','TeachersController@update');

Route::get('/teacher/delete/{id}','TeachersController@destroy');

//parents//

Route::get('/parents','ParentsController@show');

Route::get('/parents/add','ParentsController@create');

Route::post('/parents','ParentsController@store');

Route::get('/parents/{id}/edit','ParentsController@edit');

Route::put('/parents/{id}','ParentsController@update');

Route::get('/parents/delete/{id}','ParentsController@destroy');




//lab//

Route::get('/lab','labController@show');

Route::get('/lab/add','labController@create');

Route::post('/lab','labController@store');

Route::get('/lab/{id}/edit','labController@edit');

Route::put('/lab/{id}','labController@update');

Route::get('/lab/delete/{id}','labController@destroy');








