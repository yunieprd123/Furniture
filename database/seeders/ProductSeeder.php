<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'nama_produk' => 'Meja Belajar Kayu',
                'deskripsi' => 'Meja belajar terbuat dari kayu jati berkualitas tinggi.',
                'harga_produk' => 1500000,
                'stok' => 10,
                'gambar_produk' => 'meja_belajar.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Kursi Santai',
                'deskripsi' => 'Kursi santai dengan bantalan empuk, cocok untuk ruang tamu.',
                'harga_produk' => 850000,
                'stok' => 15,
                'gambar_produk' => 'kursi_santai.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Rak Buku Minimalis',
                'deskripsi' => 'Rak buku dengan desain minimalis, terbuat dari bahan berkualitas.',
                'harga_produk' => 450000,
                'stok' => 20,
                'gambar_produk' => 'rak_buku.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
