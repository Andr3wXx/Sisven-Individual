<?php

use Illuminate\Http\Request;
use App\Http\Controllers\api\CategoriaController;
use App\Http\Controllers\api\CustomerController;
use App\Http\Controllers\api\ProductoController;
use App\Http\Controllers\api\PaymodeController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Rutas de Categorias

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::delete('/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
Route::get('/categorias/{categoria}', [CategoriaController::class, 'show'])->name('categorias.show');
Route::put('/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');

//Rutas de Customers

Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');

//Rutas de Paymode

Route::get('/paymodes', [PaymodeController::class, 'index'])->name('paymodes');
Route::post('/paymodes', [PaymodeController::class, 'store'])->name('paymodes.store');
Route::delete('/paymodes/{paymode}', [PaymodeController::class, 'destroy'])->name('paymodes.destroy');
Route::get('/paymodes/{paymode}', [PaymodeController::class, 'show'])->name('paymodes.show');
Route::put('/paymodes/{paymode}', [PaymodeController::class, 'update'])->name('paymodes.update');

//Rutas Productos

Route::get('/productos', [ProductoController::class, 'index'])->name('products');
Route::post('/productos', [ProductoController::class, 'store'])->name('products.store');
Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('products.destroy');
Route::get('/productos/{producto}', [ProductoController::class, 'show'])->name('products.show');
Route::put('/productos/{producto}', [ProductoController::class, 'update'])->name('products.update');
