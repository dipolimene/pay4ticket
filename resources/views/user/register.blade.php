<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title> Pay4Ticket | Sell Ticket </title>
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
	@include('layout.topheader')
	<!--top-header-->

	<!--bottom-header-->
	@include('layout.bottomheader')
	<!--bottom-header-->

	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="/">Home</a></li>
					<li class="active">Account</li>
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

					<form action="/sellticket/register" method="POST">

		@if($msg = Session::get('message'))
					
		{{ $msg }}
			
		@endif

		{{ csrf_field() }}

					<div class="account-top heading">
						<h3>NEW USERS</h3>
					</div>

					<div class="address">
						<span>Full Name</span>
	@if($errmsg = $errors->has('name')) <span class="err">{{ $errors->get('name')[0] }}</span> @endif
						<input type="text" name="name">
					</div>

					<div class="address">
						<span>Email Address</span>
	@if($errmsg = $errors->has('email')) <span class="err">{{ $errors->get('email')[0] }}</span> @endif
						<input type="text" name="email">
					</div>

					<div class="address">
						<span>Password</span>
	@if($errmsg = $errors->has('password')) <span class="err">{{ $errors->get('password')[0] }}</span> @endif
						<input type="password" name="password" style="width: 540px; height: 41px">
					</div>

					<div class="address">
						<span>Confirm Password</span>
						<input type="password" name="password_confirmation" style="width: 540px; height: 41px">
					</div>

					<div class="address new">
						<input type="submit" name="register" value="Register">
					</div>

					<div class="b-btn"> 
						<a href="/sellticket/login">Existing Users</a>
					</div>

					</form>
				</div>
				
				<div class="clearfix"> </div>

			</div>
		</div>
	</div>
	<!--end-account-->

	<!--start-footer-->
	@include('layout.footer')
	<!--end-footer-->

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