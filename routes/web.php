<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class,'homepage'])->name('home');
Route::get('/inserisci-annuncio', [PublicController::class, 'insertAdd'])->name('insertAdd');