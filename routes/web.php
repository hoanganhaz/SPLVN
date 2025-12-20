<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\ContactController;

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

Route::get("/", [HomeController::class, 'index'])->name('client.home');
Route::get("/about", [HomeController::class, 'about'])->name('client.about');

// Route::get("/contact", [HomeController::class, 'contact'])->name('');
Route::get('/contact', [ContactController::class, 'index'])->name('client.contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get("/product", [HomeController::class, 'product'])->name('client.product');
Route::get("/product_detail", [HomeController::class, 'productDetail'])->name('client.productDetail');

Route::get("/post", [HomeController::class, 'post'])->name('client.post');
Route::get("/post_detail", [HomeController::class, 'postDetail'])->name('client.postDetail');
// Load additional route files
require __DIR__ . '/admin.php';

