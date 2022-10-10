<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CarroController;


Route::get('/', [ProductoController::class, 'index'])->name('index');
Route::get('productos/{id}', [ProductoController::class, 'show'])->name('single-product');

//Route::get('categoria/{id}', [CategoriaController::class, 'show'])->name('categoria');

//Route::post('cart-insert/', [CarroController::class, 'store'])->name('cart-insert');

//Route::delete('cart-delete/{id}', [CarroController::class, 'destroy'])->name('cart-delete');
