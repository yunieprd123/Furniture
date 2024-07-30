<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Product;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $data['product'] = Product::all();
        return view('home.userpage', $data);
    }

    public function detailProduct($id)
    {
        $product = Product::find($id);


        return view('home.detail-product', compact('product'));
    }


    public function addToCart($id)
    {
        $product = Product::find($id);
        $user_id = Auth::user()->id;

        $qty = 1;
        $total_price = $qty * $product->harga_produk;

        $number = rand(1,10000000);
        $transaksi = new Transaksi();

        $transaksi->product_id = $product->id;
        $transaksi->number = '08'.$number;
        $transaksi->user_id = $user_id;
        $transaksi->qty = $qty;
        $transaksi->total_price = $total_price;
        $transaksi->payment_status = 1;
        $transaksi->save();


        return redirect()->route('home.daftar-transaksi');
        // $transaksi = Transaksi::where('user_id',$user_id)->get();
    }

    public function daftarTransaksi()
    {
        $user_id = Auth::user()->id;

        $transaksi = Transaksi::with(['user','product'])->where('user_id', $user_id)->latest()->get();

        return view('home.daftar-transaksi',compact('transaksi'));
    }
}
