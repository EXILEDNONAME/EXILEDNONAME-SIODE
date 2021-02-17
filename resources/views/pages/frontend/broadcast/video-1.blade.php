<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title> {{ $general->name }} </title>
  <link rel='stylesheet' id='MainStyle-css' href='/assets/frontend/broadcast/css/frontend/style.css' type='text/css' media='all' />
  <link rel='stylesheet' id='MainStyle-Light-css' href='/assets/frontend/broadcast/css/frontend/style-light.css' type='text/css' media='all' />
  <link rel="shortcut icon" href="/img/jasamarga-ico.png" width="15px" height="15px">
  <script type='text/javascript' src='/assets/frontend/broadcast/js/frontend/jquery.js'></script>
  <script type='text/javascript' src='/assets/frontend/broadcast/js/frontend/jquery-migrate.min.js'></script>
  <script type='text/javascript' src='/assets/frontend/broadcast/js/frontend/pace.min.js'></script>
  <script type="text/javascript" src="/assets/frontend/broadcast/js/frontend/jquery-1.4.2.min.js"></script>

  <style id='ResponsiveCSS-inline-css' type='text/css'>
  .logo img { width: 154px; }
  .logo img { top: 28px; }
  .page-id-8673
  .mtheme-fullscreen-toggle { display: none; }
  html { position:absolute;height:100%;width:100%;min-height:100%;min-width:100%; }
  body, #supersized li { background:; }
</style>
<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
</head>
<body class="mtheme_featured-template-default single single-mtheme_featured postid-7315 woocommerce-no-js single-author demo middle-logo page-is-fullscreen fullscreen-video-type-html5 fullscreen-video fullscreen-eventbox-inactive no-title-background theme-fullwidth body-dashboard-push footer-is-on">
  <div class="preloader-cover-screen"></div>
  <div id="home" class="container-wrapper container-fullwidth"><script>
  jQuery(document).ready(function($) {
    $(window).load(function() {
      "use strict";
      resizer();
      videojs.options.flash.swf = '/nas/content/live/imaginemthemes/wp-content/themes/kinetika/js/videojs/video-js.swf';
      videojs("videocontainer", {}, function(){ });
      videojs("videocontainer").ready(function(){
        var myPlayer = this;
        $('#videocontainer').click(function() {
          if ($('#videocontainer').hasClass('vjs-playing')) { myPlayer.pause(); }
          if ($('#videocontainer').hasClass('vjs-paused')) { myPlayer.play(); }
        });
      });
      function resizer() {
        var width = jQuery(window).width();
        var ratio = 16/9;
        var pWidth;
        var	height = jQuery(window).height();
        var	pHeight;
        var	videojs_container = jQuery('#backgroundvideo');
        console.log(width);
        if (width / ratio < height) {
          pWidth = Math.ceil(height * ratio);
          videojs_container.width(pWidth).height(height).css({left: (width - pWidth) / 2, top: 0});
        } else {
          pHeight = Math.ceil(width / ratio);
          videojs_container.width(width).height(pHeight).css({left: 0, top: (height - pHeight) / 2});
        }
      }
      $(window).resize(function() {
        resizer();
      });
    });
  });
  </script>

  <div id="backgroundvideo">
    @if ( count($video) != false )
    @foreach ( $video as $item )
    <video id="video" class="video-js vjs-default-skin" preload="auto" width="100%" src="/files/broadcast/video/{{ $item->file }}" autoplay></video>
    @endforeach
    @else
    <video id="video" class="video-js vjs-default-skin" preload="auto" width="100%" src="/404.mp4" autoplay muted></video>
    @endif
  </div>
</div>
<div class="contentclearfix clearfix"></div>
</div>

<script type='text/javascript' src='/assets/frontend/broadcast/js/frontend/js.cookie.min.js'></script>
<script type='text/javascript' src='/assets/frontend/broadcast/js/frontend/jquery.stellar.min.js'></script>
<script type='text/javascript' src='/assets/frontend/broadcast/js/frontend/common.js'></script>


<!-- VIDEO -->
<script type="text/javascript">
document.getElementById('video').addEventListener('ended',function(){
  window.location.href = '/broadcast/video-2';
},false);
</script>

</body>
