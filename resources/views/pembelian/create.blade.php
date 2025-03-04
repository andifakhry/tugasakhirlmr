@extends('kerangka.master')


@section('content')

<div class="container">

    <h1>Tambah Pembelian</h1>


    <form method="POST" action="{{ route('pembelian.store') }}">

        @csrf

        <div class="form-group">

            <label for="tanggal_pembelian">Tanggal Pembelian</label>

            <input type="date" name="tanggal_pembelian" class="form-control" required>

        </div>

        <div class="form-group">

            <label for="total_biaya">Total Biaya</label>

            <input type="number" name="total_biaya" class="form-control" required>

        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>

    </form>

</div>

@endsection