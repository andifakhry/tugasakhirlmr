<?php


namespace App\Http\Controllers;


use App\Models\RequestOrder;

use App\Models\Pembelian; // Pastikan model Pembelian di-import

use Illuminate\Http\Request;


class DashboardController extends Controller

{

    public function index()

    {

        // Ambil semua data request order

        $requestOrders = RequestOrder::all();


        // Ambil total biaya pembelian selama 3 bulan terakhir

        $totalBiaya = Pembelian::where('tanggal_pembelian', '>=', now()->subMonths(3))

            ->sum('total_biaya');


        // Hitung rata-rata biaya per bulan

        $jumlahBulan = 3; // Anda bisa mengubah ini jika ingin

        $rataRataBiaya = $totalBiaya / $jumlahBulan;


        // Peramalan biaya untuk bulan depan

        $peramalanBiaya = $rataRataBiaya;


        // Ambil total biaya pembelian per bulan untuk 3 bulan terakhir

        $totalBiayaPerBulan = Pembelian::selectRaw('SUM(total_biaya) as total_biaya, DATE_FORMAT(tanggal_pembelian, "%Y-%m") as bulan')

            ->where('tanggal_pembelian', '>=', now()->subMonths(3))

            ->groupBy('bulan')

            ->orderBy('bulan')

            ->get();


        // Format data untuk grafik

        $bulan = [];

        $totalBiayaGrafik = [];

        foreach ($totalBiayaPerBulan as $data) {

            $bulan[] = $data->bulan; // Ambil bulan

            $totalBiayaGrafik[] = $data->total_biaya; // Ambil total biaya

        }


        // Kirim data ke view dashboard

        return view('dashboard.dashboard', compact('requestOrders', 'bulan', 'totalBiayaGrafik', 'peramalanBiaya'));

    }

}