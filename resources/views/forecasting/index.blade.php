@extends('kerangka.master')


@section('content')

<div class="container">

    <h1>Peramalan Biaya Pembelian</h1>


    <p class="text-center">Total biaya yang harus disiapkan untuk bulan depan: Rp {{ number_format($peramalanBiaya, 2, ',', '.') }}</p>


    <a href="{{ route('pembelian.index') }}" class="btn btn-secondary">Kembali ke Daftar Pembelian</a>

</div>

@endsection