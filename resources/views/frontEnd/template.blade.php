<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flora Shop</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/logoflora1.png" type="image/png">
    @yield('icon')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontAsset/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontAsset/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('frontAsset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontAsset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontAsset/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('frontAsset/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('frontAsset/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontAsset/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('frontAsset/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('frontAsset/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontAsset/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('frontAsset/css/style.css')}}">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.JSV a').forEach(function(element) {
                element.addEventListener('click', function(event) {
                    event.preventDefault();
                    var formId = this.dataset.formId;
                    console.log("Submitting form ID: " + formId);
                    document.getElementById(formId).submit();
                });
            });
        });
    </script>
</head>
<body class="goto-here">

    {{-- awal navbar --}}
    @include('layouts.frontend.navbar')
    {{-- akhir navbar --}}

    @yield('content_front')

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6">
                    <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                    <span>Get e-mail updates about our latest shops and special offers</span>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- awal footer --}}
    @include('layouts.frontend.footer')
    {{-- akhir footer --}}



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="{{asset('frontAsset/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontAsset/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('frontAsset/js/popper.min.js')}}"></script>
    <script src="{{asset('frontAsset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontAsset/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('frontAsset/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontAsset/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('frontAsset/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontAsset/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontAsset/js/aos.js')}}"></script>
    <script src="{{asset('frontAsset/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('frontAsset/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('frontAsset/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('frontAsset/js/google-map.js')}}"></script>
    <script src="{{asset('frontAsset/js/main.js')}}"></script>

    <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });

    </script>

</body>
</html>
