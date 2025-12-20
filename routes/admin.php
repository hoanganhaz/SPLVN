<?php

use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\admin\PostController;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CKEditorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Routes không cần đăng nhập (login page)
        Route::prefix('auth')
            ->name('auth.')
            ->middleware('redirect.if.admin') // Nếu đã đăng nhập thì redirect
            ->group(function () {
                Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
                Route::post('login', [AuthController::class, 'login'])->name('login.submit');
            });

        // Routes cần đăng nhập
        Route::middleware('admin')->group(function () {

            // Logout route
            Route::post('auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

            // CKEditor upload (single route used by admin forms)
            Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.upload');

            // Home/Dashboard
            Route::get('/', [HomeController::class, 'index'])->name('home');

            // Posts routes
            Route::prefix('posts')->name('posts.')->group(function () {
                Route::get('/', [PostController::class, 'index'])->name('index');
                Route::get('/create', [PostController::class, 'create'])->name('create');
                Route::post('/', [PostController::class, 'store'])->name('store');
                Route::get('/{post}/show', [PostController::class, 'show'])->name('show');
                Route::get('/{post}/edit', [PostController::class, 'edit'])->name('edit');
                Route::put('/{post}', [PostController::class, 'update'])->name('update');
                Route::delete('/{post}', [PostController::class, 'destroy'])->name('destroy');
                Route::post('/ckeditor/upload', [CKEditorController::class, 'upload']);
            });

            // Contracts routes
            Route::prefix('contracts')->name('contracts.')->group(function () {
                Route::get('/', [ContactController::class, 'index'])->name('index');
                Route::get('/{contract}', [ContactController::class, 'show'])->name('show');
                Route::delete('/{contract}', [ContactController::class, 'destroy'])->name('destroy');
                Route::post('/{contract}/status', [ContactController::class, 'updateStatus'])->name('updateStatus');
            });

            // Products routes
            Route::prefix('products')->name('products.')->group(function () {
                Route::get('/', [ProductController::class, 'index'])->name('index');
                Route::get('/create', [ProductController::class, 'create'])->name('create');
                Route::post('/create', [ProductController::class, 'store'])->name('store');
                Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
                Route::put('/edit/{product}', [ProductController::class, 'update'])->name('update');
                Route::get('/show/{product}', [ProductController::class, 'show'])->name('show');
                Route::delete('/delete/{product}', [ProductController::class, 'destroy'])->name('destroy');
                Route::post('/ckeditor/upload', [CKEditorController::class, 'upload']);
            });
        });
    });
