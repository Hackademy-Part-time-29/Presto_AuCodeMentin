<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;


Route::get('/', [PublicController::class,'homepage'])->name('home');
Route::get('/article', [PublicController::class, 'insert'])->name('insert');
Route::get('/create/article', [ArticleController::class, 'create'])->middleware(['auth'])->name('article.create');
