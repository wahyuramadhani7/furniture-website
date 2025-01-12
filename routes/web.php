<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

// Route untuk halaman Home
Route::get('/', function () {
    return view('home'); // Pastikan view 'home.blade.php' ada di folder 'resources/views'
})->name('home');

// Route untuk halaman Dashboard (dengan middleware auth dan verified)
Route::get('/dashboard', function () {
    return view('dashboard'); // Pastikan view 'dashboard.blade.php' ada
})->middleware(['auth', 'verified'])->name('dashboard');

// Group route dengan middleware 'auth'
Route::middleware('auth')->group(function () {
    // Route untuk Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk halaman Products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Route untuk halaman Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Include routes untuk autentikasi (login, register, dll)
require __DIR__ . '/auth.php';
