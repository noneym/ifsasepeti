<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SitemapController;
use App\Livewire\Admin\AuthLogin;
use App\Livewire\Admin\CategoryEdit;
use App\Livewire\Admin\CategoryList;
use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\Admin\LinkExchangeList;
use App\Livewire\Admin\PostEdit;
use App\Livewire\Admin\PostList;
use App\Livewire\Admin\SiteEdit;
use App\Livewire\Admin\SiteList;
use App\Livewire\Admin\UserList;
use App\Livewire\HomePage;
use App\Livewire\SearchResults;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');

Route::get('/kategori/{slug}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/inceleme/{slug}', [SiteController::class, 'show'])->name('site.show');
Route::get('/git/{slug}', [SiteController::class, 'go'])->name('site.go');

Route::get('/ara', SearchResults::class)->name('search');

Route::view('/iletisim', 'pages.contact')->name('contact');
Route::view('/link-degisimi', 'pages.link-exchange')->name('link-exchange');
Route::view('/gizlilik', 'pages.privacy')->name('privacy');
Route::view('/sartlar', 'pages.terms')->name('terms');
Route::view('/sikayet', 'pages.complaint')->name('complaint');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// SEO
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', AuthLogin::class)->name('login');

    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

        Route::get('/', AdminDashboard::class)->name('dashboard');

        Route::get('/sites', SiteList::class)->name('sites');
        Route::get('/sites/create', SiteEdit::class)->name('site.create');
        Route::get('/sites/{site}/edit', SiteEdit::class)->name('site.edit');

        Route::get('/categories', CategoryList::class)->name('categories');
        Route::get('/categories/create', CategoryEdit::class)->name('category.create');
        Route::get('/categories/{category}/edit', CategoryEdit::class)->name('category.edit');

        Route::get('/link-exchanges', LinkExchangeList::class)->name('link-exchanges');

        Route::get('/posts', PostList::class)->name('posts');
        Route::get('/posts/create', PostEdit::class)->name('post.create');
        Route::get('/posts/{post}/edit', PostEdit::class)->name('post.edit');

        Route::get('/users', UserList::class)->name('users');
    });
});
