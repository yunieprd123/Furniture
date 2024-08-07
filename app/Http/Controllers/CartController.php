<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;

        $transaksi = Cart::with(['user', 'product'])->where('user_id', $user_id)->latest()->get();

        return view('home.keranjang', compact('transaksi'));
    }
}
