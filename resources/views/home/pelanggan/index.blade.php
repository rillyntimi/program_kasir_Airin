@extends('layouts.master')
@section('title'.'pelanggan')
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
                    <h3>Halaman Data pelanggan</h3>
                    <a class="btn btn-primary" href="/pelanggan/tambah">Tambah</a>
                </div>
                        <div class="card-body">
                         <div
                                class="table-responsive" >
                                <table
                                class="table table-bordered table-striped" id="datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama_pelanggan</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No_tlp</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pelanggan as $pelanggan )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                           
                                            <td>{{$pelanggan->nama_pelanggan}}</td>
                                            <td>{{$pelanggan->alamat}}</td>
                                            <td>{{$pelanggan->no_tlp}}</td>
                                            <td><a class="btn btn-warning" href="/pelanggan/{{ $pelanggan->id}}/show">Edit</a>
                                                <a class="btn btn-danger" href="/pelanggan/{{ $pelanggan->id}}/delete"
                                                    onclick="return confirm('Yakin mau di hapus ?')">Delete</a>
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
