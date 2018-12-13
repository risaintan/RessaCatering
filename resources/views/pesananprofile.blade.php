<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ressa Catering | Pesanan</title>
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
						<h1><a href="{{ route('profile') }}"><span>R</span>essa <span>C</span>atering</a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
			</nav>	
	    </div>
		<header>
			<div class="container">
	<div class="clearfix"></div>
		<!-- //navigation -->
		</header>
        <div class="banner-text"> 
			<h2>PESANANKU!</h2>
			<br>
			<h2>Aku pesan apa hari ini?</h2>
		</div>
        </div>
</div>
	<!-- //header -->
	<!-- banner-text -->
			 <div class="clearfix"></div>

		<!-- //navigation -->
	<!-- //header -->
	<!-- Page Content -->
	

<!-- mail -->

<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>PESANAN MAKANAN BOX</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
				   <th>No</th>
                    <th>Paket Pesanan</th>
                     <th>Alamat</th>
                     <th>Telephone</th>
                     <th>List Makanan</th>
					 <th>Tanggal Pemesanan</th>
					 <th>Untuk Tanggal</th>
                     <th>Edit</th>
                       <th>Delete</th>
                   </thead>
    <tbody>

                @php(
                    $no = 1 {{-- buat nomor urut --}}
                    )
                {{-- loop all kendaraan --}}
                @foreach ($makanans as $makanan)
                @if($makanan->nama == "$data->name")
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $makanan->paket }}</td>
                        <td>{{ $makanan->alamat }}</td>
                        <td>{{ $makanan->telephone }}</td>
						<td>{{ $makanan->list_makanan }}</td>
						<td>{{ $makanan->created_at }}</td>
                        <td>{{ $makanan->tanggal_pesanan }}</td>
                        <td>
                            
							<form action="{{ route('profile.destroy', $makanan->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Edit</button>
                            </form>
                            
                        </td>
						<td>
                            
							<form action="{{ route('profile.destroy', $makanan->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                            
                        </td>
                    </tr>
                    @endif
                @endforeach
                {{-- // end loop --}}
            </tbody>

        
</table>
<br>
<br>

<div class="col-md-12">
        <h4>PESANAN SNACK BOX</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
				   <th>No</th>
                    <th>Paket Pesanan</th>
                     <th>Alamat</th>
                     <th>Telephone</th>
                     <th>List Snack</th>
					 <th>Tanggal Pemesanan</th>
					 <th>Untuk Tanggal</th>
                     <th>Edit</th>
                       <th>Delete</th>
                   </thead>
    <tbody>

                @php(
                    $no = 1 {{-- buat nomor urut --}}
                    )
                {{-- loop all snack --}}
                @foreach ($snacks as $snack)
                @if($snack->nama == "$data->name")
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $snack->paket }}</td>
                        <td>{{ $snack->alamat }}</td>
                        <td>{{ $snack->telephone }}</td>
						<td>{{ $snack->list_snack }}</td>
                        <td>{{ $snack->created_at }}</td>
						<td>{{ $snack->tanggal_pesanan }}</td>
                        <td>
						<form action="{{ route('profile.destroy2', $snack->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Edit</button>
                            </form>
                        </td>
                        <td>
						<form action="{{ route('profile.destroy2', $snack->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endif
                @endforeach
                {{-- // end loop --}}
            </tbody>

        
</table>
</div>

		<div class="clearfix"></div>
		
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