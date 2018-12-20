<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ressa Catering | Makanan Box</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Delish Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--web-fonts-->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
<!--//web-fonts-->
</head>

<body>
<!-- banner -->
<div class="banner" id="home">
		<!-- header -->
		<div class="banner-top">
			<div class="social-bnr-agileits">
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>					
				</ul>
			</div>

			 
			
			 <div class="contact-bnr-w3-agile">
			@if (Route::has('login'))
				<ul>
					<li>
					@auth
					
					<a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
					<li><a href="{{ url('/profile') }}">Profile</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <li><a href="{{ route('register') }}">Register</a>
                    @endauth
					</li>
			@endif
					<li><i class="fa fa-phone" aria-hidden="true"></i>+62 817-177-827</li>	
					<li>
						<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post">
									<input type="search" name="Search" placeholder="Search..." required="" />
									<input type="submit" value="Send" />
								</form>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<header>
			<div class="container">

			<!-- navigation -->
			<div class="w3_navigation">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="w3_navigation_pos">
						<h1><a href="{{ url('/home') }}"><span>R</span>essa <span>C</span>atering</a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--miranda">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="{{ url('/home') }}" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="{{ url('/gallery') }}" class=" menu__link">Gallery</a></li>
							<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Paket<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="{{ url('/wedding') }}">Wedding</a></li>
							<li><a href="{{ url('/prasmanan') }}">Prasmanan</a></li>
						</ul>
					</li>
							<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link menu__item--current"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Box<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="{{ url('/makanan_box') }}">Makanan Box</a></li>
							<li><a href="{{ url('/snack_box') }}">Snack Box</a></li>
						</ul>
                    </li>
                             <li class="menu__item"><a href="{{ url('/partner') }}" class=" menu__link">Partner</a></li>
							<li class="menu__item"><a href="{{ url('/contact') }}" class=" menu__link">Contact</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
	</div>
	<div class="clearfix"></div>
		<!-- //navigation -->
		@if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
			</div>
		</header>
	<!-- //header -->
	<br>
	<div class="banner-text"> 
			<h2>Menyediakan nasi box dengan berbagai macam menu!</h2>
			
		</div>
	</div>
<!-- //banner -->
<!-- special -->
	<div class="special">
		<div class="container">
			<div class="special-heading">
				<h2 class="tittle-w3"><span>MAKANAN</span> Box</h2>
			</div>
			<div class="special-grids">
				<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 w3ls-special-img">
						<div class="w3ls-special-text effect-1">
						</div>
					</div>
					<div class="col-md-6 agileits-special-info">
						<h4>Bistik Gading</h4>
						<p>Menu Utama Daging Favorit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 w3ls-special-img wthree-img">
						<div class="w3ls-special-text effect-1">
						</div>
					</div>
					<div class="col-md-6 agileits-special-info">
						<h4>Cap Cay</h4>
						<p>Menu Sayuran Yang Paling Favorit dan banyak dipesan.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 w3ls-special-img wthree-img1">
						<div class="w3ls-special-text effect-1">
						</div>
					</div>
					<div class="col-md-6 agileits-special-info">
						<h4>Sambal Goreng</h4>
						<p>Menu Favorit Berbagai Macam.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 agileits-special-info">
						<h4>Udang Tempura</h4>
						<p>Menu Favorit Paling Banyak Dipesan.</p>
					</div>
					<div class="col-md-6 w3ls-special-img wthree-img2">
						<div class="w3ls-special-text effect-1">
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 agileits-special-info">
						<h4>Ayam Goreng Mentega</h4>
						<p>Makanan Favorit.</p>
					</div>
					<div class="col-md-6 w3ls-special-img wthree-img3">
						<div class="w3ls-special-text effect-1">
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 agileits-special-info">
						<h4>Kakap Asam Manis</h4>
						<p>Menu Utama Ikan Favorit.</p>
					</div>
					<div class="col-md-6 w3ls-special-img wthree-img4">
						<div class="w3ls-special-text effect-1">
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //special -->
	<!--services-section-->
