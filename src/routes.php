<?php

use Illuminate\Support\Facades\Route;
use ResierPackage\Controllers\ResierController;

Route::get('/resier', [ResierController::class, 'index'])->name('resier.index');