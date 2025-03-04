<?php


namespace App\Http\Controllers;


use App\Models\RequestOrder;

use Illuminate\Http\Request;


class DashboardController extends Controller

{

    public function index()

    {

        
        // Ambil semua data request order

        $requestOrders = RequestOrder::all();


        // Kirim data ke view dashboard

        return view('dashboard.dashboard', compact('requestOrders'));

    }

}