<div class="services-w3layouts" id="services">
	<!-- //Stats -->
			<div class="col-md-12 agitsworkw3ls-grid ">
			<h3 class="tittle-w3"><span>OUR</span> MAIN <span> &</span> DELICIOUS<span> MENU</span></h3>
			<p class="para-w3l">Silahkan memilih menu berdasarkan tipe dibawah ini. Untuk yang bertanda OPTIONAL tergantung pada menu makanan apa yang ada pada hari itu/dapat diganti. Untuk keselarasan menu anda dapat mengcontact kami via telephone atau pihak kami yang akan menghubungi anda. Harap mengisi di tabel pesanan bagian pilihan menu-menu yang anda pilih dari OPTIONAL menu. </p>
			<div class="services-left-w3-agile">
				<h3 class="tittle-w3 sub-head"><span>Paket</span> A</h3>
				<ul>
				<li><i  aria-hidden="true"></i>MENU 4 LAUK(Menu Utama : Ayam)</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Nasi Putih</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Sambel Grng Buncis/Orak-arik Sayuran(OPTIONAL)</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Ayam Goreng Mentega/Rujak(OPTIONAL)</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Sambal Grng Ati/Printil(OPTIONAL)</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Mie Goreng/Perkedel/Oreg Tempe(OPTIONAL)</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Kerupuk Udang</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Pisang</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Aqua</li>
					<li><i  aria-hidden="true"></i>HARGA RP 27.500,-</li>
				</ul>
				</div>
				<div class="services-middle-w3-agile">
				<h3 class="tittle-w3 sub-head"><span>Paket</span> B</h3>
				<ul>
				<li><i  aria-hidden="true"></i>MENU 4 LAUK(Menu Utama : AYam & Daging)</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Nasi Putih</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Cap Cay/Cah Kailan(OPTIONAL)</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Ayam Grng Rujak/Mentega/Sate(OPTIONAL)</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Bistik Daging/Sambal Goreng Daging(OPTIONAL)</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Kakap Asam Manis/Udang Tempura(OPTIONAL)</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Kerupuk Udang</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Pisang</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Aqua</li>
					<li><i  aria-hidden="true"></i>HARGA RP 30.500,-</li>
				</ul>
				</div>
				<div class="services-middle-w3-agile">
				<h3 class="tittle-w3 sub-head"><span>Paket</span> C</h3>
				<ul>
				<li><i aria-hidden="true"></i>MENU 5 LAUK</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Nasi Putih</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Cap Cay/Cah Kailan(OPTIONAL)</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Ayam Paprika/Rujak/Panggang(OPTIONAL)</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Krengseng Daging/Bistik Daging(OPTIONAL)</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Sambel Grng Printil/Ati Sapi/Ati Ampela(OPTIONAL)</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Kakap Asam Manis/Udang Tempura(OPTIONAL)</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Kerupuk</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Pisang</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>Aqua</li>
					<li><i aria-hidden="true"></i>(Menu dapat dikurangi 1 dan diganti puding)</li>
					<li><i  aria-hidden="true"></i>HARGA RP 35.000,-</li>
				</ul>
				</div>

				
			</div>

			
			<div class="clearfix"></div>

	<!-- //Stats -->
	<br>
	<br>
<div class="clearfix"></div>
<div class="col-md-12">
        <h4>LIST MAKANAN YANG AVAILABLE</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
				   <th>No</th>
                   <th>Nama Makanan</th>
                    <th>Kategori</th>
                   </thead>
    <tbody>

                @php(
                    $no = 1 {{-- buat nomor urut --}}
                    )
                {{-- loop all kendaraan --}}
                @foreach ($foods as $food)
					@if($food->category == "Makanan")
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $food->nama }}</td>
                        <td>{{ $food->category }}</td>
                    </tr>
					@endif
                @endforeach
                {{-- // end loop --}}
            </tbody>

        
</table>
@if (Route::has('login'))
	@auth
	<div class="all-comments-info">
	<h5>PESAN DISINI=</h5>
   <div class="agile-info-wthree-box">
	   <form method="POST" action="{{route('makanan.pesan')}}">
	   {{csrf_field()}}
		  <div class="col-md-6 form-info">
		  <input type="text" name="nama" placeholder="Nama sesuai profile...">
		   <input type="text" name="paket" placeholder="Pilih Paket.." >			           					   
		   <input type="text" name="telephone" placeholder="Phone..">
		   <input type="text" name="alamat" placeholder="Alamat..">	
		 </div>
		  <div class="col-md-6 form-info">
		  <input type="text" name="tanggal_pesanan" placeholder="Hari, dd-mm-yyyy..">
		  <input type="text" name="kuantitas" placeholder="Berapa banyak kotak....">
		   <textarea name="list_makanan" placeholder="Pilihan menu-menu.."></textarea>
		   <input type="submit" value="PESAN">
		</div>
		<div class="clearfix"> </div>
	   </form>
   </div>
  		 <div class="clearfix"></div>
	</div>
	@else
	<div class="clearfix"></div>
	@endauth
@endif
<!--//services-section-->
	<!-- features -->
	<div class="features">
		<div class="container">
			<div class="features-heading">
				<h3 class="tittle-w3"><span>Catatan</span>:</h3>
			</div>
			<div class="features-grids">
				<div class="col-md-8 features-right">
					<div class="features-right-info">
						<h4>Ada beberapa hal yang perlu diketahui sebelum melakukan pemesanan Makanan Box seperti berikut.</h4>
					</div>
					<div class="features-right-grids">
						<div class="features-right-left">
							<div class="features-right-icon effect-2">
								<i class="fa fa-users" aria-hidden="true"></i>
							</div>
						</div>
						<div class="features-right-right">
							<p>Minimal Pemesanan 100 Box, jika kurang dari itu menunggu konfirmasi via telephone/SMS dari kami. </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="features-right-grids">
						<div class="features-right-left">
							<div class="features-right-icon effect-2">
								<i class="fa fa-asterisk" aria-hidden="true"></i>
							</div>
						</div>
						<div class="features-right-right">
							<p>Minimal Pemesanan 100 untuk pengantaran daerah Jabodetabek, selebihnya diambil. </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="features-right-grids">
						<div class="features-right-left">
							<div class="features-right-icon effect-2">
								<i class="fa fa-inr" aria-hidden="true"></i>
							</div>
						</div>
						<div class="features-right-right">
							<p>Pelunasan pembayaran maksimal 1 minggu sebelum tanggal pesanan. </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="features-right-grids">
						<div class="features-right-left">
							<div class="features-right-icon effect-2">
								<i class="fa fa-cog" aria-hidden="true"></i>
							</div>
						</div>
						<div class="features-right-right">
							<p>Menu dan harga dapat berubah tanpa pemberitahuan. </p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 features-left">
					<div class="features-left-info">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //features -->
<!-- Footer -->

			<div class="copyright-wthree">
				<p>&copy; 2017 Delish Food . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts </a></p>
			</div>
<!-- //Footer -->
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->
 <!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- script-for-menu -->
					<script>					
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle("slow" , function(){
							});
						});
					</script>
					<!-- script-for-menu -->
</body>
</html>