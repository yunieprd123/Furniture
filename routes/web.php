<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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


Route::view('dashboard/admin-dashboard','admin.layout');
Route::get('dashboard/product',[ProductController::class,'index'])->name('product.index');
Route::get('dashboard/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('dashboard/product/store',[ProductController::class,'store'])->name('product.store');
Route::get('dashboard/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('dashboard/product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::get('dashboard/product/destroy/{id}',[ProductController::class,'destroy'])->name('product.destroy');


// Route::get('/redirect', [HomeController::class, 'redirect']);
Route::get('/daftar-transaksi',[HomeController::class,'daftarTransaksi'])->name('home.daftar-transaksi');
Route::view('/product','home.product')->name('home.product');
Route::view('/formulir-pembayaran','home.bayar')->name('home.formulir');
Route::view('/bayar','home.pembayaran')->name('home.pembayaran');
Route::get('/add-to-cart/{id}',[HomeController::class,'addTocart'])->name('home.addToCart');

// Route::get('/daftar-transaksi', [HomeController::class, 'daftarTransaksi']);
// Route::get('/product', function(){
//     return view('home.product');
// })->name('home.product');
// Route::get('/add-to-cart', [HomeController::class, 'addToCart']);
// Route::get('/formulir-pembayaran', [HomeController::class, 'formPembayaran']);
// Route::get('/pembayaran', [HomeController::class, 'pembayaran']);
// Route::get('/pembayaran', [HomeController::class, 'pembayaran']);


// route::get('/redirect', [HomeController::class, 'redirect']);

route::get('/view_catagory', [AdminController::class, 'view_catagory']);