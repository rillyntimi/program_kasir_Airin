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
                            <h3>Halaman Tambah Data penjualan</h3>
                            <a class="btn btn-primary" href="/penjualan">Kembali</a>
                         </div>
                         <div class="card-body">
                            <form action="/penjualan/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama penjualan</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_penjualan"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Total_harga</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="total_harga"
                                        id=""
                                         value="{{ old('total_harga')}}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                <button class="btn btn-primary" type=submit>Simpan</button>
                            </form>
                           

                         </div>

                    </div>

                </div>

            </div>
        </div>

    </section>
</div>
@endsection