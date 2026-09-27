<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminReviewController;
use App\Http\Controllers\AdminCouponController;
use App\Http\Controllers\AdminCategoryController;

use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ReviewController;


/*
|--------------------------------------------------------------------------
| Store / Customer Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/shop', [ShopController::class, 'index'])
    ->name('shop.index');

Route::get('/shop/{slug}', [ProductController::class, 'show'])
    ->name('product.show');


/*
|--------------------------------------------------------------------------
| Cart
|--------------------------------------------------------------------------
*/

Route::get('/cart', [CartController::class, 'index'])
    ->name('cart.index');

Route::post('/cart/add', [CartController::class, 'add'])
    ->name('cart.add');

Route::patch('/cart/{id}', [CartController::class, 'update'])
    ->name('cart.update');

Route::delete('/cart/{id}', [CartController::class, 'remove'])
    ->name('cart.remove');


/*
|--------------------------------------------------------------------------
| Checkout
|--------------------------------------------------------------------------
*/

Route::get('/checkout', [CheckoutController::class, 'index'])
    ->name('checkout.index');

Route::post('/checkout/apply-coupon', [CheckoutController::class, 'applyCoupon'])
    ->name('checkout.applyCoupon');

Route::delete('/checkout/remove-coupon', [CheckoutController::class, 'removeCoupon'])
    ->name('checkout.removeCoupon');

Route::post('/checkout/place-order', [CheckoutController::class, 'placeOrder'])
    ->name('checkout.placeOrder');

Route::get('/order-success/{order}', [CheckoutController::class, 'success'])
    ->name('checkout.success');


/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.store');

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.store');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');


/*
|--------------------------------------------------------------------------
| Customer Orders
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/orders', [OrderController::class, 'index'])
        ->name('orders.index');

    Route::get('/orders/{id}', [OrderController::class, 'show'])
        ->name('orders.show');

});


/*
|--------------------------------------------------------------------------
| Wishlist
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/wishlist', [WishlistController::class, 'index'])
        ->name('wishlist.index');

    Route::post('/wishlist/{product}/toggle', [WishlistController::class, 'toggle'])
        ->name('wishlist.toggle');

    Route::delete('/wishlist/{wishlist}', [WishlistController::class, 'remove'])
        ->name('wishlist.remove');

});


/*
|--------------------------------------------------------------------------
| Product Reviews - Customer
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::post('/products/{product}/reviews', [ReviewController::class, 'store'])
        ->name('reviews.store');

    Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])
        ->name('reviews.destroy');

});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | Dashboard
        |--------------------------------------------------------------------------
        */

        Route::get('/dashboard', [AdminController::class, 'dashboard'])
            ->name('dashboard');


        /*
        |--------------------------------------------------------------------------
        | Reports
        |--------------------------------------------------------------------------
        */

        Route::get('/reports', [AdminController::class, 'reports'])
            ->name('reports');


        /*
        |--------------------------------------------------------------------------
        | Categories
        |--------------------------------------------------------------------------
        */

        Route::resource('categories', AdminCategoryController::class);


        /*
        |--------------------------------------------------------------------------
        | Products
        |--------------------------------------------------------------------------
        */

        Route::resource('products', AdminProductController::class);


        /*
        |--------------------------------------------------------------------------
        | Orders
        |--------------------------------------------------------------------------
        */

        Route::get('/orders', [AdminOrderController::class, 'index'])
            ->name('orders.index');

        Route::get('/orders/{order}', [AdminOrderController::class, 'show'])
            ->name('orders.show');

        Route::patch('/orders/{order}/status', [AdminOrderController::class, 'updateStatus'])
            ->name('orders.updateStatus');


        /*
        |--------------------------------------------------------------------------
        | Customers
        |--------------------------------------------------------------------------
        */

        Route::get('/customers', [AdminCustomerController::class, 'index'])
            ->name('customers.index');

        Route::get('/customers/{customer}', [AdminCustomerController::class, 'show'])
            ->name('customers.show');


        /*
        |--------------------------------------------------------------------------
        | Reviews
        |--------------------------------------------------------------------------
        */

        Route::get('/reviews', [AdminReviewController::class, 'index'])
            ->name('reviews.index');

        Route::patch('/reviews/{review}/toggle-approval', [AdminReviewController::class, 'toggleApproval'])
            ->name('reviews.toggleApproval');

        Route::delete('/reviews/{review}', [AdminReviewController::class, 'destroy'])
            ->name('reviews.destroy');


        /*
        |--------------------------------------------------------------------------
        | Coupons
        |--------------------------------------------------------------------------
        */

        Route::resource('coupons', AdminCouponController::class);

    });