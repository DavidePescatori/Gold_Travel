<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/categoria/{category}', [PublicController::class, 'categoryShow'])->name('category.show');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');

Route::get('/article/show{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/all', [ArticleController::class, 'allarticle'])->name('article.allarticle');

// Home revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.index');

// Accetta annuncio
Route::patch('/accetta/annuncio/{article}', [RevisorController::class, 'acceptArticle'])->name('revisor.accept_article');

// Rifiuta annuncio
Route::patch('/rifiuta/annuncio/{article}', [RevisorController::class, 'rejectArticle'])->name('revisor.reject_article');