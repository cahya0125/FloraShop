@extends('layouts.admin')
@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Data Kategori
                        <a href="{{ route('kategori.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Nama Kategori</label>
                            <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori"
                            value="{{$kategori->nama_kategori}}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="">Deskripsi</label>
                            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"
                            value="{{$kategori->deskripsi}}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
