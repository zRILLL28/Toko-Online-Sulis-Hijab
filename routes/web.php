<?php

use App\Http\Controllers\{
    AppWishlistController,
    AppCheckOutController,
    AppCartController,
    AppProductController,
    WishlistController,
    CheckOutController,
    CartController,
    DetailController,
    ProductController,
    HomeController,
    MerkController,
    ProfileController,
    UserController
};
use Illuminate\Support\Facades\Route;

// Shop & Home Menu
Route::resource('/shop', AppProductController::class);
Route::get('/', [AppProductController::class, 'home'])->name('home');

Route::group(['controller' => HomeController::class], function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
});

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    // Shop Menu
    Route::resource('/dashboard-product', ProductController::class);
    Route::get('/dashboard-product/delete/{pc}', [ProductController::class, 'destroy'])->name('dashboard-product.destroy');
    // Merk Menu
    Route::resource('/dashboard-merk', MerkController::class);
    Route::get('/dashboard-merk/delete/{merk}', [MerkController::class, 'destroy'])->name('dashboard-merk.destroy');
    // Cart Menu
    Route::resource('/dashboard-cart', CartController::class);
    // Checkout Menu
    Route::resource('/dashboard-checkout', CheckOutController::class);
    // Wishlist Menu
    Route::resource('/dashboard-wishlist', WishlistController::class);
    Route::resource('/dashboard-invoice', DetailController::class);
    // User Menu
    Route::middleware(['can:admin'])->group(function () {
        Route::get('/dashboard-customer', [UserController::class, 'customer'])->name('customer.index');
        Route::get('/dashboard-operator', [UserController::class, 'operator'])->name('operator.index');
    });
});

Route::middleware('auth')->group(function () {

    // Cart Menu
    Route::resource('/cart', AppCartController::class);
    Route::get('/cart/delete/{pc}', [AppCartController::class, 'destroy'])->name('cart.destroy');
    // Checkout Menu
    Route::resource('/checkout', AppCheckOutController::class);
    // Wishlist Menu
    Route::resource('/wishlist', AppWishlistController::class);
    Route::get('/wishlist/delete/{pc}', [AppWishlistController::class, 'destroy'])->name('wishlist.destroy');
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
