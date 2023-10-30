<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;
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



Route::get('about', function () {
    return View('about');
})->name('about');

// Route::get('contact', function () {
//     return view('contact');
// });

Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');



Route::get('/', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';



Route::resource('/', CategoryController::class);



// Route::get('/searchCategories', [ProductsController::class, 'searchCategories'])->name('searchCategories');

// Route::get('/searchByPrice', [CategoryController::class, 'searchByPrice'])->name('searchByPrice');



Route::resource('product', ProductsController::class);
Route::get('/categories', [ProductsController::class, 'category_name'])->name('categories');
Route::get('/categories/{id}', [ProductsController::class, 'yousef'])->name('yousef');



Route::get('/categories', [ProductsController::class, 'filterProducts'])->name('filterProducts');
// Route::get('/categories', [ProductsController::class, 'searchByName'])->name('searchByName');
// Route::get('/categoriess', [ProductsController::class, 'cat'])->name('cat');
Route::get('/cart/{id}', [ProductsController::class, 'cart'])->name('cart');
Route::get('/cartdecrease/{id}', [ProductsController::class, 'cartdecrease'])->name('decreace');
Route::delete('/remove-from-cart', [ProductsController::class, 'remove'])->name('remove_from_cart');




Route::resource('order', OrdersController::class);
Route::resource('cart', CartsController::class);





Route::resource('user', UserController::class);
Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout.show');
Route::get('/success', function () {
    return view('success');
})->name('success');



Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');



// admin_dasebord route

Route::prefix('/')->middleware(['auth', 'admin'])->group(function () {


    // Admin
    Route::get('/admin_admin', [AdminController::class, 'index'])->name('admin_admin');

    Route::get('/admin_user/{admin_user}/edit', [AdminController::class, 'edit'])->name('admin_user.edit');



    // User
    Route::get('/admin_user', [UserController::class, 'index'])->name('admin_user.index');
    Route::put('/admin_user/{admin_user}', [UserController::class, 'update'])->name('admin_user.update');
    Route::get('/admin_user/{admin_user}/edit', [UserController::class, 'edit'])->name('admin_user.edit');
    Route::delete('/admin_user/{admin_user}', [UserController::class, 'destroy'])->name('admin_user.destroy');



    // Orders
    Route::get('/admin_orders', [OrdersController::class, 'index'])->name('admin_orders.index');
    Route::get('/admin_orders/create', [OrdersController::class, 'create'])->name('admin_orders.create');
    Route::post('/admin_orders', [OrdersController::class, 'store'])->name('admin_orders.store');
    Route::get('/admin_orders/{admin_order}/edit', [OrdersController::class, 'edit'])->name('admin_orders.edit');
    Route::put('/admin_orders/{admin_order}', [OrdersController::class, 'update'])->name('admin_orders.update');
    Route::delete('/admin_orders/{admin_order}', [OrdersController::class, 'destroy'])->name('admin_orders.destroy');

    // Categories
    Route::get('/admin_categorys', [CategoryController::class, 'show'])->name('admin_categorys.show');
    Route::get('/admin_categorys/create', [CategoryController::class, 'create'])->name('admin_categorys.create');
    Route::post('/admin_categorys', [CategoryController::class, 'store'])->name('admin_categorys.store');
    Route::get('/admin_categorys/{admin_category}/edit', [CategoryController::class, 'edit'])->name('admin_categorys.edit');
    Route::put('/admin_categorys/{admin_category}', [CategoryController::class, 'update'])->name('admin_categorys.update');
    Route::delete('/admin_categorys/{admin_category}', [CategoryController::class, 'destroy'])->name('admin_categorys.destroy');

    // Products
    // Route::get('/admin_products', [ProductsController::class, 'shows'])->name('admin_products.shows');
    Route::get('/admin_products/create', [ProductsController::class, 'create'])->name('admin_products.create');
    Route::post('/admin_products', [ProductsController::class, 'store'])->name('admin_products.store');
    Route::get('/admin_products/{products}/edit', [ProductsController::class, 'edit'])->name('admin_products.edit');
    Route::put('/admin_products/{products}', [ProductsController::class, 'update'])->name('admin_products.update');
    Route::delete('/admin_products/{products}', [ProductsController::class, 'destroy'])->name('admin_products.destroy');
    Route::get('/admin_products', [ProductsController::class, 'shows'])->name('admin_products');

});











