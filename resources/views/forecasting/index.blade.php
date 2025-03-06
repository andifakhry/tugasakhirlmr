@extends('kerangka.master')

@section('content')

<div class="container mt-5">

    <h1 class="text-center mb-4">Peramalan Biaya Pembelian</h1>

    <div class="alert alert-info text-center">
        <strong>Total biaya yang harus disiapkan untuk bulan depan:</strong> 
        <span>Rp {{ number_format($peramalanBiaya, 2, ',', '.') }}</span>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('pembelian.index') }}" class="btn btn-secondary">Kembali ke Daftar Pembelian</a>
    </div>

</div>

@endsection

