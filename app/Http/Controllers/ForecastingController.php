<?php


namespace App\Http\Controllers;


use App\Models\Pembelian;

use App\Models\Suplier;

use Illuminate\Http\Request;


class ForecastingController extends Controller

{

    public function index()

    {

        // Ambil total biaya pembelian per bulan selama 3 bulan terakhir

        $biayaPerBulan = Pembelian::selectRaw("SUM(total_biaya) as total_biaya, strftime(tanggal_pembelian, '%Y-%m') as bulan")

            ->where('tanggal_pembelian', '>=', now()->subMonths(3))

            ->groupBy('bulan')

            ->orderBy('bulan')

            ->get();


        // Hitung rata-rata biaya per bulan

        $totalBiaya = 0;

        $jumlahBulan = $biayaPerBulan->count(); // Hitung jumlah bulan yang ada


        foreach ($biayaPerBulan as $biaya) {

            $totalBiaya += $biaya->total_biaya; // Jumlahkan total biaya per bulan

        }


        // Hitung Simple Moving Average (SMA)

        $rataRataBiaya = $jumlahBulan > 0 ? $totalBiaya / $jumlahBulan : 0;


        // Peramalan biaya untuk bulan depan

        $peramalanBiaya = $rataRataBiaya;


        // Ambil data suplier untuk ditampilkan di view

        $supliers = Suplier::all(); // Pastikan model Suplier sudah ada


        return view('forecasting.index', compact('peramalanBiaya', 'supliers'));

    }

}