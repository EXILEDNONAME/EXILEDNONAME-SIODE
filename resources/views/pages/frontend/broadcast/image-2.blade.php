<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="" name="description">
	<meta content="" name="author">
	<meta content="" name="keywords">
  <meta http-equiv="refresh" content="
	@if ( $setup->time_slide_2 == 0 ) 15
	@else {{ $setup->time_slide_2 }}
	@endif ; URL='/video-1'" />
	<title> {{ $setup->title }} </title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<link rel="shortcut icon" href="/img/jasamarga-ico.png" width="15px" height="15px">
	<link href="/themes/frontend/main/plugins.css" media="all" rel="stylesheet" type="text/css">
	<link href="/themes/frontend/main/style.css" media="all" rel="stylesheet" type="text/css"><!-- style end -->
	<script type="text/javascript" src="/js/frontend/jquery-1.4.2.min.js"></script>
	<link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900%7COswald:300,400,700" rel="stylesheet" type="text/css"><!-- google fonts end -->
</head>
<body class="body-light">
	<div class="preloader-bg preloader-bg-light"></div>
	<div class="preloader-light" id="preloader">
		<div id="preloader-status">
			<div class="preloader-position loader loader-light">
				<span></span>
			</div>
		</div>
	</div>

	<div class="border-bottom-menu bottom-position">
		<div class="fadeIn-element" id="menu">
			<nav class="menu">
				<ul><li><a href="#home"><span id="time"></span></a></li></ul>
			</nav>
		</div>
		<div class="credits fadeIn-element">
			<a class="toggle-credits-content">{{ $setup->content_r }}</a>
		</div>
	</div>

	<div class="border-bottom bottom-position">
		<marquee scrollamount="1" scrolldelay="1" width="100%">
			<font font size="4"> {{ $setup->running_text }} </font>
		</marquee>
		<center> <a href="#"> {{ $setup->footer }} </a> </center>
	</div>

	<div id="containerOT">
		<div class="hero-fullscreen">
			<div class="hero-bg">
				<div class="swiper-container swiper-slider-top-thumbs-vertical">
					<div class="swiper-wrapper" style="background-color: #fff">
						@foreach ( $slide2 as $item )
						<div class="swiper-slide overlay cover-all" style="background-image: url('EXILEDNONAME/files/{{ $item->file }}')"></div>
						@endforeach
					</div>
					<div class="swiper-button-next swiper-button-white"></div>
					<div class="swiper-button-prev swiper-button-white"></div>
				</div>

				<div class="swiper-container swiper-slider-bottom-thumbs-vertical" style="background-color: #fff">
					<div class="swiper-wrapper">
						@foreach ( $slide2 as $item )
						<div class="swiper-slide" style="background-image: url('EXILEDNONAME/files/{{ $item->file }}')"></div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
	<script src="/themes/frontend/main/plugins.js" type="text/javascript"></script>
	<script src="/themes/frontend/main/exilednoname.js" type="text/javascript"></script><!-- scripts end -->

	<script>
	// AUTO REFRESH FOOTER LINES
	setInterval(
		function() {
			$.get("/themes/frontend/datetime.php", function(Jam) {
				var xJam = Jam;
				var x = document.getElementById('time');
				x.innerHTML = xJam;
			});
		} ,
		1000
	);
	</script>
</body>
</html>
