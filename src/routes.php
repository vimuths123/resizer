<?php

use Illuminate\Support\Facades\Route;
use ResierPackage\Controllers\ResierController;

Route::middleware(['web'])->group(function () {
    Route::get('/resier', [ResierController::class, 'index'])->name('resier.index');
    Route::post('/resier/submit', [ResierController::class, 'submit'])->name('resier.submit');
});
