@extends('layouts.master');
@section('title','penjualan');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data penjualan</h3>
                            <a class="btn btn-primary" href="/penjualan">Kembali</a>
                         </div>
                         <div class="card-body">
                            <form action="/penjualan/{{$penjualan->id}}/update" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama penjualan</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_penjualan"
                                        id=""
                                        value="{{ $penjualan->nama_penjualan }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Total_harga</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="total_harga"
                                        id=""
                                        value="{{ $penjualan->total_harga }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                </div>
                                <button class="btn btn-primary" type=submit>Update</button>
                            </form>
                           

                         </div>

                    </div>

                </div>

            </div>
        </div>

    </section>
</div>                          
@endsection