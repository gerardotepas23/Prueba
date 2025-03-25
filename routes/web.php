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

Route::get('/', function () {
    return view('welcome');
});

    Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home', [App\Http\Controllers\ClienteController::class, 'index'])->name('home');
Route::post('home', [App\Http\Controllers\ClienteController::class, 'store'])->name('home.store');
//Route::put('home/{cliente}', [App\Http\Controllers\ClienteController::class, 'update'])->name('home.update');
//Route::delete('home/{cliente}', [App\Http\Controllers\ClienteController::class, 'destroy'])->name('home.destroy');
//Route::get('/autores', 'AutorController@index');

Route::get('home', [App\Http\Controllers\controlador_productos::class, 'index'])->name('home');
Route::post('home', [App\Http\Controllers\controlador_productos::class, 'store'])->name('home.store');
Route::put('home/{productos}', [App\Http\Controllers\controlador_productos::class, 'update'])->name('home.update');
Route::delete('home/{productos}', [App\Http\Controllers\controlador_productos::class, 'destroy'])->name('home.destroy');


// Rutas de acceso
