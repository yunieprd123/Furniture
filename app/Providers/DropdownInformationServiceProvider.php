<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Transaksi;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class DropdownInformationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        View::composer('*', function ($view) {
            $view->with([
                'cart_count' => Cart::whereStatus('Dalam Keranjang')->count(),
                'transaksi_count'=> Transaksi::wherePaymentStatus('1')->count()
            ]);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
