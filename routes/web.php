<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PartsController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BookingOrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\PartsOrderController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SearchController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'sendContact'])->name('contact.send');

Route::get('/contact', [DealerController::class, 'index'])->name('contact.index');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/category/{id}', [ProductController::class, 'category'])->name('products.category');
    Route::get('/{id}', [ProductController::class, 'show'])->name('products.show');
});

Route::prefix('parts')->group(function () {
    Route::get('/', [PartsController::class, 'index'])->name('parts.index');
    Route::get('/{id}', [PartsController::class, 'show'])->name('parts.show');
});

Route::prefix('brands')->group(function () {
    Route::get('/', [BrandController::class, 'index'])->name('brands.index');
    Route::get('/{id}', [BrandController::class, 'show'])->name('brands.show');
});

Route::prefix('services')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/{id}', [ServiceController::class, 'show'])->name('services.show');
});

Route::get('/guidance', [ServiceController::class, 'guidance'])->name('services.guidance');

Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('news.index');
    Route::get('/category/{id}', [NewsController::class, 'category'])->name('news.category');
    Route::get('/{id}', [NewsController::class, 'show'])->name('news.show');
});

Route::prefix('booking')->group(function () {
    Route::get('/', [BookingOrderController::class, 'index'])->name('booking.index');
    Route::post('/store', [BookingOrderController::class, 'store'])->name('booking.store');
    Route::post('/update/{id}', [BookingOrderController::class, 'updateStatus'])->name('booking.update');
});

Route::post('/parts/order', [PartsOrderController::class, 'store'])->name('parts.order');

Route::get('/dealer', [DealerController::class, 'index'])->name('dealer.index');

Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
Route::post('/notifications/read/{id}', [NotificationController::class, 'markRead'])->name('notifications.read');

Route::get('/search', [SearchController::class, 'index'])->name('search.index');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});