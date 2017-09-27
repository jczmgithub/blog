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
    return view('hola');
});

Route::get('/adios', function () {
    return view('adios');
});

Route::get('/adiosGet', function () {
    return view('adios');
});

Route::post('/adiosPost', function () {
    return view('adios');
});

Route::post('/adiosPostDatos', function () {
    return view('adiosPostDatos');
});

Route::post('/datosBBDD', function () {
    return view('datosBBDD');
});
