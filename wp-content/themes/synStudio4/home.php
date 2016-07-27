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
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.jcarousel.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slideShow.css" />

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

<div id="content" class="home"> <!-- content: start -->

	<?php while ( have_posts() ) : the_post(); ?>		 
	<?php echo "<h1>"; the_title(); echo "</h1>"; ?> 

	<div id="col1"> <!-- column 1: start!!! :) -->

		<div id="welcomeHero">
			
			<?php the_content(); ?>
 			<?php $postID = get_the_ID(); ?>
			
			<div id="slideshow-main">
				<ul></ul>										
			</div>
   
			<div id="slideshow-carousel">				
				<ul id="carousel" class="jcarousel jcarousel-skin-tango"></ul>
			</div>
			
		 	<script type="text/javascript">
		 		
		 		var startSlideNumber = 1;

		 		<?php
				/*	
					A loop field named "slider" with sub-fields "image, text1, text2 and so on"
				    It uses the Custom Field Suite (CFS) plugin's loop functionality.
				    Prints Javascript snippet for the slider code in next blocks of code.
				*/	
					if($currentLang=="en"){
						$fields = CFS()->get('slider');
					}
					else{
						$fields = CFS()->get('slider',$translationID);
					}
					$i=0;
					foreach ((array)$fields as $field) {
						$i++;
						echo "var slide".$i." = { \n";
					    echo "slideLarge:\"".$field['image'];
					    echo "\",\n";
					    if($field['small_image']==""){
					    	echo "slideSmall:\"".$field['image'];
						}
						else{
							echo "slideSmall:\"".$field['small_image'];
						}
					    echo "\",\n";		    
					    if($currentLang=="en"){
					    	echo "slideText1:\"".$field['text1'];
					    }
					    else{
					    	echo "slideText1:\"".$field['text2'];
					    }
					    echo "\",\n";
					    if($currentLang=="en" && $field['text3']!=""){
					    	echo "slideText2:\"&nbsp;&nbsp;Level <span class='Website-Body-Text-C0'>".$field['text3'];
					    }
					    elseif($currentLang=="fr" && $field['text3']=="General"){
					    	echo "slideText2:\"&nbsp;&nbsp;Niveau <span class='Website-Body-Text-C0'>GÉNÉRAL";
					    }
					    elseif($currentLang=="fr" && $field['text3']=="Special"){
					    	echo "slideText2:\"&nbsp;&nbsp;Niveau <span class='Website-Body-Text-C0'>SPÉCIAL";
					    }
					    elseif($currentLang=="fr" && $field['text3']=="Advanced"){
					    	echo "slideText2:\"&nbsp;&nbsp;Niveau <span class='Website-Body-Text-C0'>AVANCÉ";
					    }
					    elseif($field['text3']==""){
					    	if($currentLang=="en" || $currentLang=="fr"){
					    		echo "slideText2:\"<span class='Website-Body-Text-C0'>";
					    	}
					    }
					    else{
					    	echo "slideText2:\"&nbsp;&nbsp;Niveau <span class='Website-Body-Text-C0'>".$field['text3'];
					    }
					    echo "</span><span class='Website-Body-Text-C1'>".$field['text4'];
					    echo "</span>";
					    echo "\",\n";
					    if($currentLang=="en"){
					    	echo "slideLink:\"".$field['link'];
					    }
					    else{
					    	echo "slideLink:\"/fr".$field['link'];
					    }
					    echo "\",\n";				
					    echo "}; \n";
					}
				?>

				//Find out number of Slides
				var totalSlides2 = 0;
				<?php 
					for ( $countVble0 = 1; $countVble0 <= 50; $countVble0++) {
				 		echo "if( typeof slide".$countVble0." != 'undefined' ) {";
						echo "totalSlides2++;";
						echo "} else { }";
					}
				?>	
									
				for (var i2=startSlideNumber; i2<=totalSlides2; i2++) {
					//Items for Large Image
					if (i2==startSlideNumber) {
						var listItem = "<li class='p" + i2 + " active'><a href=''><img src='' width='545' height='342' alt=''/><span class='opacity'></span><span class='content'><h1></h1><p></p></span></a></li>";
					}
					else {
						var listItem = "<li class='p" + i2 + "'><a href=''><img src='' width='545' height='342' alt=''/><span class='opacity'></span><span class='content'><h1></h1><p></p></span></a></li>";
					}

					jQuery("#slideshow-main ul").append(listItem);
					
					//Items for Small Image
					var listItemSmall = "<li><a href='#' rel='p" + i2 + "'><img id='p" + i2 + "ImageSmall' src='' width='154' height='127' alt='#'/></a></li>";
					jQuery("#slideshow-carousel ul").append(listItemSmall);
				}

				//count array elements: start 	
				var arrayElements = "";
				for (var countVble=startSlideNumber; countVble<=totalSlides2; countVble++) {
					arrayElements = arrayElements + "var count"+countVble+" = 0;";
					arrayElements = arrayElements + "for (i in slide"+countVble+") {";
					arrayElements = arrayElements + "if (slide"+countVble+".hasOwnProperty(i)) {";
					arrayElements = arrayElements + "count"+countVble+"++;";
					arrayElements = arrayElements + "}";
					arrayElements = arrayElements + "}";
				}																									
				eval(arrayElements);
				//count array elements: end
										
				//Apply array values
				for (var i2=startSlideNumber; i2<=totalSlides2; i2++) {
					//var slideTest = "slide" + i2;
					//alert(slideTest);
					var builtSlide1 = "jQuery('.p" + i2 + " a').attr('href',slide" + i2 + ".slideLink); jQuery('.p" + i2 + " img').attr('src',slide" + i2 + ".slideLarge); jQuery('#p" + i2 + "ImageSmall').attr('src',slide" + i2 + ".slideSmall);";
					var builtSlide2 = " jQuery('.p" + i2 + " h1').append(slide" + i2 + ".slideText1); jQuery('.p" + i2 + " p').append(slide" + i2 + ".slideText2);";		
					var slideTest = "count" + i2;
					//alert(slideTest);
					if ((eval(slideTest)!=3)||eval(slideTest)!=2) {
						eval(builtSlide1)
						//eval(builtSlide2)			
						if (eval("slide" + i2 + ".slideText1")!="") {
							eval(builtSlide2)
						}
						else {
							var hideSection = " jQuery('.p" + i2 + " h1').css('display','none'); jQuery('.p" + i2 + " p').css('display','none');";
							eval(hideSection)
						}				
					}
					else {
						eval(builtSlide1)
						var hideSection = " jQuery('.p" + i2 + " h1').css('display','none'); jQuery('.p" + i2 + " p').css('display','none');";
						eval(hideSection)
					}
				}

			</script>

			<div class="clear"></div>

		</div>

		<?php
			if ($currentLang == "en") {
				echo "<a href='/classes/' class='lnk-homeFindMore'>Find out more about our classes</a>";
			}
			else {
				echo "<a href='/cours-arts/' class='lnk-homeFindMore'>Cliquez i&ccedil;i pour en savoir plus sur nos cours</a>";
			}   
		?>

	</div> <!-- column 1: end ^_^ -->
	
	<?php endwhile; // end of the loop. ?>

	<!-- column 2: all in this this function. File is sidebar.php -->
	<?php get_sidebar(); ?>

	<!-- column 3: start -->
	<div id="col3">

		<!-- Join Our Newsletter : start -->
		<?php
			$cat = 'General';
			$catID = get_cat_ID($cat);
			query_posts('cat=' . $catID);
			while (have_posts()) : the_post();
			$postID = get_the_ID();
			if ($postID = "145") {
				echo "<div id='newsletter-box' class='info-box1Wrapper'>";
					echo "<div class='info-box1'>";
						echo '<h2>' . get_the_title() . '</h2>';
						echo "<div class='text'>";
							the_excerpt();
							the_content();
						echo "</div>";
					echo "</div>";
				echo "</div>";
			}
			endwhile;
		?>	<!-- Join Our Newsletter : end -->

		
		<div class="info-box1Wrapper"> <!-- Calendar : start -->
			<div class="info-box1">
				<?php
					if ($currentLang == "en") {
						echo "<h2>School Calendar</h2>";
					}
					else {
						echo "<h2>Calendrier</h2>";
					}   
				?>
			
				<div class="text">
					<?php 
						echo do_shortcode( '[gcal id="12028"]' );
						if ($currentLang == "en") { ?>
			 				<style type="text/css">.gce-list-event {display: block;}</style>
			 			<?php }
						else { ?>
			  				<style type="text/css">.gce-list-event {display: none;}</style>
			  			<?php }
					?> 
				</div>
			</div> 
		</div>
		<!-- Calendar : end -->

		<!-- Twitter : start -->
		<div class="info-box1Wrapper">
			<div class="info-box1">
				<h2>Twitter</h2>
				<ul style="padding-left:0px !important;">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</ul>
			</div> 
		</div>
		<!-- Twitter : end -->

		<!-- Syn Studio Blog : start -->
		<div class="info-box1Wrapper">
			<div class="info-box1">			
   			<?php
				if ($currentLang == "en") {  ?>	
					<h2>Latest from our blog</h2>
					<div class="text">
						<ul style="margin-left: 4px;">	
						<?php dynamic_sidebar( 'sidebar' );
				}
				else { ?>
					<h2>Dernièrement sur le blog</h2>
					<div class="text">
						<ul style="margin-left: 4px;">	
						<?php 
						//need to add feed manually because the widget is not loading in FR.
							echo "<li class='widget widget_rss' id='rss-2'><ul>";
			 				if(function_exists('fetch_feed')) {
								include_once(ABSPATH . WPINC . '/feed.php'); // the file to rss feed generator
								$feed = fetch_feed('http://blog.synstudio.ca/?feed=rss2'); // specify the rss feed
								$limit = $feed->get_item_quantity(3); // specify number of items
								$items = $feed->get_items(0, $limit); // create an array of items
							}
							if ($limit == 0) echo '<div>The feed is either empty or unavailable.</div>';
							else foreach ($items as $item) : ?>
								<!-- The actual output-->
								<li><a href="<?php echo $item->get_permalink(); ?>" alt="<?php echo $item->get_title(); ?>"><?php echo $item->get_title(); ?></a>
									<span class="rss-date"><?php echo $item->get_date('F j, Y'); ?></span>
	  							</li>
								<?php //echo substr($item->get_description(), 0, 200); ?> 
							<?php endforeach; ?>
							<?php
							echo "</ul></li>"; 
							} ?>   
						</ul>
					</div>
					</div> 
			</div>
		<!-- </div> there is a big confusion over the ending divs, this should be there normally but commented to preserve the layout -->
		<!--Old custom fields...in case homepage breaks. <?php // echo get_post_meta('9', 'homeInfoBoxes_' . $currentLang , true); ?> -->
		
		<!-- Newsbox & Job Board / home info boxes : start -->
		<div class="info-box1Wrapper">
			<div class="info-box1">
				<?php
					if($currentLang=="en"){ ?>
						<h2>News</h2>
						<div><?php echo get_post_meta('9', 'news_en', true); ?></div>
					<?php } else{ ?>
						<h2>Nouvelles</h2>
						<div><?php echo get_post_meta('11013', 'news_fr', true); ?></div>
					<?php }
				?>
				
			</div>
		</div>

		<div class="info-box1Wrapper">
			<div class="info-box1">
				<?php
					if($currentLang=="en"){?>
						<h2>Jobs</h2>
						<div><?php echo get_post_meta('9', 'jobs_en', true); ?></div>
					<?php } 
					else{ ?>
						<h2>Emplois</h2>
						<div><?php echo get_post_meta('11013', 'jobs_fr', true); ?></div>
					<?php }
				?>
			</div>
		</div>
		
	 	<!-- Newsbox & Job Board / home info boxes : end -->

	</div> <!-- column 3: end -->   	
</div> <!-- content: end -->

<style>
	.gce-url a { color: #ED780B; }
	.gce-list-event a {color: #ED780B;font-weight: bold; text-decoration: underline;}
</style>

<script>
	//function addCalendarLinks() {
		// $( "div.gce-list-event:contains('Drawing from Life Section D')" ).append( "<div class='gce-url'><a href='/drawing-from-life'>url</a></div>" );
		//$( "div.gce-list-event:contains('Drawing from Life Section D')" ).replaceWith("<div class='gce-list-event'><a href='/drawing-from-life'>Drawing from Life Section D</a></div>");
		//$( "div.gce-list-event:contains('Digital Painting')" ).replaceWith("<div class='gce-list-event'><a href='/digital-painting'>Digital Painting</a></div>");
		
	//}

	//$(document).ready(function () {
	//	addCalendarLinks();
	//});
</script>

<?php get_footer(); ?>