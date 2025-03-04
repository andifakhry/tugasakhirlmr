<?php


namespace App\Http\Controllers;


use App\Models\RequestOrder; // Pastikan model RequestOrder sudah ada

use Illuminate\Http\Request;


class RequestOrderController extends Controller

{

    // Menampilkan daftar request order

    public function index()

    {

        $requestOrders = RequestOrder::all(); // Ambil semua data request order

        return view('requestorder.index', compact('requestOrders'));

    }


    // Menampilkan form untuk menambah request order

    public function create()

    {

        return view('requestorder.create');

    }


    // Menyimpan data request order

    public function store(Request $request)

    {

        $request->validate([

            'field_name' => 'required|string|max:255', // Ganti dengan field yang sesuai

        ]);


        RequestOrder::create($request->all());


        return redirect()->route('requestorder.index')->with('success', 'Request order berhasil ditambahkan.');

    }


    // Menampilkan form untuk mengedit request order

    public function edit($id)

    {

        $requestOrder = RequestOrder::findOrFail($id);

        return view('requestorder.edit', compact('requestOrder'));

    }


    // Memperbarui data request order

    public function update(Request $request, $id)

    {

        $request->validate([

            'field_name' => 'required|string|max:255', // Ganti dengan field yang sesuai

        ]);


        $requestOrder = RequestOrder::findOrFail($id);

        $requestOrder->update($request->all());


        return redirect()->route('requestorder.index')->with('success', 'Request order berhasil diperbarui.');

    }


    // Menghapus data request order

    public function destroy($id)

    {

        $requestOrder = RequestOrder::findOrFail($id);

        $requestOrder->delete();


        return redirect()->route('requestorder.index')->with('success', 'Request order berhasil dihapus.');

    }

}