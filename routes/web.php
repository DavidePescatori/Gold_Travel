<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
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
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

// Accetta annuncio
Route::patch('/accetta/annuncio/{article}', [RevisorController::class, 'acceptArticle'])->middleware('isRevisor')->name('revisor.accept_article');

// Rifiuta annuncio
Route::patch('/rifiuta/annuncio/{article}', [RevisorController::class, 'rejectArticle'])->middleware('isRevisor')->name('revisor.reject_article');

// email

// Route::get('/richiesta/revisore', [ContactController::class, 'index'])->middleware('auth')->name('mail.contact_us');

Route::post('/contattaci/submit',[ContactController::class, 'contact_us_submit'])->name('mail.contact.us.submit');


// richiesta revisore
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('mail.become.revisor');

// rendi revisore
Route::get('/rendi/revisore{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
