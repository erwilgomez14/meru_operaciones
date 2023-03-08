<?php

use App\Http\Controllers\Admin\MenuController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use Illuminate\Http\Request;

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

// dd(User::where('uid', 'vcoll')->get()->toArray());

Route::view('/', 'auth.page')->name('login');

Route::view('/panel', 'panel.page')->middleware('auth');;

// Route::get('/panel', function (Request $request) {


//     // $user = User::where('uid', $request->email)->get()->first();

//     // return $user;

//     return view('panel.page');

// })


Route::post('/', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout']);


Route::group(['prefix' => 'admin'], function(){

    Route::get('menu', [MenuController::class, 'index'])->name('menu');
    Route::get('menu/crear', [MenuController::class, 'crear'])->name('menu.crear');
    Route::post('menu', [MenuController::class, 'guardar'])->name('menu.guardar');
    Route::get('menu/{id}/editar', [MenuController::class, 'editar'])->name('menu.editar');
    Route::post('menu', [MenuController::class, 'guardar'])->name('menu.guardar');
    Route::post('menu/guardar-orden', [MenuController::class, 'guardarOrden'])->name('menu.guardarorden');
    Route::put('menu/{id}', [MenuController::class, 'actualizar'])->name('menu.actualizar');
    Route::delete('menu/{id}/eliminar', [MenuController::class, 'eliminar'])->name('menu.eliminar');


});

