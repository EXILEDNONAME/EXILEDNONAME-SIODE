jQuery(document).ready(function($){
	"use strict";

	if ( $('body').hasClass('rightclick-block') ) {
		$(window).on("contextmenu", function(b) {
		    if (3 === b.which) {
		    	showCopyright();
		    	return false;
		    }
		});
	}
	function showCopyright() {
	    $("#dimmer").fadeIn();
	    $("#dimmer").click(function(b) {
	        $(this).fadeOut();
	    });
	}

	$(".modal-trigger-button").live('click',function () {
		var modal_display = $(this).data('modalid');
		displayModal(modal_display);
	});

	function displayModal(modal_id) {
		var modal_id_display = "#" + modal_id;
	    $( modal_id_display ).fadeIn( "fast", function() {
			// Animation complete
			$(modal_id_display).find('.md-modal').addClass('md-show');
		});
	    $('body').addClass('modal-active');
	    $( '.modal-close-button' ).click(function(b) {
	        $(modal_id_display).fadeOut();
	    	$('body').removeClass('modal-active');
	    	$(modal_id_display).find('.md-modal').removeClass('md-show');
	    });
	}

	Pace.on('done', function() {
		$('.pace').fadeOut( "slow", function() {
		    $('.pace').remove();
		});
		$('.woocommerce span.onsale,.woocommerce-page span.onsale').delay(500).fadeIn( "slow" );
		$('.preloader-cover-screen').remove();
	});

	var deviceAgent = navigator.userAgent.toLowerCase();
	var isIOS = deviceAgent.match(/(iphone|ipod|ipad)/);
	var ua = navigator.userAgent.toLowerCase();
	var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
	var curr_menu_item;
	var percent;

	function mobilecheck() {
		var check = false;
		(function(a){if(/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
		return check;
	}

	function centerLogo() {
		var countMenuParents = $(".homemenu ul.sf-menu > li").length;
		if (countMenuParents != 0) {
			if (countMenuParents>1) {
				var centerChild = Math.floor(countMenuParents / 2);
			} else {
				centerChild = 1;
			}
			var center_logo = $('body.middle-logo');
			if ( center_logo.length ) {
				$( ".header-logo-section" ).detach().insertAfter('.homemenu ul.sf-menu > li:nth-child('+centerChild+')');
				$( ".header-logo-section" ).wrap( '<li id="header-logo"></li>' );
			}
		}
		//console.log(centerChild);
	}
	centerLogo();

	$(".vertical-menu").niceScroll({
		cursorwidth:4,
		cursorborder:0,
		cursorcolor:"#777777",
		touchbehavior: false,
		autohidemode: true
	});

	function contain_video_fullscreen() {
		var fullscreen_window_width = $(window).width();

		var fullscreen_width = fullscreen_window_width;
		var fullscreen_header_height = $('.outer-wrap').outerHeight() + 5;
		if ($('.fullscreen-footer-wrap').length) {
			var fullscreen_footer_height = $('.fullscreen-footer-wrap').outerHeight();
		} else {
			var fullscreen_footer_height = 0;
		}
		var fullscreen_outer = fullscreen_header_height + fullscreen_footer_height + 5;
		var fullscreen_height = $( window ).height() - fullscreen_outer;

		if ($('body').hasClass('boxed-site-layout')) {
			fullscreen_width = fullscreen_window_width - 110;
			$('#fullscreenvimeo').css('left','55px');
		}

		if (fullscreen_window_width < 1025 ) {
			fullscreen_header_height = $('.mobile-menu-toggle').outerHeight();
			fullscreen_outer = fullscreen_header_height + fullscreen_footer_height;

			fullscreen_height = $( window ).height() - fullscreen_outer;
			if ($('body').hasClass('boxed-site-layout')) {
				$('#fullscreenvimeo').css('left','0');
			}
			fullscreen_width = '100%';
		}
		if ( $('body').hasClass('menu-is-vertical') ) {
			var vertical_menu_width = $('.vertical-menu').width();
			if (fullscreen_window_width < 1025 ) {
				fullscreen_width = '100%';
			} else {
				fullscreen_width = fullscreen_window_width - vertical_menu_width;
			}
		}
		if ($('body').hasClass('fullscreen-mode-on')) {
			fullscreen_height = '100%';
			fullscreen_header_height = 0;
			fullscreen_width = '100%';
			$('#fullscreenvimeo').css('left','0');
		}

		if ( $('body').hasClass('fullscreen-video-type-vimeo') ) {
			$('#fullscreenvimeo').css('top',fullscreen_header_height);
			$('#fullscreenvimeo').css('height',fullscreen_height);
			$('#fullscreenvimeo').css('width',fullscreen_width);
		}
	}
	contain_video_fullscreen();

	function fotoramaResizer() {
		if ($.fn.fotorama) {

			var fotorama_window_width = $(window).width();

			if ( $('body').hasClass('menu-is-vertical') ) {
				if (fotorama_window_width < 1025 ) {
					$('#fotorama-container-wrap').addClass('fotorama-fullwidth');
				} else {
					$('#fotorama-container-wrap').removeClass('fotorama-fullwidth');
				}
			}

			$('.fotorama').data('fotorama').destroy();

			var fotorama_width = fotorama_window_width;
			var fotorama_header_height = $('.outer-wrap').outerHeight() + 5;
			var fotorama_footer_height = $('.fullscreen-footer-wrap').outerHeight();
			var fotorama_outer = fotorama_header_height + fotorama_footer_height + 5;
			var fotorama_height = $( window ).height() - fotorama_outer;

			if ($('body').hasClass('fotorama-style-contain')) {
				if ($('body').hasClass('boxed-site-layout')) {
					fotorama_width = fotorama_window_width - 110;
					$('#fotorama-container-wrap').css('left','55px');
				}
				if (fotorama_window_width < 1025 ) {
					fotorama_header_height = $('.mobile-menu-toggle').outerHeight();
					fotorama_outer = fotorama_header_height + fotorama_footer_height;

					fotorama_height = $( window ).height() - fotorama_outer;
					$('#fotorama-container-wrap').css('left','0');
					fotorama_width = '100%';
				}
			} else {
				fotorama_height = '100%';
				fotorama_header_height = 0;
				fotorama_width = '100%';
			}

			if ($('body').hasClass('fullscreen-mode-on')) {
				fotorama_height = '100%';
				fotorama_header_height = 0;
				fotorama_width = '100%';
				$('#fotorama-container-wrap').css('left','0');
			}

			$('#fotorama-container-wrap').css('top',fotorama_header_height);
			$('.fotorama').fotorama({
				height: fotorama_height,
				width: fotorama_width
			});
		}
	}

	$(window).resize(function() {
		fotoramaResizer();
		contain_video_fullscreen();
	});
	if ($.fn.fotorama) {

		var fotorama_window_width = $(window).width();

		if ( $('body').hasClass('menu-is-vertical') ) {
			if (fotorama_window_width < 1025 ) {
				$('#fotorama-container-wrap').addClass('fotorama-fullwidth');
			} else {
				$('#fotorama-container-wrap').removeClass('fotorama-fullwidth');
			}
		}

		var fotorama_width = fotorama_window_width;
		var fotorama_header_height = $('.outer-wrap').outerHeight() + 5;
		var fotorama_footer_height = $('.fullscreen-footer-wrap').outerHeight();
		var fotorama_outer = fotorama_header_height + fotorama_footer_height + 5;
		var fotorama_height = $( window ).height() - fotorama_outer;

		if ($('body').hasClass('fullscreen-mode-on')) {
			fotorama_height = '100%';
			fotorama_header_height = 0;
			fotorama_width = '100%';
		}

		if ($('body').hasClass('fotorama-style-contain')) {
			if ($('body').hasClass('boxed-site-layout')) {
				fotorama_width = fotorama_window_width - 110;
				$('#fotorama-container-wrap').css('left','55px');
			}
			if (fotorama_window_width < 1025 ) {
				fotorama_header_height = $('.mobile-menu-toggle').outerHeight();
				fotorama_outer = fotorama_header_height + fotorama_footer_height;

				fotorama_height = $( window ).height() - fotorama_outer;
				$('#fotorama-container-wrap').css('left','0');
				fotorama_width = '100%';
			}
		} else {
			fotorama_height = '100%';
			fotorama_header_height = 0;
			fotorama_width = '100%';
		}
		$('#fotorama-container-wrap').css('top',fotorama_header_height);
		$('.fotorama').fotorama({
			height: fotorama_height,
			width: fotorama_width
		});
	}

	// Fullscreen Toggle
	var events_toggle_element = $('.mtheme-events-carousel');
	var fullscreen_toggle_elements = $(".container-outer,.single-mtheme_photostory .portfolio-nav-wrap,.vertical-left-bar,.vertical-right-bar,#slidecaption,#static_slidecaption,.tp-bullets,#copyright,.edit-entry,.stickymenu-zone,.social-toggle-wrap,.fullscreen-footer-wrap,.toggle-menu,.page-is-not-fullscreen .container-wrapper");
	var reverse_switch_elements = $('.background-slideshow-controls');
	var slideshow_caption = $('#static_slidecaption,#slidecaption');
	//Sidebar toggle function
	$(".fullscreen-toggle-off").live('click',function () {

		$('.mtheme-fullscreen-toggle').removeClass('fullscreen-toggle-off').addClass('fullscreen-toggle-on');
		$('body').removeClass('fullscreen-mode-off').addClass('fullscreen-mode-on');
		if ( $('body').hasClass('has-fullscreen-eventbox') ) {
			$('body').removeClass('has-fullscreen-eventbox').addClass('fullscreen-eventbox-inactive').addClass('fullscreen-eventbox-switched');
		}
		$('.mtheme-fullscreen-toggle').find('i').removeClass('fa-expand').addClass('fa-compress');

		events_toggle_element.addClass('mtheme-events-offscreen');
		fullscreen_toggle_elements.fadeOut();
		reverse_switch_elements.fadeIn();

		fotoramaResizer();
		contain_video_fullscreen();

	});

	//Sidebar toggle function
	$(".fullscreen-toggle-on").live('click',function () {

		$('.mtheme-fullscreen-toggle').removeClass('fullscreen-toggle-on').addClass('fullscreen-toggle-off');
		$('body').removeClass('fullscreen-mode-on').addClass('fullscreen-mode-off');
		if ( $('body').hasClass('fullscreen-eventbox-switched') ) {
			$('body').addClass('has-fullscreen-eventbox').removeClass('fullscreen-eventbox-inactive').removeClass('fullscreen-eventbox-switched');
		}

		events_toggle_element.removeClass('mtheme-events-offscreen');
		fullscreen_toggle_elements.fadeIn();
		reverse_switch_elements.fadeOut();

		$('.mtheme-fullscreen-toggle').find('i').addClass('fa-expand').removeClass('fa-compress');

		var $filterContainer = $('#gridblock-container');
        if ($.fn.isotope) {
        	$filterContainer.isotope( 'layout' );
    	}
    	fotoramaResizer();
    	contain_video_fullscreen();
	});

	// One page menu scrolls
	var thebody = $('html, body');
	var one_page_adjust = 75;
	if ( $('body').hasClass('menu-is-vertical') ) {
		var one_page_adjust = -1;
	}
	if ($(".responsive-menu-wrap:visible").length) {
		var one_page_adjust = 53;
	}
	$('.menu-item a[href*=\\#],.rev_slider_wrapper a[href*=\\#]').click(function(){
		var onepage_url = $(this).attr('href');
		var onepage_hash = '#' + onepage_url.substring(onepage_url.indexOf("#")+1);

		thebody.animate({
		    scrollTop: $( onepage_hash ).offset().top - one_page_adjust
		},{
	        duration: 1700,
	        easing: "easeInOutExpo"
	    });
		$('body').removeClass('body-dashboard-push-left');
		$(".responsive-mobile-menu").removeClass('menu-push-onscreen');
		$("body").removeClass('menu-is-onscreen');
		$(".responsive-mobile-menu").hide();
		$('.mobile-menu-icon-toggle').addClass('feather-icon-menu').removeClass('feather-icon-cross');
		return false;
	});
	if(window.location.hash) {
		var onepage_hash = '#' + window.location.hash.substring(1);
		thebody.animate({
		    scrollTop: $( onepage_hash ).offset().top - one_page_adjust
		},{
	        duration: 1700,
	        easing: "easeInOutExpo"
	    });
	}

	$(".service-column.alignicon-top-horizontal").hover(
	function () {
		var iconcolor = $(this).find('.service-icon').attr('data-iconcolor');
		var bgcolor = $(this).find('.service-icon').attr('data-bgcolor');
		console.log(iconcolor);
		$(this).find('.service-icon').find('.fontawesome').css('color', bgcolor);
		$(this).find('.service-icon').find('.fontawesome').css('background-color', iconcolor);
	},
	function () {
		var iconcolor = $(this).find('.service-icon').attr('data-iconcolor');
		var bgcolor = $(this).find('.service-icon').attr('data-bgcolor');
		console.log(iconcolor);
		$(this).find('.service-icon').find('.fontawesome').css('background-color', bgcolor);
		$(this).find('.service-icon').find('.fontawesome').css('color', iconcolor);
	});

    function html5_resizer() {
		$('.photocard-video').each(function(){
	        var width = $(this).width();
			var ratio = 16/9;
			var pWidth; // player width, to be defined
			var	height = $(this).height();
			var	pHeight; // player height, tbd
			var	videojs_container = $(this).find('#photocardvideo');
	            //console.log(width);
	        // when screen aspect ratio differs from video, video must center and underlay one dimension

	        if (width / ratio < height) { // if new video height < window height (gap underneath)
	            pWidth = Math.ceil(height * ratio); // get new player width
	            videojs_container.width(pWidth).height(height).css({left: (width - pWidth) / 2, top: 0}); // player width is greater, offset left; reset top
	        } else { // new video width < window width (gap to right)
	            pHeight = Math.ceil(width / ratio); // get new player height
	            videojs_container.width(width).height(pHeight).css({left: 0, top: (height - pHeight) / 2}); // player height is greater, offset top; reset left
	        }
		});
    }
    // events
    $(window).resize(function() {
        html5_resizer();
    });
    html5_resizer();

	// Hero image
	var document_height = $( window ).height();
	var document_width = $( window ).width();
	$(".heroimage-wrap").height(document_height);

	var header_height = $(".outer-wrap").outerHeight() * -1;
	console.log(header_height);
	if (header_height!==0) {
		// $("#heroimage1").css("marginTop",header_height);
	}
	$(window).resize(function() {

		document_height = $( window ).height();

		if ( $(".outer-wrap").is(":visible") ) {
			// header_height = $(".'.esc_js($offsetclass).'").outerHeight() * -1;
			// $("#heroimage1").css({"marginTop":header_height,"background-size":"cover"});
		} else {
			$("#heroimage").css({"marginTop":"0","background-size":"cover"});
		}
		$(".heroimage-wrap").height(document_height);
	});


	// Slideshow Hero titles
    var slidetext = $(".hero-text-wrap ul li");
    var slideIndex = -1;

    function showNextHeroText() {
        slideIndex++;
        slidetext.eq(slideIndex % slidetext.length)
            .fadeIn(2000)
            .delay(2000)
            .fadeOut(2000, showNextHeroText);
    }
    if ( $(".hero-text-wrap ul").hasClass("slideshow") ) {
    	showNextHeroText();
	}

	$('.hero-link-to-base').live("click", function(){
		//dashboard toggle
		var scrollelement = $(this).closest('.heroimage-wrap');
		var fromtop = scrollelement.offset().top;
		var scrolltobase = scrollelement[0].scrollHeight + fromtop;
		$('body,html').animate({
			scrollTop: scrolltobase
		}, 800);
	});
	$('.hero-demo-to-base').live("click", function(){
		//dashboard toggle
		var demoelement = $('.hero-linked-demo');
		var fromtop = demoelement.offset().top;
		var demoscrolltobase = demoelement[0].scrollHeight + fromtop;
		$('body,html').animate({
			scrollTop: demoscrolltobase
		}, 800);
	});
	$('.hero-demo-to-base2').live("click", function(){
		//dashboard toggle
		var demoelement = $('.hero-linked-demo2');
		var fromtop = demoelement.offset().top;
		var demoscrolltobase = demoelement[0].scrollHeight + fromtop;
		$('body,html').animate({
			scrollTop: demoscrolltobase
		}, 800);
	});
	// Hero image End
	$('.single-mtheme_portfolio #sidebar,.single-mtheme_portfolio .portfolio-details-section')
		.theiaStickySidebar({
			additionalMarginTop: 100,
			minWidth: 768
	});

	if (isIOS || isAndroid) {
		$('.fullpage-block,.title-container-wrap').css('background-attachment','scroll');
	}
	$('.side-dashboard-toggle').live("click", function(){
		//dashboard toggle
		$('body').toggleClass('body-dashboard-push-right');
		$('.side-dashboard-wrap').toggleClass('dashboard-push-onscreen');
	});
	$(".mobile-menu-icon").click(function(){
		//mobile menu
		$('body').toggleClass('body-dashboard-push-left');
		$('.mobile-menu-icon-toggle').toggleClass('feather-icon-menu').toggleClass('feather-icon-cross');
		$('.responsive-mobile-menu').toggle( 10, function() {
			$(".responsive-mobile-menu").toggleClass('menu-push-onscreen');
			$("body").toggleClass('menu-is-onscreen');
		});
	});
	$('.container-wrapper').click(function(){
		//Reset dashboard
		$('body').removeClass('body-dashboard-push-right');
		$('.side-dashboard-wrap').removeClass('dashboard-push-onscreen');
		//reset mobile menu
		$('body').removeClass('body-dashboard-push-left');
		$(".responsive-mobile-menu").removeClass('menu-push-onscreen');
		$("body").removeClass('menu-is-onscreen');
		$(".responsive-mobile-menu").hide();
		$('.mobile-menu-icon-toggle').addClass('feather-icon-menu').removeClass('feather-icon-cross');
	});

    $(window).resize(function() {
		$(".woocommerce-product-gallery__image").css('min-height','0');
    });

	if (isIOS || isAndroid) {
		$('.fullpage-block').css('background-attachment','scroll');
	}

	$(".ntips").tooltip({
		position: {
			my: "center bottom+40",
			at: "center bottom"
		},
		show: {
		effect: "fade",
		delay: 5
		}
	});
	$(".stips").tooltip({
		position: {
			my: "center top",
			at: "center top"
		},
		show: {
		effect: "fade",
		delay: 5
		}
	});

	// Detect Search Toggle and ESC

	// Open
	$('.header-search').live("click", function(){
		$('body').toggleClass('msearch-is-on');
		$('#header-search-bar-wrap').fadeIn();
		$( "#hs" ).focus();
	});

	if ( $('body').hasClass('error404') ) {
		$( "#s" ).focus();
	}

	// Close
	$('.header-search-close,#header-search-bar-wrap').live("click", function(){
		if ( $('body').hasClass('msearch-is-on') ) {
			$('body').toggleClass('msearch-is-on');
			$('#header-search-bar-wrap').fadeOut();
		}
	});
	$('.header-search-bar').click(function(event){
    	event.stopPropagation();
	});

	// Watch for ESC Key
	$('body').keyup(function(e){
	    //alert(e.keyCode);
	    if(e.keyCode == 27){
	        // Close my modal window
	        if ( $('body').hasClass('msearch-is-on') ) {
		        $('body').toggleClass('msearch-is-on');
		        $('#header-search-bar-wrap').fadeOut();
	    	}
	    }
	});

	// end block of search toggle

	$(".fitVids").fitVids();

	if ($.fn.superfish) {
		$('.homemenu ul.sf-menu').superfish({
			animation:     {opacity:'show'},   // an object equivalent to first parameter of jQueryâ€™s .animate() method. Used to animate the submenu open
	  		animationOut:  {opacity:'hide'}, // fade-in and slide-down animation
			speed:         'normal',
			speedOut:      'fast',
			disableHI:     true,
			delay: 		100,
			autoArrows:  true,
			dropShadows: true,
			onInit: function(){
				$(".homemenu .sf-menu .mega-item .children-depth-0").css('display','none');
				},
			onHide: function(){
				},
			onShow: function(){
				},
			onBeforeShow: function(){
				},
			onBeforeHide: function(){
				}
		});
	}

	$('.support-user-options-trigger').live("click", function(){
		$('.support-user-options-wrap').removeClass('support-monitor-active');
	});

	//Portfolio Hover effects
	$(".gototop,.hrule.top a").click(function(){
		$('html, body').animate({scrollTop:0}, 'slow');
		return false;
	});

	// Responsive dropdown list triggered on Mobile platforms
    $('#top-select-menu').bind('change', function () { // bind change event to select
        var url = $(this).val(); // get selected value
        if (url != '') { // require a URL
            window.location = url; // redirect
        }
        return false;
    });

	//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
	$(".toggle-shortcode").click(function(){
		$(this).toggleClass("active").next().slideToggle("fast");
		return false;
	});

	// Faq toggle shortcode
	$(".faq-toggle-shortcode-wrap").click(function(){
		$(this).toggleClass("active").find('a.faq-toggle-link').next().slideToggle("fast");
		return false;
	});

	$(".fotorama").hover(
	function () {
		$('.fotorama__nav-wrap').fadeIn();
	},
	function () {
		$('.fotorama__nav-wrap').fadeOut();
	});

	$(".service-item").hover(
	function () {
		$(this).children('.icon-large').animate({
			top:-10
		},300);
	},
	function () {
		$(this).children('.icon-large').animate({
			top:0
		},300);
	});

	$("#main-gridblock-carousel .preload").hover(
	function () {
	  $(this).stop().fadeTo("fast", 0.6);
	},
	function () {
	  $(this).stop().fadeTo("fast", 1);
	});

	$(".gridblock-image-holder").hover(
	function () {
	  $(this).stop().fadeTo("fast", 0.6);
	},
	function () {
	  $(this).stop().fadeTo("fast", 1);
	});

	$(".thumbnail-image").hover(
	function () {
	  $(this).stop().fadeTo("fast", 0.6);
	},
	function () {
	  $(this).stop().fadeTo("fast", 1);
	});

	$(".pictureframe").hover(
	function () {
	  $(this).stop().fadeTo("fast", 0.6);
	},
	function () {
	  $(this).stop().fadeTo("fast", 1);
	});

	$(".filter-image-holder").hover(
	function () {
	  $(this).stop().fadeTo("fast", 0.6);
	},
	function () {
	  $(this).stop().fadeTo("fast", 1);
	});

	$("#popularposts_list li:even,#recentposts_list li:even").addClass('even');
	$("#popularposts_list li:odd,#recentposts_list li:odd").addClass('odd');

	$(".close_notice").click(function(){
	  	$(this).parent('.noticebox').slideUp('fast');
	});

	if ($.fn.waypoint) {

		//Skill Bar
		$('.skillbar').waypoint(function() {
			$('.skillbar').each(function(){
				percent = $(this).attr('data-percent');
				$(this).find('.skillbar-bar').animate({ 'width' : percent + '%' }, 3000, 'easeInOutExpo').addClass('progressed');
			});
		}, { offset: '90%' });

		$('.animation-standby').waypoint(function() {
			$(this).removeClass('animation-standby').addClass('animation-action');
		}, { offset: '90%' });

		$('.is-animated').waypoint(function() {
			$(this).removeClass('is-animated').addClass('element-animate');
		}, { offset: '90%' });
	}

	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#goto-top').fadeIn();
			} else {
				$('#goto-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#goto-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
	$('.pricing-column ul').each(function(e){
		$(this).find('li:even').addClass('even');
		$(this).find('li:odd').addClass('odd');
	});

	// WooCommerce Codes
	// Thumnail hover for secondary image

	var header_cart_toggle = $('.header-cart-toggle');
	var header_cart_off = $('.header-cart-close');

	header_cart_toggle.live("click", function(){
		$('.mtheme-header-cart').fadeToggle();
	});
	$('.header-cart-close').live("click", function(){
		$('.mtheme-header-cart').fadeOut();
	});
	$('.container-wrapper').click(function(event){
    	$('.mtheme-header-cart').fadeOut();
	});
	$('.mtheme-header-cart').mouseleave(function() {
		$(this).fadeOut();
	});

	var woocommerce_active = $('body.woocommerce');
	if ( woocommerce_active.length ) {
		// $( 'ul.products li' ).hover( function() {
		// 	$( this ).find( '.mtheme-woocommerce-description' ).slideDown('fast');
		// }, function() {
		// 	$( this ).find( '.mtheme-woocommerce-description' ).slideUp('fast');
		// });
		$( 'ul.products li.mtheme-hover-thumbnail' ).hover( function() {
			var woo_secondary_thumnail = $(this).find( '.mtheme-secondary-thumbnail-image' ).attr('src');
			if( woo_secondary_thumnail !== undefined ) {
				console.log(woo_secondary_thumnail);
				$( this ).find( '.wp-post-image' ).removeClass( 'woo-thumbnail-fadeInDown' ).addClass( 'woo-thumbnail-fadeOutUp' );
				$( this ).find( '.mtheme-secondary-thumbnail-image' ).removeClass( 'woo-thumbnail-fadeOutUp' ).addClass( 'woo-thumbnail-fadeInDown' );
			}
		}, function() {
			var woo_secondary_thumnail = $(this).find( '.mtheme-secondary-thumbnail-image' ).attr('src');
			if( woo_secondary_thumnail !== undefined ) {
				$( this ).find( '.wp-post-image' ).removeClass( 'woo-thumbnail-fadeOutUp' ).addClass( 'woo-thumbnail-fadeInDown' );
				$( this ).find( '.mtheme-secondary-thumbnail-image' ).removeClass( 'woo-thumbnail-fadeInDown' ).addClass( 'woo-thumbnail-fadeOutUp' );
			}
		});


		var woocommerce_ordering = $(".woocommerce-page .woocommerce-ordering select");
		if ( (woocommerce_ordering).length ) {
			var woocommerce_ordering_curr = $(".woocommerce-ordering select option:selected").text();
			var woocommerce_ordering_to_ul = woocommerce_ordering
				.clone()
				.wrap("<div></div>")
				.parent().html()
				.replace(/select/g,"ul")
				.replace(/option/g,"li")
				.replace(/value/g,"data-value");

			$( '.woocommerce-ordering' )
			.prepend( '<div class="mtheme-woo-order-selection-wrap"><div class="mtheme-woo-order-selected-wrap"><span class="mtheme-woo-order-selected">'+woocommerce_ordering_curr+'</span><i class="woo-sorter-dropdown feather-icon-layers"></i></div><div class="mtheme-woo-order-list">' + woocommerce_ordering_to_ul + '</div></div>' );
		}

		$(function(){
			//$('.woocommerce-page .woocommerce-ordering select').hide();
		    $('.mtheme-woo-order-selected-wrap').click(function(){
		        $('.mtheme-woo-order-list ul').slideToggle('fast');
		        $('.woo-sorter-dropdown').toggleClass('feather-icon-layers').toggleClass('feather-icon-cross');
		    });
		    $('.mtheme-woo-order-list ul li').click(function(e){
		    	//Set value
		    	 var selected_option = $(this).data('value');
		         $(".woocommerce-page .woocommerce-ordering select").val(selected_option).trigger('change');

		         $('.mtheme-woo-order-selected').text($(this).text());
		         $('.mtheme-woo-order-list').slideUp('fast');
		        $(this).addClass('current');
		        e.preventDefault();
		    })
		});
	}

});

//
(function($){
$(window).load(function(){

	var deviceAgent = navigator.userAgent.toLowerCase();
	var isIOS = deviceAgent.match(/(iphone|ipod|ipad)/);
	var ua = navigator.userAgent.toLowerCase();
	var isAndroid = ua.indexOf("android") > -1;

	// if ( $('body').hasClass('pace-done') ) {
	// 	$('.pace').remove();
	// } else {
	// 	$('body').addClass('pace-done').removeClass('pace-running');
	// 	$('.preloader-cover-screen').remove();
	// 	$('.pace').fadeOut( "slow", function() {
	// 	    $('.pace').remove();
	// 	});
	// }

    if ( isIOS || isAndroid ) {
    	// for mobile
    } else {
	    $.stellar({
	        horizontalScrolling: false,
	        parallaxBackgrounds: true,
	        verticalOffset: 0,
	        responsive: true
		});
		$(document).on('lazyloaded', function(e){
			$(window).data('plugin_stellar').refresh();
		});
	}

	var sync1 = $("#owl-woocommerce-slideshow");
	var sync2 = $("#owl-woocommerce-slideshow-thumbnails");

		 function center(number) {
		     var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
		     var num = number;
		     var found = false;
		     for (var i in sync2visible) {
		         if (num === sync2visible[i]) {
		             var found = true;
		         }
		     }

		     if (found === false) {
		         if (num > sync2visible[sync2visible.length - 1]) {
		             sync2.trigger("owl.goTo", num - sync2visible.length + 2)
		         } else {
		             if (num - 1 === -1) {
		                 num = 0;
		             }
		             sync2.trigger("owl.goTo", num);
		         }
		     } else if (num === sync2visible[sync2visible.length - 1]) {
		         sync2.trigger("owl.goTo", sync2visible[1])
		     } else if (num === sync2visible[0]) {
		         sync2.trigger("owl.goTo", num - 1)
		     }
		 }

		 function syncPosition(el) {
		     var current = this.currentItem;
		     $("#owl-woocommerce-slideshow-thumbnails")
		         .find(".owl-item")
		         .removeClass("synced")
		         .eq(current)
		         .addClass("synced")
		     if ($("#owl-woocommerce-slideshow-thumbnails").data("owlCarousel") !== undefined) {
		         center(current)
		     }
		 }

	if (sync1.length) {
		 sync1.owlCarousel({
		     singleItem: true,
		     slideSpeed: 1000,
		     navigation: true,
		     autoHeight: true,
		     pagination: false,
		     transitionStyle : "fade",
		     afterAction: syncPosition,
		     navigationText : ["",""],
		     responsiveRefreshRate: 200,
		 });
		 sync2.owlCarousel({
		     items: 8,
		     itemsDesktop: [1199, 10],
		     itemsDesktopSmall: [979, 10],
		     itemsTablet: [768, 8],
		     itemsMobile: [479, 4],
		     pagination: false,
		     responsiveRefreshRate: 100,
		     afterInit: function(el) {
		         el.find(".owl-item").eq(0).addClass("synced");
		     }
		 });



		 $("#owl-woocommerce-slideshow-thumbnails").on("click", ".owl-item", function(e) {
		     e.preventDefault();
		     var number = $(this).data("owlItem");
		     sync1.trigger("owl.goTo", number);
		 });


		$("#owl-woocommerce-slideshow-thumbnails").owlCarousel({
			itemsCustom : [
				[0, 2],
				[500, 2],
				[700, 3],
				[1024, 4]
			],
			items: 4,
			navigation : false,
			navigationText : ["",""],
			scrollPerPage : false
		});
	}

})
})(jQuery);
