{{-- dashboard --}}
@extends('kerangka.master')
@section('title', 'Dashboard ')
@section('content')
                <div class="page-content">
                    <section class="row">
                        <div class="col-12 col-lg-9">
                            <div class="row">
                                
                                <div class="col-12 col-lg-9">

                                    <div class="row">
                        
                                        <div class="col-6 col-lg-3 col-md-6">
                        
                                            <div class="card">
                        
                                                <div class="card-body px-4 py-4-5">
                        
                                                    <h6 class="text-muted font-semibold">Peramalan Biaya Bulan Depan</h6>
                        
                                                    <h6 class="font-extrabold mb-0">
                                

                                                            Rp {{ number_format($peramalanBiaya, 2, ',', '.') }}
                                                      
                        
                                                    </h6>
                        
                                                </div>
                        
                                            </div>
                        
                                        </div>
                                
                                
                            </div>
                            
                            <div class="row">
                                
                                <div class="col-12 col-xl-8">

                                    <div class="card">

                                        <div class="card-header">
                
                                            <h4>List Request Order</h4>
                
                                        </div>
                
                                        <div class="card-body">
                
                                            <div class="table-responsive">
                
                                                <table class="table table-hover table-lg">
                
                                                    <thead>
                
                                                        <tr>
                
                                                            <th>ID</th>
                
                                                            <th>Field Name</th> <!-- Ganti dengan field yang sesuai -->
                
                                                            <th>Tanggal</th> <!-- Ganti dengan field yang sesuai -->
                
                                                        </tr>
                
                                                    </thead>
                
                                                    <tbody>
                
                                                        @foreach($requestOrders as $requestOrder)
                
                                                            <tr>
                
                                                                <td>{{ $requestOrder->id }}</td>
                
                                                                <td>{{ $requestOrder->field_name }}</td> <!-- Ganti dengan field yang sesuai -->
                
                                                                <td>{{ $requestOrder->created_at->format('d-m-Y') }}</td> <!-- Ganti dengan field yang sesuai -->
                
                                                            </tr>
                
                                                        @endforeach
                
                                                    </tbody>
                
                                                </table>
                
                                            </div>
                
                                        </div>
                
                                    </div>
                
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card">
                                <div class="card-body py-4 px-4">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl">
                                            <img src="{{ asset('dist/assets/compiled/jpg/1.jpg') }}" alt="Face 1"/>
                                        </div>
                                        <div class="ms-3 name">
                                            <h5 class="font-bold">Andi Nur Muhammad Fakhry</h5>
                                            <h6 class="text-muted mb-0">
                                                @a.fakhryyy
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Recent Transaction</h4>
                                </div>
                                <div class="card-content pb-4">
                                    <div
                                        class="recent-message d-flex px-4 py-3"
                                    >
                                        <div class="avatar avatar-lg">
                                            <img src="{{ asset('dist/assets/compiled/jpg/4.jpg') }}"/>
                                        </div>
                                        <div class="name ms-4">
                                            <h5 class="mb-1">Hidayat</h5>
                                            <h6 class="text-muted mb-0">@hidayat12</h6>
                                        </div>
                                    
                                    
                                       
                                    </div>
                                    <div class="px-4">
                                        <a href="{{ route('transactions.index') }}" class="btn btn-block btn-xl btn-outline-primary font-bold mt-3">

                                            See Transaction
                                    
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </section>
                </div>
               
              
    
            
            @endsection