<?php

use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\admin\PostController;
use Illuminate\Support\Facades\Route;


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


Route::prefix('admin')
 ->name('admin.') 
    ->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
         Route::prefix('posts')->name('posts.')->group(function () {
            // Hiển thị danh sách bài viết
            Route::get('/', [PostController::class, 'index'])->name('index');
            
            // Hiển thị form tạo bài viết mới
            Route::get('/create', [PostController::class, 'create'])->name('create');
            
            // Lưu bài viết mới vào database
            Route::post('/', [PostController::class, 'store'])->name('store');
            
           
            Route::get('/{post}/show', [PostController::class, 'show'])->name('show');
            
           
            Route::get('/{post}/edit', [PostController::class, 'edit'])->name('edit');
            
            
            Route::put('/{post}', [PostController::class, 'update'])->name('update');
            
           
            Route::delete('/{post}', [PostController::class, 'destroy'])->name('destroy');





        });
         Route::prefix('contracts')->name('contracts.')->group(function () {
            Route::get('/', [ContactController::class, 'index'])->name('index');
            Route::get('/{contract}', [ContactController::class, 'show'])->name('show');
            Route::delete('/{contract}', [ContactController::class, 'destroy'])->name('destroy');
            Route::post('/{contract}/status', [ContactController::class, 'updateStatus'])->name('updateStatus');
        });
        
    });

         

   

 
