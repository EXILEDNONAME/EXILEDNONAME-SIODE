<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta http-equiv="refresh" content="
	@if ( $setup->time_slide_1 == 0 ) 15
	@else {{ $setup->time_slide_1 }}
	@endif ; URL='/corona'" />
	<title> {{ $setup->title }} </title>
	<link rel="shortcut icon" href="/img/jasamarga-ico.png" width="15px" height="15px">

	<link rel='stylesheet' id='MainStyle-css' href='/themes/frontend/style.css' type='text/css' />
	<link rel='stylesheet' id='verticalmenuCSS-css' href='/themes/frontend/verticalmenu.css' type='text/css' />
	<link rel='stylesheet' id='featherFonts-css' href='/themes/frontend/feather.css' type='text/css' />
	<link rel='stylesheet' id='owlcarousel_css-css' href='/themes/frontend/owl-carousel.css' type='text/css' />
	<link rel='stylesheet' id='MainStyle-Light-css' href='/themes/frontend/style-light.css' type='text/css' />
	<link rel='stylesheet' id='fontAwesome-css' href='/themes/frontend/font-awesome.css' type='text/css' />
	<link rel='stylesheet' id='supersized_CSS-css' href='/themes/frontend/supersized.css' type='text/css' />
	<link rel='stylesheet' id='ResponsiveCSS-css' href='/themes/frontend/responsive.css' type='text/css' />
	<script src="/themes/frontend/jquery.js"></script>
	<script type='text/javascript' src='/themes/frontend/jquery-migrate.js'></script>
	<script type='text/javascript' src='/themes/frontend/pace.js'></script>

	<style>
	.footer_h {
		bottom : 0
		color:red;
		position: bottom;
	}
	.bord {
		border-radius: 25px 25px 25px 25px;
		-moz-border-radius: 25px 25px 25px 25px;
		-webkit-border-radius: 25px 25px 25px 25px;
		border: 3px solid #000000;
		margin-left:10px;
		margin-right:10px;
		margin-bottom:10px;
		padding-left: 10px;
		padding-right: 10px;
		background: rgba(241,231,103,1);
		background: -moz-linear-gradient(left, rgba(241,231,103,1) 0%, rgba(241,231,103,0.71) 61%, rgba(70,85,252,0.52) 100%);
		background: -webkit-gradient(left top, right top, color-stop(0%, rgba(241,231,103,1)), color-stop(61%, rgba(241,231,103,0.71)), color-stop(100%, rgba(70,85,252,0.52)));
		background: -webkit-linear-gradient(left, rgba(241,231,103,1) 0%, rgba(241,231,103,0.71) 61%, rgba(70,85,252,0.52) 100%);
		background: -o-linear-gradient(left, rgba(241,231,103,1) 0%, rgba(241,231,103,0.71) 61%, rgba(70,85,252,0.52) 100%);
		background: -ms-linear-gradient(left, rgba(241,231,103,1) 0%, rgba(241,231,103,0.71) 61%, rgba(70,85,252,0.52) 100%);
		background: linear-gradient(to right, rgba(241,231,103,1) 0%, rgba(241,231,103,0.71) 61%, rgba(70,85,252,0.52) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f1e767', endColorstr='#4655fc', GradientType=1 );
		-webkit-box-shadow: 0px 13px 16px 8px rgba(0,0,0,0.51);
		-moz-box-shadow: 0px 13px 16px 8px rgba(0,0,0,0.51);
		box-shadow: 0px 13px 16px 8px rgba(0,0,0,0.51);
	}
	</style>
</head>
<body class="home blog woocommerce-no-js single-author demo menu-is-vertical page-is-fullscreen">
	<div class="preloader-cover-screen"></div>

	<div class="vertical-menu clearfix">
		<div class="vertical-logo-wrap">
			<a href="#">
				<center>
					<img class="vertical-logoimage" src="/img/logo.png" alt="logo" width="60%" height="20%" /></img>
				</center>
			</a>
		</div>
		<marquee scrollamount="1" scrolldelay="1" direction="up" height="55%" width="100%">
			<nav>
				@foreach ( $content as $item )
				<div class="bord" style="text-align: center">
					<b> {{ $item->title }} </b><br />
					{{ $item->content }}
				</div>
				@endforeach
			</nav>
		</marquee>

		<center>
			<img src="/img/apic.png" width="60%" heigth="10%" /></img>
			<div id="time" height="5%"></div>
		</center>
	</div>

	<div id="home" class="container-wrapper container-fullwidth">

		<div id="slidecaption"></div>
		<div id="progress-back" class="load-item">
			<div id="progress-bar"></div>
		</div>

<div class="contentclearfix clearfix"></div>
</div>
<footer>
	<div id="goto-top" title="top of page">
		<i class="fa fa-chevron-up"></i>
	</div>
</footer>

<script type='text/javascript' src='/themes/frontend/index/verticalmenu.js'></script>
<script type='text/javascript' src='/themes/frontend/index/nicescroll.js'></script>
<script type='text/javascript' src='/themes/frontend/index/fitvids.js'></script>
<script type='text/javascript' src='/themes/frontend/index/owl-carousel.js'></script>
<script type='text/javascript' src='/themes/frontend/index/widget.js'></script>
<script type='text/javascript' src='/themes/frontend/index/tooltip.js'></script>
<script type='text/javascript' src='/themes/frontend/index/stickySidebar.js'></script>
<script type='text/javascript' src='/themes/frontend/index/common.js'></script>
<script type='text/javascript' src='/themes/frontend/index/supersized-327.js'></script>
<script type='text/javascript' src='/themes/frontend/index/supersized-shutter.js'></script>
<script>
// AUTO REFRESH DATETIME
setInterval(
	function() {
		$.get("/themes/frontend/datetime-id.php", function(Jam) {
			var xJam = Jam;
			var x = document.getElementById('time');
			x.innerHTML = xJam;
		});
	} ,
	1000
);
</script>

<script type="text/javascript">
jQuery(function($){
	jQuery.supersized({
		slideshow					:	1,
		autoplay					:	1,
		start_slide				:	1,
		image_path				:	'http://kinetika.imaginem.co/wp-content/themess/kinetika/images/supersized/',
		stop_loop					:	0,
		random						:	0,
		slide_interval		:	8000,
		transition				:	1,
		transition_speed	:	1000,
		new_window				:	0,
		pause_hover				:	0,
		keyboard_nav			: 1,
		performance				:	2,
		image_protect			:	0,
		min_width					: 0,
		min_height				: 0,
		vertical_center		: 1,
		horizontal_center	: 1,
		fit_always				:	0,
		fit_portrait			: 1,
		fit_landscape			: 0,
		slide_links				:	'blank',
		thumb_links				:	1,
		thumbnail_navigation    : 0,
		slides						: [
			<?php
			foreach ($slide1 as $item ) { ?>
			{
				image : 'EXILEDNONAME/files/{{ $item->file }}',
				alttext : 'Forest',
				title : '',
				thumb : '',
				url : ''
			},
			<?php } ?>
			],
				progress_bar			:	1,
				mouse_scrub				:	1
			}
		);
			if ($.fn.swipe) {
				jQuery(".page-is-fullscreen #supersized,.pattern-overlay").swipe({
					excludedElements: "button, input, select, textarea, .noSwipe",
					swipeLeft: function() {
						jQuery("#nextslide").trigger("click");
					},
					swipeRight: function() {
						jQuery("#prevslide").trigger("click");
					}
				});
			}
		});
		</script>
		</body>
		</html>
