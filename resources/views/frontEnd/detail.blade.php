@extends('frontend.template')
@section('content_front')
<div class="hero-wrap hero-bread" style="background-image: url('{{asset('frontAsset/images/bg_1.jpg')}}');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
                <h1 class="mb-0 bread">Product Single</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="{{asset('/images/produk/' . $produk->gambar)}}" class="image-popup"><img src="{{asset('/images/produk/' . $produk->gambar)}}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>{{$produk->nama_produk}}</h3>
                <p class="price"><span>Rp. {{number_format($produk->harga)}}</span></p>
                <p>
                    {{$produk->deskripsi}}
                </p>
                <form action="{{ route('cart.store')}}" class="JSV" method="POST" id="myForm-{{$produk->id}}">
                    @csrf
                    <div class="row mt-4">
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
                            <input type="hidden" name="id_produk" value="{{$produk->id}}">
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                        </div>
                        <div class="w-100"></div>
                    </div>
                    <p><a href="javascript:void(0);" data-form-id="myForm-{{ $produk->id }}" class="JSV btn btn-black py-3 px-5">Add to Cart</a></p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection