<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('categories', [CategoryController::class, 'index'])->name('categories');
Route::get('categories/{category}', [ProductController::class, 'index'])->name('category.products');

Route::get('products/{product}', [ProductController::class, 'show'])->name('product-details');


// Route::get('/contat', [HomeController::class,'contactAdd']);
Route::post('/contact/store', [HomeController::class,'contactStore'])->name('contact.store');

Route::get('/payment/{product}', [PaymentController::class, 'createPaymentIntent'])->name('payment');
Route::post('/payment/process', [PaymentController::class, 'processPayment'])->name('payment.process');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
