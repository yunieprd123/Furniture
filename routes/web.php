<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!z
|
*/

route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




// Route::get('/redirect', [HomeController::class, 'redirect']);
Route::view('/product', 'home.product')->name('home.product');
Route::middleware(['auth'])->group(function () {

    Route::get('/formulir-pembayaran/{id}', [TransaksiController::class, 'buatOrder'])->name('home.bayar');
    // Route::get('/bayar/{id}', 'home.pembayaran')->name('home.pembayaran');
});
Route::middleware(['auth'])->group(function () {

    // Dashboard Admin
    Route::prefix('dashboard')->group(function () {
        Route::view('admin-dashboard', 'admin.layout');

        // Produk
        Route::get('product', [ProductController::class, 'index'])->name('product.index');
        Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('product/update/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::get('product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');


        // Transaksi
        Route::get('transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
        Route::get('tansaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
        Route::post('transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');
        Route::get('transaksi/edit/{id}', [TransaksiController::class, 'edit'])->name('transaksi.edit');
    });

    Route::get('/add-to-cart/{id}', [HomeController::class, 'addTocart'])->name('home.addToCart');
    Route::get('/daftar-transaksi', [HomeController::class, 'daftarTransaksi'])->name('home.daftar-transaksi');
});


route::get('/view_catagory', [AdminController::class, 'view_catagory']);
