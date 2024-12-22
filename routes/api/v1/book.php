<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\BookController;


Route::get('/', [BookController::class, 'index'])->name('api.v1.books.index');
Route::post('/', [BookController::class, 'store'])->name('api.v1.books.store');
Route::get('/{book}', [BookController::class, 'show'])->name('api.v1.books.show');
Route::put('/{book}', [BookController::class, 'update'])->name('api.v1.books.update');
Route::delete('/{book}', [BookController::class, 'destroy'])->name('api.v1.books.destroy');
