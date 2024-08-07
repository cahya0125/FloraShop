<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Flora Shop</title>
    <!--favicon-->
	  <link rel="icon" href="assets/images/logoflora1.png" type="image/png">
    
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
  </head>
  <body class="goto-here">

    {{-- awal navbar --}}
    @include('layouts.frontend.navbar')
    {{-- akhir navbar --}}
		
    {{-- awal content --}}
    <div class="hero-wrap hero-bread" style="background-image: url({{asset('images/background.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About us</span></p>
            <h1 class="mb-0 bread">About us</h1>
          </div>
        </div>
      </div>
    </div>

    {{-- awal link vid --}}
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('images/bgtanaman.jpg')}});">
						<a href="{{url('https://www.youtube.com/watch?v=hVrv3lOy3vA')}}" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a>
					</div>
    {{-- akhir link vid --}}
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">Welcome to Flora Shop website</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
	          	<p>Selamat datang di Flora Shop, destinasi utama Anda untuk keindahan bunga dan tanaman yang mempesona. Kami adalah toko bunga online yang berdedikasi untuk menghadirkan
                     keajaiban alam ke dalam hidup Anda melalui berbagai rangkaian bunga segar dan tanaman berkualitas tinggi. Dengan pengalaman bertahun-tahun di industri florist, kami bangga menyediakan layanan terbaik dan produk unggulan untuk semua kebutuhan bunga Anda.</p>
							<p>misi kami adalah untuk membantu Anda mengekspresikan perasaan, merayakan momen istimewa, dan menciptakan kenangan indah dengan bunga. Kami berkomitmen untuk menyediakan rangkaian bunga yang elegan, indah, dan dibuat dengan penuh cinta oleh tim florist profesional kami.</p>
							<p><a href="{{url('/shop')}}" class="btn btn-primary">Shop now</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

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
		
		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('images/bg2.jpg')}});">
    	<div class="container">
    		<div class="row justify-content-center py-5">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Partner</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Awards</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
    {{-- akhir content --}}
		
   {{-- awal testimony --}}
	 <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Testimony</span>
                    <h2 class="mb-4">Our satisfied customer says</h2>
                    <p>some people's opinions about our plants</p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url({{asset('frontAsset/images/person1.jpg')}})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Tidak ada kehidupan lain yang semurni tanaman. Tidak heran kita tidak bisa memahaminya.</p>
                                    <p class="name">Aisy</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url({{asset('frontAsset/images/person2.webp')}})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Tanaman selalu membuat orang lebih baik, lebih bahagia, dan lebih bermanfaat.</p>
                                    <p class="name">Lisa</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url({{asset('frontAsset/images/person3.jpg')}})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Seni rupa terbesar di masa depan adalah membuat kehidupan yang nyaman dari sebidang tanah kecil.</p>
                                    <p class="name">Ronaldo</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url({{asset('frontAsset/images/person4.jpeg')}})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Saya sangat sederhana. Saya menanam bunga dan melihat mereka tumbuh. Saya sangat suka.</p>
                                    <p class="name">Messi</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url({{asset('frontAsset/images/person5.jpg')}})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Jika kamu melihat ke arah yang benar, kamu dapat melihat bahwa seluruh dunia adalah taman.</p>
                                    <p class="name">Rose</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir testimony --}}

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over $100</span>
              </div>
            </div>      
          </div>
          <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Always Fresh</h3>
                <span>Product well package</span>
              </div>
            </div>    
          </div>
          <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>      
          </div>
          <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
        
    {{-- awal footer --}}
    @include('layouts.frontend.footer')
    {{-- akhir footer --}}
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
    
  </body>
</html>