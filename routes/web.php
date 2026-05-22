<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SiteController;
use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');

Route::get('/kategori/{slug}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/git/{slug}', [SiteController::class, 'go'])->name('site.go');

Route::view('/iletisim', 'pages.contact')->name('contact');
Route::view('/link-degisimi', 'pages.link-exchange')->name('link-exchange');
Route::view('/gizlilik', 'pages.privacy')->name('privacy');
Route::view('/sartlar', 'pages.terms')->name('terms');
