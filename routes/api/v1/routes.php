<?php

use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    include 'auth.php';
});

Route::prefix('books')->group(function () {
    include 'book.php';
});

Route::prefix('authors')->group(function () {
    include 'author.php';
});
