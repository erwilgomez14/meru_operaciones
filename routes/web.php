<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/panel', function () {
    return view('panel.page');
});
Route::get('/', function () {
    return view('auth.page');
});*/

Route::view('/', 'auth.page');

Route::view('/panel', 'panel.page');


Route::post('/', function() {

    $credenciales = request()->only('uid','clave');

    dump($credenciales);
});

