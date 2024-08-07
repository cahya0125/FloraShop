@extends('frontend.template')
@section('content_front')
<div class="hero-wrap hero-bread" style="background-image: url({{asset('images/background.jpg')}});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
                <h1 class="mb-0 bread">Checkout</h1>
            </div>
        </div>
    </div>
</div>

<form action="{{route('checkout.order')}}" class="JSV billing-form" id="myForm" method="POST">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 ftco-animate">
                    @csrf
                    <h3 class="mb-4 billing-heading">Billing Details</h3>
                    <div class="row align-items-end">
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="streetaddress">Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="House number and street name">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="towncity">Kota</label>
                                <input type="text" name="kota" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="postcodezip">Kode Pos</label>
                                <input type="text" name="kode_pos" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailaddress">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group mt-4">
                                <div class="radio">
                                    <label class="mr-3"><input type="radio" name="optradio"> Create an Account? </label>
                                    <label><input type="radio" name="optradio"> Ship to different address</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="row mt-5 pt-3">
                        <div class="col-md-12 d-flex mb-5">
                            <div class="cart-detail cart-total p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Cart Total</h3>
                                @foreach($carts as $cart)

                                {{-- <p class="d-flex">
                                <span>Subtotal</span>
                                <span>Rp. {{$cart->quantity * $cart->produk->harga}}</span>
                                </p> --}}
                                <p class="d-flex">
                                    <span>{{ $cart->produk ? $cart->produk->nama_produk : 'Produk Tidak Tersedia' }}</span>
                                    <span>{{$cart->produk ? number_format($cart->produk->harga): '0'}}</span>
                                </p>
                                {{-- <p class="d-flex">
                                <span>Discount</span>
                                <span>$3.00</span>
                            </p> --}}
                               
                                @endforeach
                                <hr>
                                <p class="d-flex total-price">
                                    <span>Total</span>
                                    <span>Rp. {{number_format($total)}}</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="cart-detail p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Payment Method</h3>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="javascript:void(0)" data-form-id="myForm" class="JSV btn btn-primary py-3 px-4">Place an order</a></p>
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->
</form><!-- END -->
@endsection