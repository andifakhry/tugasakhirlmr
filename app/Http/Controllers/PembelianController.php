<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller

{

    // Menampilkan daftar pembelian

    public function index(Request $request)

    {

        // Mengambil data pembelian dengan pencarian jika ada

        $query = Pembelian::query();


        if ($request->has('search')) {

            $query->where('tanggal_pembelian', 'like', '%' . $request->search . '%');

        }


        $pembelians = $query->paginate(10); // Menampilkan 10 data per halaman


        return view('pembelian.index', compact('pembelians'));

    }


    // Menampilkan form untuk menambah pembelian

    public function create()

    {

        return view('pembelian.create');

    }


    // Menyimpan data pembelian

    public function store(Request $request)

    {

        $request->validate([

            'tanggal_pembelian' => 'required|date',

            'total_biaya' => 'required|numeric|min:0',

        ]);


        Pembelian::create($request->all());


        return redirect()->route('pembelian.index')->with('success', 'Data pembelian berhasil ditambahkan.');

    }


    // Menampilkan form untuk mengedit pembelian

    public function edit($id)

    {

        $pembelian = Pembelian::findOrFail($id);

        return view('pembelian.edit', compact('pembelian'));

    }


    // Memperbarui data pembelian

    public function update(Request $request, $id)

    {

        $request->validate([

            'tanggal_pembelian' => 'required|date',

            'total_biaya' => 'required|numeric|min:0',

        ]);


        $pembelian = Pembelian::findOrFail($id);

        $pembelian->update($request->all());


        return redirect()->route('pembelian.index')->with('success', 'Data pembelian berhasil diperbarui.');

    }


    // Menghapus data pembelian

    public function destroy($id)

    {

        $pembelian = Pembelian::findOrFail($id);

        $pembelian->delete();


        return redirect()->route('pembelian.index')->with('success', 'Data pembelian berhasil dihapus.');

    }


    // Menampilkan peramalan biaya

    public function forecasting()

    {

        // Ambil total biaya pembelian selama 3 bulan terakhir

        $totalBiaya = Pembelian::where('tanggal_pembelian', '>=', now()->subMonths(3))

            ->sum('total_biaya');


        // Hitung rata-rata biaya per bulan

        $jumlahBulan = 3; // Anda bisa mengubah ini jika ingin

        $rataRataBiaya = $totalBiaya / $jumlahBulan;


        // Peramalan biaya untuk bulan depan

        $peramalanBiaya = $rataRataBiaya;


        return view('forecasting.index', compact('peramalanBiaya'));

    }

}