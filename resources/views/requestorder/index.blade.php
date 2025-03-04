@extends('kerangka.master')


@section('content')

<div class="container">

    <h1>Daftar Request Order</h1>

    <a href="{{ route('requestorder.create') }}" class="btn btn-primary">Tambah Request Order</a>


    @if(session('success'))

        <div class="alert alert-success">{{ session('success') }}</div>

    @endif


    <table class="table">

        <thead>

            <tr>

                <th>ID</th>

                <th>Field Name</th> <!-- Ganti dengan field yang sesuai -->

                <th>Aksi</th>

            </tr>

        </thead>

        <tbody>

            @foreach($requestOrders as $requestOrder)

                <tr>

                    <td>{{ $requestOrder->id }}</td>

                    <td>{{ $requestOrder->field_name }}</td> <!-- Ganti dengan field yang sesuai -->

                    <td>

                        <a href="{{ route('requestorder.edit', $requestOrder->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('requestorder.destroy', $requestOrder->id) }}" method="POST" style="display:inline;">

                            @csrf

                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Hapus</button>

                        </form>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection