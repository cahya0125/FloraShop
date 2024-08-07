<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;


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

// Route::get('/admin', function () {
//     return view('layouts.test');
// });


Auth::routes();

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front');

// 
// Route::group(['prefix' => 'admin', 'middleware'=> 'auth'], function(){
//     Route::get('/', function () { 
//         return view('admin.index');
//     });
//     // 
// });

// 


Route::get('tes', function () {
    return view('frontEnd.detail');
});


Route::get('/',[FrontController::class, 'index'])->name('frontEnd.index');
Route::get('contact',[FrontController::class, 'contact']);
Route::get('shop',[FrontController::class, 'shop']);
Route::get('/shop/kategori/{id}', [FrontController::class, 'kategori'])->name('shop.kategori');
Route::get('/kontak',[FrontController::class, 'kontak'])->name('kontak');
Route::get('wishlist',[FrontController::class, 'wishlist']);
Route::get('about',[FrontController::class, 'about']);

Route::get('cart',[CartController::class, 'index'])->name('cart.index');
Route::post('cart/', [CartController::class, 'store'])->name('cart.store');
Route::post('cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::post('cart/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::get('/shop/detail/{id}',[FrontController::class, 'detail'])->name('shop.detail');


Route::get('checkout',[CheckOutController::class, 'index'])->name('checkout.index');
Route::post('checkout/order',[CheckOutController::class, 'order'])->name('checkout.order');

// tugas 25 juni 2024
// Route Admin(Backend)
Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    // untuk Route Backend Lainnya
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::resource('kategori', App\Http\Controllers\KategoriController::class);
    Route::resource('produk', App\Http\Controllers\ProdukController::class);
    Route::resource('Order', App\Http\Controllers\OrderController::class);
    Route::resource('Transaksi', App\Http\Controllers\TransaksiController::class);
});


Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('home', [\App\Http\Controllers\HomeController::class, 'index']);
    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
    // Menampilkan keranjang belanja
    Route::get('/carts', [CartController::class, 'index'])->name('carts.index');

    // Menambah produk ke keranjang belanja
    Route::post('/carts', [CartController::class, 'store'])->name('carts.store');

    // Menghapus produk dari keranjang belanja
    Route::delete('/carts/{id}', [CartController::class, 'destroy'])->name('carts.destroy');

    // Mengupdate kuantitas produk dalam keranjang belanja
    Route::put('/carts/{id}', [CartController::class, 'update'])->name('carts.update');
    Route::post('/cart/update-quantity', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
    Route::post('/cart/remove-item', [CartController::class, 'removeItem'])->name('cart.removeItem');

});


// Route::middleware('auth')->group(function () {
//     Route::get('/checkout', [OrderController::class, 'index'])->name('checkout.index');
//     Route::post('/checkout', [OrderController::class, 'process'])->name('checkout.process');
// });


// PROJECT
// Route::resource('kategori', App\Http\Controllers\KategoriController::class);