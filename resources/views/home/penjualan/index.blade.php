@extends('layouts.master')
@section('title'.'penjualan')
@section('content')

<div class="content-wrapper">
    <div class="section content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @if(session('succses'))
                                <div class="alert alert-info">
                                    {{ session('succses')}}
                         </div>
                    @endif
                    <h3>Halaman Data penjualan</h3>
                    <a class="btn btn-primary" href="/penjualan/tambah">Tambah</a>
                </div>
                        <div class="card-body">
                         <div
                                class="table-responsive" >
                                <table
                                class="table table-bordered table-striped" id="datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Tanggal_penjualan</th>
                                            <th scope="col">Total_harga</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($penjualan as $penjualan )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                          
                                            <td>{{$penjualan->created_at}}</td>
                                            <td>{{$penjualan->total_harga}}</td>
                                            <td><a class="btn btn-warning" href="/detail_penjualan/">Lengkapi Transaksi</a>
                                            <td><a class="btn btn-warning" href="/penjualan/{{ $penjualan->id }}/struk">struk</a>
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
        </div>
    </div>
</div>

@endsection
