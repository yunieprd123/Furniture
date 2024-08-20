<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\HomeResponseController;
use App\Http\Controllers\PaymentCallBackController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ReviewController;

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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });





// Route::get('/redirect', [HomeController::class, 'redirect']);
Route::view('/product', 'home.product')->name('home.product');
Route::view('/tentang-kami', 'home.tentang-kami')->name('home.tentang-kami');
Route::view('/furniture-kayu-jati', 'home.furniture-kayu-jati')->name('home.furniture-kayu-jati');
Route::view('/lemari-kayu-jati', 'home.lemari-kayu-jati')->name('home.lemari-kayu-jati');
Route::view('/meja-kayu-jati', 'home.meja-kayu-jati')->name('home.meja-kayu-jati');
Route::view('/custom-design', 'home.custom-design')->name('home.custom-design');
Route::view('/mini-furniture', 'home.mini-furniture')->name('home.mini-furniture');
Route::view('/kontak-kami', 'home.kontak-kami')->name('home.kontak-kami');
Route::get('detail-product/{id}', [HomeController::class, 'detailProduct'])->name('home.detail-product');
Route::get('berikan-ulasan/{id}', [HomeController::class, 'berikanUlasan'])->name('home.berikanUlasan');
Route::post('kirim-ulasan', [HomeController::class, 'tambahkanUlasan'])->name('home.tambahkanUlasan');


// 
Route::post('get-data-transaksi-selesai/{id}',[HomeResponseController::class,'getDataTransaksiSelesai'])->name('home.getDataTransaksi');

// Route::middleware(['auth'])->group(function () {

//     // Route::get('/bayar/{id}', 'home.pembayaran')->name('home.pembayaran');
// });
Route::middleware(['auth'])->group(function () {

    // Dashboard Admin
    Route::prefix('dashboard')->group(function () {
        Route::get('/',[DashboardAdminController::class,'index'] )->name('dashboard');
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


        Route::get('review', [ReviewController::class, 'index'])->name('review.index');
        Route::get('review/show/{id}', [ReviewController::class, 'show'])->name('review.edit');
        // Review/Komentar
        // Route::get('product', [Review::class, 'index'])->name('product.index');
        // Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
        // Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
        // Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        // Route::post('product/update/{id}', [ProductController::class, 'update'])->name('product.update');
        // Route::get('product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    });

    Route::get('/formulir-pembayaran', [TransaksiController::class, 'buatOrder'])->name('home.bayar');
    Route::get('/lengkapi-pembayaran/{transaksi}', [TransaksiController::class, 'lengkapiPembayaran'])->name('home.lengkapiPembayaran');

    Route::get('/add-to-cart/{id}', [HomeController::class, 'addTocart'])->name('home.addToCart');
    Route::get('/keranjang', [CartController::class, 'index'])->name('home.keranjang');
    Route::get('/daftar-transaksi', [HomeController::class, 'daftarTransaksi'])->name('home.daftarTransaksi');

});

Route::post('payments/midtrans-notification', [PaymentCallBackController::class, 'receive']);

route::get('/view_catagory', [AdminController::class, 'view_catagory']);


require __DIR__ . '/auth.php';
