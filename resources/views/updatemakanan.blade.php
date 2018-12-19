<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ressa Catering | Edit Makanan</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Delish Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{url('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{url('css/font-awesome.css')}}" rel="stylesheet"> 
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
							<li class="menu__item"><a href="{{ url('/profile_pesanan') }}" class="menu__link">Back</a></li>
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
			<h2>Edit Pesananmu Disini!</h2>
			</div>

            <div class="clearfix"></div>
		<!-- //navigation -->
			</div>
		</header>
	<!-- //header -->
	<!-- Page Content -->
	<div class="all-comments-info">
	<h5>PESAN DISINI=</h5>
   <div class="agile-info-wthree-box">
	   <form method="POST" action="{{ route('food.update', $makanans->id) }}">
	   {{csrf_field()}}
	   {{ method_field('PATCH') }}
		  <div class="col-md-6 form-info">
		  <input type="text" name="nama" placeholder="Phone.." value="{{$makanans->nama}}">	
		  <input type="text" name="paket" placeholder="Phone.." value="{{$makanans->paket}}">			           					   
		   <input type="text" name="telephone" placeholder="Phone.." value="{{$makanans->telephone}}">
		   <input type="text" name="alamat" placeholder="Alamat.." value="{{$makanans->alamat}}">	
		 </div>
		  <div class="col-md-6 form-info">
		  <input type="text" name="tanggal_pesanan" placeholder="Hari, dd-mm-yyyy.." value="{{$makanans->tanggal_pesanan}}">
		   <input type="text" name="list_makanan" placeholder="Pilihan menu-menu.." value="{{$makanans->list_makanan}}">
		   <input type="submit" value="SAVE" onclick="return confirm('Yakin ingin mengedit data?')>
		</div>
	<div class="clearfix"> </div>
	   </form>
   </div>
  		 <div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
        
        
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
            </body>
</html>