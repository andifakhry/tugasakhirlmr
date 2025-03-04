@extends('kerangka.master')

@section('title', 'Daftar Pembelian')

@section('content')

    <section class="section">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">

                        <h4 class="card-title">Daftar Pembelian</h4>

                        <div class="ms-auto">

                            <a class="btn btn-primary" href="{{ route('pembelian.create') }}">Tambah Pembelian</a>

                        </div>

                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-striped">

                                <thead>

                                    <tr>

                                        <th>NO</th>

                                        <th>Tanggal Pembelian</th>

                                        <th>Total Biaya</th>

                                        <th>AKSI</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($pembelians as $pembelian)

                                        <tr>

                                            <td>{{ $loop->iteration }}</td>

                                            <td>{{ $pembelian->tanggal_pembelian }}</td>

                                            <td>Rp {{ number_format($pembelian->total_biaya, 2, ',', '.') }}</td>

                                            <td>

                                                <form action="{{ route('pembelian.destroy', $pembelian->id) }}" method="POST">

                                                    @csrf

                                                    @method('delete')

                                                    <button class="btn btn-danger">Hapus</button>

                                                </form>

                                            </td>

                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection