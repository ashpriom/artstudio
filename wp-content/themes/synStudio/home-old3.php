<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
/*
Template Name: Home Page
 */
	
get_header();

?>

<script type="text/javascript" src="http://www.synstudio.ca/wp-content/themes/synStudio/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="http://www.synstudio.ca/wp-content/themes/synStudio/js/jquery.jcarousel.pack.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.synstudio.ca/wp-content/themes/synStudio/css/jquery.jcarousel.css" />
<link rel="stylesheet" type="text/css" href="http://www.synstudio.ca/wp-content/themes/synStudio/css/skin.css" />
<link rel="stylesheet" type="text/css" href="http://www.synstudio.ca/wp-content/themes/synStudio/css/slideShow.css" />

<?php 
$currentLang = qtrans_getLanguage(); 

if ($currentLang == "en") {
?>
<style type="text/css">
.gce-description { display: none; }
</style>
<?	
}
else{
?>
<style type="text/css">
.gce-list-event { display: none; }
</style>
<?	
}
?>
<script type="text/javascript">
					
$(document).ready(function () {
								
	//jCarousel Plugin
	if($(window).width() < 600) {
	  $('#carousel').jcarousel({
		horizontal: true,
		scroll: 1,
		auto: 2,
		wrap: 'last',
		//animation: 3000,
		initCallback: mycarousel_initCallback
   	});	
	}
	else {
  $('#carousel').jcarousel({
		vertical: true,
		scroll: 1,
		auto: 2,
		wrap: 'last',
		//animation: 3000,
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
	).click(function () {

	      	$('span.arrow').remove();        
								$(this).append('<span class="arrow"></span>');
       	$('div#slideshow-main li').removeClass('active');        
       	$('div#slideshow-main li.' + $(this).attr('rel')).addClass('active');	
        	
       	return false;
	});

	//
	var slideshowItems = $("div#slideshow-main li").size();
	var r = 2;

	var slider = function() {
		$('div#slideshow-main li').removeClass('active');        
	    $('div#slideshow-main li.p' + r).addClass('active');		
					
		$('span.arrow').remove();        
		$('div#slideshow-carousel a img').css({'opacity': '0.5'});
	   	$('div#slideshow-carousel li.jcarousel-item-' + r + ' a img:first').css({'opacity': '1.0'});
		$('div#slideshow-carousel li.jcarousel-item-' + r + ' a:first').append('<span class="arrow"></span>')

					
		if (r<slideshowItems) {
			r = r + 1;
		}
		else {
			r = 1;
		}
		
	};

	var interval = setInterval(slider, 5000);
					
	// when the user hovers in, clear the interval; if they hover out,
	// restart it again
	$('#slideshow-carousel').hover(function() {
		clearInterval(interval);
	}, function() {
		interval = setInterval(slider, 5000);
	});
	//			


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

<!-- content: start -->
<div id="content" class="home">

	<?php while ( have_posts() ) : the_post(); ?>
			 
	<?php echo "<h1>"; the_title(); echo "</h1>"; ?> 

	<!-- column 1: start -->
	<div id="col1">  	

		<div id="welcomeHero">
			<?php the_content(); ?>
 			<?php $postID = get_the_ID(); ?>
			<div id="slideshow-main">
			  <ul>

			  </ul>										
			 </div>
   
			 <div id="slideshow-carousel">				
			    <ul id="carousel" class="jcarousel jcarousel-skin-tango">
			      
			    </ul>
			 </div>

 <script type="text/javascript">
 <?php echo get_post_meta($postID, 'slideshow_' . $currentLang, true); ?>

//
//Find out number of Slides
var totalSlides2 = 0;
	<?php 
	 for ( $countVble0 = 1; $countVble0 <= 30; $countVble0++) {
	 	echo "if( typeof slide".$countVble0." != 'undefined' ) {";
		echo "totalSlides2++;";
		echo "} else { }";
		}
	?>	
//
							
for (var i2=startSlideNumber; i2<=totalSlides2; i2++) {
	//Items for Large Image
	//if (i2==1) {
	if (i2==startSlideNumber) {
		var listItem = "<li class='p" + i2 + " active'><a href=''><img src='' width='545' height='342' alt=''/><span class='opacity'></span><span class='content'><h1></h1><p></p></span></a></li>";
	}
	else {
		var listItem = "<li class='p" + i2 + "'><a href=''><img src='' width='545' height='342' alt=''/><span class='opacity'></span><span class='content'><h1></h1><p></p></span></a></li>";
	}
			
	$("#slideshow-main ul").append(listItem);
			
	//Items for Small Image
	var listItemSmall = "<li><a href='#' rel='p" + i2 + "'><img id='p" + i2 + "ImageSmall' src='' width='154' height='127' alt='#'/></a></li>";

	$("#slideshow-carousel ul").append(listItemSmall);
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


	var builtSlide1 = "$('.p" + i2 + " a').attr('href',slide" + i2 + ".slideLink); $('.p" + i2 + " img').attr('src',slide" + i2 + ".slideLarge); $('#p" + i2 + "ImageSmall').attr('src',slide" + i2 + ".slideSmall);";
	var builtSlide2 = " $('.p" + i2 + " h1').append(slide" + i2 + ".slideText1); $('.p" + i2 + " p').append(slide" + i2 + ".slideText2);";							
		
	var slideTest = "count" + i2;
	//alert(slideTest);
	if ((eval(slideTest)!=3)||eval(slideTest)!=2) {
		eval(builtSlide1)
		//eval(builtSlide2)			
		if (eval("slide" + i2 + ".slideText1")!="") {
			eval(builtSlide2)
		}
		else {
			var hideSection = " $('.p" + i2 + " h1').css('display','none'); $('.p" + i2 + " p').css('display','none');";
			eval(hideSection)
		}				
	}
	else {
		eval(builtSlide1)
		var hideSection = " $('.p" + i2 + " h1').css('display','none'); $('.p" + i2 + " p').css('display','none');";
		eval(hideSection)
	}
}

</script>

		<div class="clear"></div>

		</div>

<?php
	if ($currentLang == "en") {
		echo "<a href='/classes-grid' class='lnk-homeFindMore'>Find out more about our classes</a>";
	}
	else {
		echo "<a href='/fr/classes-grid/' class='lnk-homeFindMore'>Cliquez i&ccedil;i pour en savoir plus sur nos cours</a>";
	}   
?>

	</div>
	<!-- column 1: end -->
	<?php endwhile; // end of the loop. ?>

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
	//echo $postID;
	echo "<div id='newsletter-box' class='info-box1Wrapper'>";
	echo "<div class='info-box1'>";
	echo '<h2>' . get_the_title() . '</h2>';
	echo "<div class='text'>";
	//echo "<p>";
	the_excerpt();
	//echo "</p>";
	the_content();
	echo "</div>";
	echo "</div>";
	echo "</div>";
	}

	endwhile;
	?>	
	<!-- Join Our Newsletter : end -->	



	<div class="info-box1Wrapper">   
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
			echo do_shortcode( '[google-calendar-events id="1" type="ajax"]' );
			if ($currentLang == "en") {
			?>
		 	<style type="text/css">.gce-list-event {display: block;}</style>
		 	<?php
			}
			else {
			?>
		  	<style type="text/css">.gce-list-event {display: none;}</style>
		  	<?php						
			}
			?> 
			</div>
		</div> 
	</div>

	<div class="info-box1Wrapper">
		<div class="info-box1">
			<h2>Twitter</h2>
			<ul style="margin-left: 4px;">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</ul>
		</div> 
	</div>

	<div class="info-box1Wrapper">
		<div class="info-box1">
			<h2>Blog</h2>
			<div class="text">
			<ul style="margin-left: 4px;">
   <?php
			if ($currentLang == "en") {
				dynamic_sidebar( 'sidebar' );
			}
			else {
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
			}
			?>   
			</ul>
			</div>
		</div> 
	</div>

	<!-- home info boxes : start -->
	<?php echo get_post_meta('9', 'homeInfoBoxes_' . $currentLang , true); ?>	
	<!-- home info boxes : end -->
	 	
	</div>
	<!-- column 3: end -->   
	
</div>
<!-- content: end -->

<style>
.gce-url a { color: #ED780B; }
.gce-list-event a {color: #ED780B;font-weight: bold; text-decoration: underline;}
</style>
<script>
function addCalendarLinks() {
	// $( "div.gce-list-event:contains('Drawing from Life Section D')" ).append( "<div class='gce-url'><a href='/drawing-from-life'>url</a></div>" );
	$( "div.gce-list-event:contains('Drawing from Life Section D')" ).replaceWith("<div class='gce-list-event'><a href='/drawing-from-life'>Drawing from Life Section D</a></div>");
	$( "div.gce-list-event:contains('Digital Painting')" ).replaceWith("<div class='gce-list-event'><a href='/digital-painting'>Digital Painting</a></div>");
	

}

$(document).ready(function () {
	addCalendarLinks();
	$("a.gce-change-month").bind( "click", function() {
		//addCalendarLinks();
		//setTimeout(function() {
		//	addCalendarLinks();
		//	alert("tst");
		//}, 8000);
	});
});
</script>

<?php get_footer(); ?>
