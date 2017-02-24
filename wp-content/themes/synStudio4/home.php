<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
/*
Template Name: Home Page
 */

get_header(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.jcarousel.pack.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slideshow.min.css" />

<?php
	$postID = get_the_ID();
	if (function_exists('pll_current_language')) { $currentLang = pll_current_language('slug'); }
	$translationID = pll_get_post($postID,'en');
	
	if ($currentLang == "en") {	?>
		<style type="text/css">
			.gce-description { display: none; }
		</style> <?	
	}
	else{ ?>
		<style type="text/css">
			.gce-list-event { display: none; }
		</style> <?	
	}
?>

<script type="text/javascript">
	jQuery(document).ready(function ($) {
		//jCarousel Plugin
		if($(window).width() < 768) {
	  		$('#carousel').jcarousel({
			horizontal: true,
			scroll: 1,
			auto: 2,
			wrap: 'last',
			//animation: 3,
			initCallback: mycarousel_initCallback
   			});	
		}
		else {
  			$('#carousel').jcarousel({
			vertical: true,
			scroll: 1,
			auto: 2,
			wrap: 'last',
			//animation: 3,
			initCallback: mycarousel_initCallback
   			});
		}

		//Front page Carousel - Initial Setup
	   	$('div#slideshow-carousel a img').css({'opacity': '0.5'});
	   	$('div#slideshow-carousel a img:first').css({'opacity': '1.0'});
	   	$('div#slideshow-carousel li a:first').append('<span class="arrow"></span>')

	  	//Combine jCarousel with Image Display
	    $('div#slideshow-carousel li a').hover(
	       	function () {       		
	       		if (!$(this).has('span').length) {
	        		$('div#slideshow-carousel li a img').stop(true, true).css({'opacity': '0.5'});
	   	    		$(this).stop(true, true).children('img').css({'opacity': '1.0'});
	       		}		
	       	},	
	       	function () {		
	       		$('div#slideshow-carousel li a img').stop(true, true).css({'opacity': '0.5'});
	       		$('div#slideshow-carousel li a').each(function () {
	       			if ($(this).has('span').length) $(this).children('img').css({'opacity': '1.0'});
	       		});	
	       	}
		)
		.click(function () {
		      	$('span.arrow').remove();        
				$(this).append('<span class="arrow"></span>');
	       		$('div#slideshow-main li').removeClass('active');        
	       		$('div#slideshow-main li.' + $(this).attr('rel')).addClass('active');	
	       		return false;
		});

		var slideshowItems = $("div#slideshow-main li").size();
		var r = 2;
		var slider = function() {
			$('div#slideshow-main li').removeClass('active');        
		    $('div#slideshow-main li.p' + r).addClass('active');		
						
			$('span.arrow').remove();        
			$('div#slideshow-carousel a img').css({'opacity': '0.5'});
		   	$('div#slideshow-carousel li.jcarousel-item-' + r + ' a img:first').css({'opacity': '1.0'});
			$('div#slideshow-carousel li.jcarousel-item-' + r + ' a:first').append('<span class="arrow"></span>')
						
			if (r<slideshowItems) {r = r + 1;} else {r = 1;}	
		};

		var interval = setInterval(slider, 5000);
						
		// when the user hovers in, clear the interval; if they hover out, restart it again
		$('#slideshow-carousel').hover(function() {
			clearInterval(interval);
		}, function() {
				interval = setInterval(slider, 5000);
			});

		});


	//Carousel Tweaking
	function mycarousel_initCallback(carousel) {
		// Pause autoscrolling if the user moves with the cursor over the clip.
		carousel.clip.hover(function() {
			carousel.stopAuto();
		}, function() {
			carousel.startAuto();
		});
	}
	
</script>

<?php get_footer(); ?>