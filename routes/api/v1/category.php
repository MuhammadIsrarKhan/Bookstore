<?php

use App\Http\Controllers\Api\v1\CategoryController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('api.v1.categories.index');
    Route::post('/', [CategoryController::class, 'store'])->name('api.v1.categories.store');
    Route::get('/{category}', [CategoryController::class, 'show'])->name('api.v1.categories.show');
    Route::put('/{category}', [CategoryController::class, 'update'])->name('api.v1.categories.update');
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('api.v1.categories.destroy');
});
