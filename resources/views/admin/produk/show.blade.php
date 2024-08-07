@extends('layouts.admin')
@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Produk
                        <a href="{{ route('produk.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Nama Produk:</label>
                            <b>{{ $produk->nama_produk }}</b>
                        </div>
                        <div class="mb-2">
                            <img src="{{ asset('images/produk/' . $produk->gambar) }}" alt="" style="width: 200px;">
                        </div>
                        <div class="mb-2">
                            <label for="">Harga:</label>
                            <b>{{ $produk->harga }}</b>
                        </div>
                        <div class="mb-2">
                            <label for="">Stok:</label>
                            <b>{{ $produk->stok }}</b>
                        </div>
                        <div class="mb-2">
                            <label for="">Deskripsi:</label>
                            <b>{{ $produk->deskripsi }}</b>
                        </div>
                        <div class="mb-2">
                            <label for="">Kategori:</label>
                            <p>{{ $produk->kategori->nama_kategori }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection