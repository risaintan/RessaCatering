<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ressa Catering | Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Delish Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
							<li class="menu__item menu__item--current"><a href="{{ url('/home') }}" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="{{ url('/gallery') }}" class=" menu__link">Gallery</a></li>
							<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Paket<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="{{ url('/wedding') }}">Wedding</a></li>
							<li><a href="{{ url('/prasmanan') }}">Prasmanan</a></li>
						</ul>
					</li>
							<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Box<span class="caret"></span></a>
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
			</div>
		</header>
	<!-- //header -->
	<!-- banner-text -->
		<div class="banner-text">
			<h2>MENGUTAMAKAN MUTU, RASA DAN PELAYANAN!</h2>

		</div>
		<!-- gallery -->
	<div class="gallery-ban" id="gallery">
	<div class="container">
				<ul id="flexiselDemo1">
					<li>
						<div class="wthree_testimonials_grid_main">

									<img src="{{asset('/img/p1.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">

									<img src="{{asset('/img/p2.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">

									<img src="{{asset('/img/p3.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">

									<img src="{{asset('/img/p6.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">

									<img src="{{asset('/img/p4.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">

									<img src="{{asset('/img/p5.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</li>
				</ul>

	</div>
	</div>
	<!-- //gallery -->
	</div>
<!-- //banner -->
 <div class="ab-w3l-about">
	<div class="container">
		 <h3 class="tittle-w3"><span>Welcome to</span> Ressa Catering</h3>
			<p class="param-w3l">Kami menyelenggarakan layanan catering untuk berbagai macam acara dan perhelatan penting anda..
			Catering kami didukung oleh tenaga kerja yang berpengalaman dalam bidangnya.
			MUTU DAN RASA adalah motto kami...
			Kami siap melayani dan memenuhi pesanan anda - kepuasan anda adalah tujuan kami, percayakanlah acara anda pada kami..
			</p>
	</div>
</div>
<div class="about" id="about">
  <div class="col-md-6 ab-w3-agile-info">
	  <div class="ab-w3-agile-info-text">
	    <h3 class="tittle-w3">About<span> Us</span></h3>
			<p class="para-w3l">Awalnya dari belajar membuat kue kecil-kecilan untuk konsumsi rapat di kantor tertentu berupa konsumsi snack dan lama kelamaan menumbuhkan kepercayaan yang semakin meluas kemudian mencoba melayani pesanan konsumsi makan siang dan Alhamdulillah ternyata dapat memikat langganan yang semakin banyak. Sehingga atas dasar inilah akhirnya tertarik untuk mengembangkan usaha jasa boga berupa layanan catering.

			Atas persetujuan dan dukungan keluarga maka pada tahun 1984 dibentuklah layanan catering dengan nama RESSA Catering kependekan dari Restu Suami dan Anak.

			RESSA Catering menyelenggarakan layanan catering untuk berbagai macam acara dan perhelatan penting anda.

			Catering kami didukung oleh tenaga kerja yang berpengalaman dalam bidangnya</p>
			<div class="about-read">
				</div>
		  </div>
		  <div class="ab-w3-agile-inner">
	    	<div class="col-md-6 ab-w3-agile-part">
					<h4>Wedding & Party Service Organizer</h4>
	      </div>
			<div class="col-md-6 ab-w3-agile-part two">
				<h4>Catering (Makanan Box & Snack Box)</h4>
	    </div>
			<div class="clearfix"></div>
	  </div>
	</div>
<div class="col-md-6 ab-w3-agile-img">

</div>

<div class="clearfix"></div>
</div>
<!--blogs-->
<div class="clearfix"></div>
<br>
<br>
<div class="agile-blogs" id="blogs">
	<div class="container">
	<h3 class="tittle-w3"><span>Pelayanan </span>Kami</h3>
		<div class="g1 agile-blog1">
			<a href="#"><img src="{{asset('/img/bl1.jpg')}}" alt="blog1"></a>
				<div class="text-w3">
					<h3 class="tittle-w3 sub-head"><span>Contoh Makanan Box</span></h3>
					<p class="para-w3l">Menyediakan menu nasi box dengan berbagai macam lauk.</p>

				</div>
				<div class="clearfix"></div>
		</div>
		<div class="g2 agile-blog2">
			<a href="#"><img src="{{asset('/img/bl2.jpg')}}" alt="blog1"></a>
				<div class="text-w3l">
					<h3 class="tittle-w3 sub-head"><span>Contoh Pelaminan</span></h3>
					<p class="para-w3l">Menyediakan layanan perkawinan dari mulai pelaminan sampai catering. Serta rekomendasi tempat dan salon rekanan.</p>

				</div>
				<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//blogs-->


				<!--services-section-->
<div class="services-w3layouts" id="services">
	<!-- //Stats -->
			<div class="col-md-6 agitsworkw3ls-grid ">
			<h3 class="tittle-w3"><span>Beautiful</span> decoration <span>& </span>delicious <span>food</span></h3>
			<p class="para-w3l"> Disini di RessaCatering Mampu melayani hari berbahagia anda </p>
			<div class="blabla-left-w3-agile">
				<h3 class="tittle-w3 sub-head"><span>Our </span>Menu</h3>
				<ul>
					<li><i class="fa fa-check" aria-hidden="true"></i>CAKE & PASTRY</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>COFFE BREAK</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>LUNCH BUFFETS</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>DINNER BUFFETS</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>PARTY TRAYS</li>
				</ul>
				</div>
				<div class="blabla-right-w3-agile">
				<h3 class="tittle-w3 sub-head"><span>Catering</span> for</h3>
				<ul>
					<li><i class="fa fa-check" aria-hidden="true"></i>GRADUATION PARTY</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>WEDDING PARTY</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>BRIDAL SHOWER</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>BIRTHDAY PARTY</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>ANNIVERSARY</li>
				</ul>
				</div>
			</div>

			<div class="col-md-6 agitsworkw3ls-grid-2">
			   <div class="info-imgs">
			         <ul>
					  <li>
						  <div class="gallery-grid1">
								<a><img src="{{asset('/img/k1.jpg')}}" alt=" " class="img-responsive"></a>
								<div class="p-mask">
									<h4><span>R</span>essa <span>C</span>atering</h4>
								</div>
							</div>
					  </li>
					   <li>
					     <div class="gallery-grid1">
							<a><img src="{{asset('/img/k2.jpg')}}" alt=" " class="img-responsive"></a>
							<div class="p-mask">
									<h4><span>R</span>essa <span>C</span>atering</h4>
							</div>
						</div>
					   </li>
						<li>
						   <div class="gallery-grid1">
							<a><img src="{{asset('/img/k3.jpg')}}" alt=" " class="img-responsive"></a>
							<div class="p-mask">
									<h4><span>R</span>essa <span>C</span>atering</h4>
							</div>
						</div>
						</li>
					    <li>
						  <div class="gallery-grid1">
							<a><img src="{{asset('/img/k4.jpg')}}" alt=" " class="img-responsive"></a>
							<div class="p-mask">
									<h4><span>R</span>essa <span>C</span>atering</h4>
							</div>
						</div>
						</li>
					 </ul>
			   </div>

			</div>
			<div class="clearfix"></div>
	<!-- //Stats -->
<div class="clearfix"></div>
</div>
<!--//services-section-->
<!--count-->
			<div class="count-agileits">
				<div id="particles-js"></div>
					
					<div class="count-grids">
					<h3 class="tittle-w3">Handling <span>your needs</span> with care</h3>
					<div class="count-bgcolor-w3ls">
						<div class="col-md-4 count-grid">
						<i class="fa fa-cutlery" aria-hidden="true"></i>
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1052' data-delay='.5' data-increment="100">1052</div>
									<span></span>
									<h5>Products available</h5>
							</div>
						</div>
						<div class="col-md-4 count-grid">
						<i class="fa fa-users" aria-hidden="true"></i>
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='372' data-delay='.5' data-increment="100">372</div>
									<span></span>
									<h5>Clients come back</h5>
							</div>
						</div>
						<div class="col-md-4 count-grid">
						<i class="fa fa-user-plus" aria-hidden="true"></i>
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='105209' data-delay='.5' data-increment="100">105209</div>
									<span></span>
									<h5>Site members</h5>
								</div>
						</div>
						<div class="clearfix"></div>
						</div>
					</div>
			</div>
				<!--count-->

<!-- mail -->
				<div class="mail">
					<div class="mail-grid1">
					<div class="container">
						<h3 class="tittle-w3">Contact <span>Info</span></h3>
							<div class="col-md-4 mail-agileits-w3layouts">
								<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Phone</p><span>+62 817-177-827</span>
								</div>
							</div>
							<div class="col-md-4 mail-agileits-w3layouts">
								<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Email</p><a href="mailto:estining5568@gmail.com">estining5568@gmail.com</a>
								</div>
							</div>
							<div class="col-md-4 mail-agileits-w3layouts">
								<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Address</p><span>Jl. Merah Delima A4 No 1.<br>Kelapa Gading - Jakarta Utara</span>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
			<!-- //mail -->

			<div class="copyright-wthree">
				<p>&copy; 2017 Delish Food . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts </a></p>
			</div>
<!-- //Footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="{{asset('/js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/numscroller-1.0.js')}}"></script>
<script src="{{asset('/js/particles.js')}}"></script>
<script src="{{asset('/js/app.js')}}"></script>
<!--gallery-->
<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: {
										portrait: {
											changePoint:480,
											visibleItems: 1
										},
										landscape: {
											changePoint:640,
											visibleItems:2
										},
										tablet: {
											changePoint:768,
											visibleItems: 3
										}
									}
								});

							});
					</script>
					<script type="text/javascript" src="{{asset('/js/jquery.flexisel.js')}}"></script>
<!--gallery-->
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
<!-- Calendar -->
				<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}" />
				<script src="{{asset('js/jquery-ui.js')}}"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
 <!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('js/move-top.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
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
	<script src="{{asset('js/bootstrap.js')}}"></script>
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
