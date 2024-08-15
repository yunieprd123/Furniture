<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardAdminController extends Controller
{
    public function index()
    {

        $data['penjualanBar'] = Transaksi::all()
            ->groupBy(function ($item) {
                return Carbon::parse($item->created_at)->format('D, d-m-y'); // Masih dalam format timestamp
            })
            ->map(function ($date) {
                return $date->count();
            });

        // dd($data);z

        $data['penjualanLabels'] = $data['penjualanBar']->keys();  // Ambil tanggal
        $data['penjualanData'] = $data['penjualanBar']->values(); // Ambil jumlah transaksi



        return view('admin.dashboard-admin', compact('data'));
    }
}
