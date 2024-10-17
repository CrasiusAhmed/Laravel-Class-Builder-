<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->middleware('auth');
Route::post('/product/store', [ProductController::class, 'store'])->name('products.store')->middleware('auth');
Route::post('/products/{product}/store-class', [ProductController::class, 'storeClass'])->name('product.storeClass')->middleware(['auth']);
Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');

Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('product.destroy')->middleware('auth');

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');


Route::get('/user/products', [ProductController::class, 'userProducts'])->name('user.products')->middleware('auth');

Route::get('/userEditDelete/products', [ProductController::class, 'edit_deleteUserProducts'])->name('userEditDelete')->middleware('auth');

Route::get('/all-products', [ProductController::class, 'index'])->name('products.index')->middleware('auth');

Route::post('/products/{product}/comments', [CommentController::class, 'store'])->name('comments.store');

require __DIR__.'/auth.php';
