<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/productos', function () {
    return view('productos');
})->middleware(['auth'])->name('productos');

Route::get('/mostrar', function () {
    return view('mostrar');
})->middleware(['auth'])->name('mostrar');

require __DIR__.'/auth.php';
