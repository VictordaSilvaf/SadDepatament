<?php

use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\SmtpController;
use App\Http\Controllers\admin\TagController;
use App\Http\Controllers\admin\UserControllers;
use App\Http\Controllers\HomeController;
use App\Livewire\Pages\Blog\Blog;
use App\Livewire\Pages\BlogItem\BlogItem;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->prefix('/dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('/settings', SettingsController::class)
        ->middleware('can:create settings');
    Route::resource('/smtp', SmtpController::class)
        ->middleware('can:create smtp');
    Route::resource('/pages/users', UserControllers::class)
        ->middleware('can:create users')->names('users');
    Route::resource('/blogs', BlogController::class)
        ->middleware('can:create blogs')->names('blogs');
    Route::resource('/categories', CategoryController::class)
        ->middleware('can:create categories')->names('categories');
    Route::resource('/tags', TagController::class)
        ->middleware('can:create tags')->names('tags');
    Route::resource('/pages/home', \App\Http\Controllers\admin\HomeController::class)
        ->middleware('can:edit home')->names('dashboard.home');
});

Route::get('/', [HomeController::class, 'index'])->name('web.home');
//Route::get('/servicos', [HomeController::class, 'index'])->name('web.servicos');
Route::get('/blogs', Blog::class)->name('web.blogs');
Route::get('/blogs/{slug}', BlogItem::class)->name('web.blogs.show');
Route::get('/contato', [HomeController::class, 'index'])->name('web.contato');
