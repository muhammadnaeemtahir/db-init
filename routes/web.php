<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\DashboardController;

// index route
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// dashboard routes
Route::prefix('/dashboard')->group(function () {
    Route::get('/articles', [DashboardController::class, 'articles'])->name('articles');
    Route::get('/publish-article', [DashboardController::class, 'publishArticle'])->name('article.publish');
    Route::get('/events-log', [DashboardController::class, 'EventsLog'])->name('events.log');
    Route::get('/firewall', [DashboardController::class, 'Firewall'])->name('firewall');
    Route::get('/users', [DashboardController::class, 'Users'])->name('users');
    Route::get('/add-user', [DashboardController::class, 'AddUser'])->name('user.add');
    Route::get('/areas', [DashboardController::class, 'Areas'])->name('areas');
    Route::get('/add-area', [DashboardController::class, 'AddArea'])->name('areas.add');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'articlesindex'])->name('home');
