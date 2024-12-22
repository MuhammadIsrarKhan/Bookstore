<?php

use App\Http\Controllers\Api\v1\AuthorController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/', [AuthorController::class, 'index'])->name('api.v1.authors.index');
    Route::post('/', [AuthorController::class, 'store'])->name('api.v1.authors.store');
    Route::get('/{author}', [AuthorController::class, 'show'])->name('api.v1.authors.show');
    Route::put('/{author}', [AuthorController::class, 'update'])->name('api.v1.authors.update');
    Route::delete('/{author}', [AuthorController::class, 'destroy'])->name('api.v1.authors.destroy');
});
