<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title> Pay4Ticket | Create Event </title>
<link href="{{ URL::to('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ URL::to('js/jquery-1.11.0.min.js') }}"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{ URL::to('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="The Event Handler" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="{{ URL::to('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/easing.js') }}"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>	
<!-- start menu -->
<script src="{{ URL::to('js/simpleCart.min.js') }}"> </script>
<link href="{{ URL::to('css/memenu.css') }}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{ URL::to('js/memenu.js') }}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>				
</head>
<body> 

	<!--top-header-->
	<div class="top-header">
	<div class="container">
		<div class="top-header-main">
			<div class="col-md-4 top-header-left">
				<!-- <div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div> -->
			</div>
			<div class="col-md-4 top-header-middle">		
 			<a href="#"><img src="{{ URL::to('images/logo.png') }}" alt="" />
 			</div>
			<div class="col-md-4 top-header-right">
<!-- 				<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart-1.png" alt="" />
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div> -->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
	<!--top-header-->

	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="/dashboard/{{ Auth::user()->id }}">Dashboard</a></li>
					<li class="active">{{ Auth::user()->name }}</li>
					<li><a href="/dashboard/event/{{ Auth::user()->id }}">Create Event</a></li>
					<li><a href="/logout">Logout</a></li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-account-->
	<div class="account">
		<div class="container"> 
			<div class="account-bottom">

				<div class="col-md-6 account-left">

				<form action="/dashboard/event/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">

		@if($msg = Session::get('message'))
					
		{{ $msg }}
			
		@endif

		{{ csrf_field() }}

					<div class="account-top heading">
						<h3>Event Handler</h3>
			<span> ** Please provide all necessary information about your event.</span>
					</div>

					<div class="address">
						<span>Event Title</span>
	@if($errmsg = $errors->has('title')) <span class="err">{{ $errors->get('title')[0] }}</span> @endif
						<input type="text" name="title">
					</div>

					<div class="address">
						<span>Event Description</span>
	@if($errmsg = $errors->has('description')) <span class="err">{{ $errors->get('description')[0] }}</span> @endif
						<textarea name="description" style="width: 540px; height: 50px"></textarea>
					</div>

					<div class="address">
						<span>Event Genre</span>
	@if($errmsg = $errors->has('genre')) <span class="err">{{ $errors->get('genre')[0] }}</span> @endif
					<select name="genre" style="width: 540px; height: 50px">
					<option>Concert</option>
					<option>Comedy</option>
					<option>Album Launch</option>
					<option>Club</option>
					<option>Gospel</option>
					<option>Other</option>
					</select>
					</div>

					<div class="address">
						<span>Event Date</span>
	@if($errmsg = $errors->has('date')) <span class="err">{{ $errors->get('date')[0] }}</span> @endif
						<input type="text" name="date">
					</div>

					<div class="address">
						<span>Event Time</span>
	@if($errmsg = $errors->has('time')) <span class="err">{{ $errors->get('time')[0] }}</span> @endif
						<input type="text" name="time">
					</div>

					<div class="address">
						<span>Ticket Price</span>
	@if($errmsg = $errors->has('price')) <span class="err">{{ $errors->get('price')[0] }}</span> @endif
						<input type="text" name="price">
					</div>

					<div class="address">
						<span>Is it a Premium Event?</span>
	@if($errmsg = $errors->has('premium')) <span class="err">{{ $errors->get('premium')[0] }}</span> @endif
						<select name="premium" style="width: 540px; height: 50px"><option>YES</option><option>NO</option></select>
					</div>

					<div class="address">
						<span>ID Required</span>
	@if($errmsg = $errors->has('identity')) <span class="err">{{ $errors->get('identity')[0] }}</span> @endif
						<select name="identity" style="width: 540px; height: 50px">
						<option>YES</option>
						<option>NO</option>
						</select>
					</div>

					<div class="address">
						<span>Venue Location</span>
	@if($errmsg = $errors->has('location')) <span class="err">{{ $errors->get('location')[0] }}</span> @endif
						<input type="text" name="location">
					</div>	

					<div class="address">
						<span>Venue Address</span>
	@if($errmsg = $errors->has('address')) <span class="err">{{ $errors->get('address')[0] }}</span> @endif
						<textarea name="address" style="width: 540px; height: 50px"></textarea>
					</div>		

					<div class="address">
						<span>Upload Flyer (700px * 1000px)</span>
	@if($errmsg = $errors->has('flyer')) <span class="err">{{ $errors->get('flyer')[0] }}</span> @endif
						<input type="file" name="flyer">
					</div>

					<div class="address">
						<span>Upload Banner (1600px * 800px)</span>
	@if($errmsg = $errors->has('banner')) <span class="err">{{ $errors->get('banner')[0] }}</span> @endif
						<input type="file" name="banner">
					</div>			

					<div class="address new">
						<input type="submit" name="send" value="SEND">
					</div>

					</form>

				</div>

				<div class="clearfix"> </div>

			</div>
		</div>
	</div>
	<!--end-account-->

	<!--end-footer-text-->
	<div class="footer-text">

		@include('layout.footertext')

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
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--end-footer-text-->	
</body>
</html>