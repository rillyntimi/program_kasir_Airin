@extends('layouts.master');
@section('title','Detail_Penjualan');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data Detail_Penjualan</h3>
                            <a class="btn btn-primary" href="/DetailPenjualan">Kembali</a>
                         </div>
                         <div class="card-body">
                            <form action="/Detail_Penjualan/{{$Detail_Penjualan->id}}/update" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">ID detail_penjualan</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="ID_Detail_Penjualan"
                                        id=""
                                        value="{{ $Detail_Penjualan->nama_Detail_Penjualan }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Harga</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="Harga"
                                        id=""
                                        value="{{ $Detail_Penjualan->Harga }}"
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