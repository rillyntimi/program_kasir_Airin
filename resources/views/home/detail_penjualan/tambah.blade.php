@extends('layouts.master');
@section('title','detail_Penjualan');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Detail_Penjualan</h3>
                         </div>
                         <div class="card-body">
                            <form action="/detail_penjualan/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">ID penjualan</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="id_penjualan"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">ID_menu</label>
                                    <select class= 'form-control' name="id_menu" id="">
                                        @foreach($id_menu as $id_menu)
                                        <option value="{{$id_menu->id}}">{{$id_menu->nama_produk}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_menu')
                                    <div class="{alert alert-denger mt-2">
                                    </div>
                                    @enderror
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Harga</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="harga"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">qty</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="qty"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Subtotal</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="subtotal"
                                        id=""
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