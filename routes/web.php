<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Auth\LoginController;

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

Route::view('/', 'auth.page')->name('login');

Route::view('/panel', 'panel.page')->middleware('auth');


Route::post('/', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout']);


