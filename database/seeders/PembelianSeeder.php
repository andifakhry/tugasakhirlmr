<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;

use App\Models\Pembelian;


class PembelianSeeder extends Seeder

{

    public function run()

    {

        Pembelian::create(['tanggal_pembelian' => now()->subMonths(1), 'total_biaya' => 100000]);

        Pembelian::create(['tanggal_pembelian' => now()->subMonths(2), 'total_biaya' => 150000]);

        Pembelian::create(['tanggal_pembelian' => now()->subMonths(3), 'total_biaya' => 200000]);

    }

}