<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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

        $cart = new Cart();


        if($cart->where('user_id', $user_id)->where('product_id', $product->id)->exists()){

            $cart->where('user_id', $user_id)->where('product_id', $product->id)->increment('qty', $qty);
            // $cart->qty->save();
        } else {

            $cart->product_id = $product->id;
            $cart->user_id = $user_id;
            $cart->qty = $qty;
            $cart->status = 'Dalam Keranjang';
            $cart->save();
        }

        return redirect()->route('home.keranjang');
        // $transaksi = Transaksi::where('user_id',$user_id)->get();
    }


    public function checkout()
    {

        $cart = Cart::where('user_id', Auth::user()->id)->get();
        $user_id = Auth::user()->id;
        $transaksi = new Transaksi();

    }
    public function daftarTransaksi()
    {
        $user_id = Auth::user()->id;

        $transaksi = Transaksi::with(['user', 'transaksiProduct.product'])->where('user_id', $user_id)->latest()->get();
        $transaksiSelesai = Transaksi::with(['user', 'transaksiProduct.product'])->where('payment_status', '!=', '1')->where('user_id', $user_id)->latest()->get();


        // dd($transaksi);
        return view('home.daftar-transaksi', compact('transaksi'));
    }


    public function reviews()
    {
        
    }
}
