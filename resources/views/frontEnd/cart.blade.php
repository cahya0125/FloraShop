@extends('frontend.template')
@section('content_front')
<div class="hero-wrap hero-bread" style="background-image: url({{asset('images/background.jpg')}});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
                <h1 class="mb-0 bread">My Cart</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($cartItems->isEmpty())
                                <tr>
                                    <td colspan="6" class="justify-content-center align-items-center text-center"> <b>cart kosong</b></td>
                                </tr>
                            @endif
                            @foreach($cartItems as $item)

                            <tr class="text-center">
                                <td class="product-remove">
                                    <form action="{{ route('cart.remove', $item->id) }}" method="post" id="myForm-{{$item->id}}" class="JSV">
                                        @csrf
                                        <a href="javascript:void(0);" class="JSV" data-form-id="myForm-{{ $item->id }}"><span class="ion-ios-close" onclick="submitForm()"></span></a>
                                        {{-- <a type="submit" href="{{ route('cart.remove', $item->id) }}"><span class="ion-ios-close"></span></a> --}}
                                    </form>
                                </td>

                                <td class="image-prod">
                                    <div class="img" style="background-image:url({{asset('images/produk/'. $item->produk->gambar)}});"></div>
                                </td>

                                <td class="product-name">
                                    <h3>{{$item->produk->nama_produk}}</h3>
                                    <p></p>
                                </td>

                                <td class="price">Rp. {{number_format($item->produk->harga)}}</td>

                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <form action="{{ route('cart.update', $item->id) }}" method="post">
                                            @csrf
                                            <input type="text" name="quantity" class="quantity form-control input-number" value="{{$item->quantity}}" min="1" max="100">
                                            <button type="submit" hidden></button>
                                        </form>
                                    </div>
                                </td>

                                <td class="total">Rp. {{ number_format($item->produk->harga * $item->quantity) }}</td>
                            </tr><!-- END TR-->
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
