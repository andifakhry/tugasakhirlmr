<?php


namespace App\Http\Middleware;


use Closure;

use App\Models\BahanBaku;

use Illuminate\Http\Request;


class CheckStok

{

    /**

     * Handle an incoming request.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \Closure  $next

     * @return mixed

     */

    public function handle(Request $request, Closure $next)

    {

        // Ambil semua bahan baku

        $bahanBakus = BahanBaku::all();


        // Cek apakah ada bahan baku yang stoknya menipis

        foreach ($bahanBakus as $bahanBaku) {

            if ($bahanBaku->stok < 10) { // Misalkan batas minimum adalah 10

                // Set flash message untuk notifikasi

                session()->flash('warning', 'Stok bahan baku ' . $bahanBaku->nama . ' menipis!');

            }

        }


        return $next($request);

    }

}