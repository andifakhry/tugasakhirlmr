@extends('kerangka.master')


@section('content')

<div class="container">

    <h1>Edit Pembelian</h1>


    <form method="POST" action="{{ route('pembelian.update', $pembelian->id) }}">

        @csrf

        @method('PUT')

        <div class="form-group">

            <label for="tanggal_pembelian">Tanggal Pembelian</label>

            <input type="date" name="tanggal_pembelian" class="form-control" value="{{ $pembelian->tanggal_pembelian }}" required>

        </div>

        <div class="form-group">

            <label for="total_biaya">Total Biaya</label>

            <input type="number" name="total_biaya" class="form-control" value="{{ $pembelian->total_biaya }}" required>

        </div>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>

</div>

@endsection