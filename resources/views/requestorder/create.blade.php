@extends('kerangka.master')


@section('content')

<div class="container">

    <h1>Tambah Request Order</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <form action="{{ route('requestorder.store') }}" method="POST">

        @csrf

        <div class="form-group">

            <label for="field_name">Field Name</label>

            <input type="text" class="form-control" id="field_name" name="field_name" required>

        </div>


        <!-- Tambahkan input field lainnya sesuai kebutuhan -->

        

        <button type="submit" class="btn btn-primary">Kirim</button>

        <a href="{{ route('requestorder.index') }}" class="btn btn-secondary">Kembali</a>

    </form>

</div>

@endsection