<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ressa Catering | Prasmanan </title>
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
							<li class="menu__item "><a href="{{ url('/home') }}" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="{{ url('/gallery') }}" class=" menu__link">Gallery</a></li>
							<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link menu__item--current"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Paket<span class="caret"></span></a>
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
							<li class="menu__item"><a href="contact.html" class=" menu__link">Contact</a></li>
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
	</div>
<!-- //banner -->
<!-- special -->
	<div class="special">
		<div class="container">
			<div class="special-heading">
				<h2 class="tittle-w3"><span>Special</span> Services</h2>
			</div>
			<div class="special-grids">
				<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 w3ls-special-img">
						<div class="w3ls-special-text effect-1">
							<h4>Aliquam</h4>
						</div>
					</div>
					<div class="col-md-6 agileits-special-info">
						<h4>Aliquam</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 w3ls-special-img wthree-img">
						<div class="w3ls-special-text effect-1">
							<h4>Nullam</h4>
						</div>
					</div>
					<div class="col-md-6 agileits-special-info">
						<h4>Nullam</h4>
						<p>Maecenas ac purus. Lorem ipsum dolor sit amet</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 w3ls-special-img wthree-img1">
						<div class="w3ls-special-text effect-1">
							<h4>Maecenas</h4>
						</div>
					</div>
					<div class="col-md-6 agileits-special-info">
						<h4>Maecenas</h4>
						<p>Donec nibh enim, sodales laoreet sit amet, tincidunt</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 agileits-special-info">
						<h4>Aliquam</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					</div>
					<div class="col-md-6 w3ls-special-img wthree-img2">
						<div class="w3ls-special-text effect-1">
							<h4>Aliquam</h4>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 agileits-special-info">
						<h4>Nullam</h4>
						<p>Maecenas ac purus. Lorem ipsum dolor sit amet</p>
					</div>
					<div class="col-md-6 w3ls-special-img wthree-img3">
						<div class="w3ls-special-text effect-1">
							<h4>Nullam</h4>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 agileits-special-info">
						<h4>Maecenas</h4>
						<p>Donec nibh enim, sodales laoreet sit amet, tincidunt</p>
					</div>
					<div class="col-md-6 w3ls-special-img wthree-img4">
						<div class="w3ls-special-text effect-1">
							<h4>Maecenas</h4>
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
			<div class="col-md-6 agitsworkw3ls-grid ">
			<h3 class="tittle-w3"><span>Always</span> fresh <span>& </span>delicious <span>food</span></h3>
			<p class="para-w3l">Gourmet is a full-service catering and event planning company dedicated to providing you with exquisite cuisine and fantastic customer service. We offer a variety of menus and design options, for everything from box lunches to full-service plated dinners.</p>
			<div class="services-left-w3-agile">
				<h3 class="tittle-w3 sub-head"><span>Our </span>Menu</h3>
				<ul>
					<li><i class="fa fa-check" aria-hidden="true"></i>BEVERAGES</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>BREAKFASTS</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>LUNCH BUFFETS</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>DINNER BUFFETS</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>PARTY TRAYS</li>
				</ul>
				</div>
				<div class="services-right-w3-agile">
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
								<a href="single.html"><img src="{{asset('/img/s1.jpg')}}"  alt=" " class="img-responsive"></a>
								<div class="p-mask">
										<h4><span>D</span>elish <span>F</span>ood</h4>
									<p>Neque porro quisquam est, qui dolorem ipsum.</p>
								</div>
							</div>
					  </li>
					   <li>
					     <div class="gallery-grid1">
							<a href="single.html"><img src="{{asset('/img/s2.jpg')}}"  alt=" " class="img-responsive"></a>
							<div class="p-mask">
									<h4><span>D</span>elish <span>F</span>ood</h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
					   </li>
						<li>
						   <div class="gallery-grid1">
							<a href="single.html"><img src="{{asset('/img/s3.jpg')}}"  alt=" " class="img-responsive"></a>
							<div class="p-mask">
									<h4><span>D</span>elish <span>F</span>ood</h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
						</li>
					    <li>
						  <div class="gallery-grid1">
							<a href="single.html"><img src="{{asset('/img/s4.jpg')}}"  alt=" " class="img-responsive"></a>
							<div class="p-mask">
									<h4><span>D</span>elish <span>F</span>ood</h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
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
	<!-- features -->
	<div class="features">
		<div class="container">
			<div class="features-heading">
				<h3 class="tittle-w3"><span>Our</span> Features</h3>
			</div>
			<div class="features-grids">
				<div class="col-md-8 features-right">
					<div class="features-right-info">
						<h4>Quisque scelerisque mollis lacus, nec commodo lacus posuere quis. Aliquam erat volutpat. Sed laoreet, felis vitae viverra aliquet, magna nulla tincidunt odio, at laoreet nisi nisl sit amet risus. Suspendisse ullamcorper tempus eros, eget aliquam eros tincidunt in.</h4>
					</div>
					<div class="features-right-grids">
						<div class="features-right-left">
							<div class="features-right-icon effect-2">
								<i class="fa fa-users" aria-hidden="true"></i>
							</div>
						</div>
						<div class="features-right-right">
							<p>Nulla auctor vel ex a suscipit. Integer scelerisque nec dui et ullamcorper. Aenean vitae urna non est luctus venenatis. </p>
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
							<p>Nulla auctor vel ex a suscipit. Integer scelerisque nec dui et ullamcorper. Aenean vitae urna non est luctus venenatis. </p>
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
							<p>Nulla auctor vel ex a suscipit. Integer scelerisque nec dui et ullamcorper. Aenean vitae urna non est luctus venenatis. </p>
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
							<p>Nulla auctor vel ex a suscipit. Integer scelerisque nec dui et ullamcorper. Aenean vitae urna non est luctus venenatis. </p>
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