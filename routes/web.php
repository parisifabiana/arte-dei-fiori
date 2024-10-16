<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Page
Route::get('/chi-siamo', [AboutController::class, 'index'])->name('about');

// Services Page
Route::get('/cosa-facciamo', [ServicesController::class, 'index'])->name('services');

// Rotta per visualizzare la pagina dei contatti
Route::get('/contatti', [ContactController::class, 'index'])->name('contact');

// Rotta per gestire l'invio del form
Route::post('/contatti', [ContactController::class, 'submit'])->name('email.contact.form');

// Product CRUD routes
Route::resource('products', ProductController::class);
