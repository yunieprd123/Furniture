<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{

    protected $serverKey;
    protected $isProduction;
    protected $isSanitized;
    protected $is3ds;


    public function __construct()
    {
        $this->serverKey = config('midtrans.server_key');
        $this->isProduction = config('midtrans.is_production');
        $this->isSanitized = config('midtrans.is_sanitized');
        $this->is3ds = config('midtrans.is_3ds');

        $this->_configureMidtrans();
    }

    public function _configureMidtrans()
    {
        Config::$serverKey = $this->serverKey;
        Config::$isProduction = $this->isProduction;
        Config::$isSanitized = $this->isSanitized;
        Config::$is3ds = $this->is3ds;
    }
    public function index()
    {

        $transaksi = Transaksi::with(['user', 'product'])->get();

        return view('admin.transaksi.transaksi-index', compact('transaksi'));
    }


    public function buatOrder($id)
    {
        $order = Transaksi::with('product')->find($id);

        $snapToken = '';


        $payload = [
            'transaction_details' => [
                'order_id' => $order->order_id,
                'gross_amount' => $order->total_price,
            ],
            'item_details' => [
                [
                    'id' => $order->product->id,
                    'price' => $order->product->harga_produk,
                    'quantity' => $order->qty,
                    'name' => $order->product->nama_produk
                ]

            ],
            'customer_details' => [
                'first_name' => $order->user->name,
                'email' => $order->user->email,
            ]
        ];


        // dd($payload);
        if (empty($order->snap_token)) {
            $order->snap_token = Snap::getSnapToken($payload);
            $order->save();
        }

        $snapToken = $order->snap_token;
        return view('home.bayar', compact('snapToken', 'order'));
    }


    public function bayar($id)
    {
        $order = Transaksi::find($id);
    }

    public function show(Transaksi $transaksi)
    {
        //
    }

    public function edit(Transaksi $transaksi)
    {
        //
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }


    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
