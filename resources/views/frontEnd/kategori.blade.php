@extends('frontend.template')
@section('content_front')
<div class="hero-wrap hero-bread" style="background-image: url({{asset('images/background.jpg')}});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Products</span></p>
                <h1 class="mb-0 bread">Products</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5 text-center">
                <ul class="product-category">
                    <li><a href="{{ url('/shop')}}" class="">All</a></li>
                    @foreach($kategori as $kat)
                    <li><a href="{{ route('shop.kategori', $kat->id) }}" class="{{ request()->segment(3) == $kat->id ? 'active' : '' }}">{{ $kat->nama_kategori }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            @foreach($produk as $item)
                @include('layouts.frontend.produk')
            @endforeach
        </div>
    </div>
</section>
@endsection