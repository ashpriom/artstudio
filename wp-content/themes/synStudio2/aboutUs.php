<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
/*
Template Name: About Us Page
 */
get_header();

$currentLang = qtrans_getLanguage(); 

?>

<!-- Custom scrollbars -->
<link rel="stylesheet" type="text/css" href="http://synstudio.ca/wp-content/themes/synStudio/css/about-us/style.css"/>  
<link href="http://synstudio.ca/wp-content/themes/synStudio/css/about-us/jquery.mCustomScrollbar.css" rel="stylesheet" />

<!----><script type="text/javascript" src="http://www.synstudio.ca/wp-content/themes/synStudio/js/jquery-1.4.2.min.js"></script>

<!-- Google CDN jQuery with fallback to local
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->

 
<!-- Home Slideshow -->
<script type="text/javascript" src="http://www.synstudio.ca/wp-content/themes/synStudio/js/jquery.jcarousel.pack.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.synstudio.ca/wp-content/themes/synStudio/css/jquery.jcarousel.css" />
<link rel="stylesheet" type="text/css" href="http://www.synstudio.ca/wp-content/themes/synStudio/css/skin.css" />
<link rel="stylesheet" type="text/css" href="http://www.synstudio.ca/wp-content/themes/synStudio/css/slideShow.css" />

	<!-- content: start -->
	<div id="content" class="classes-byCategory">
  
		<!-- column 1: start -->
				<?php while ( have_posts() ) : the_post(); ?>
     <?php echo "<h1>"; the_title(); echo "</h1>"; ?>
				
     

<?php $postID = get_the_ID(); ?>

<!-- Image Gallery: start -->
  <div id="container">

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
	 for ( $countVble0 = 1; $countVble0 <= 50; $countVble0++) {
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
<!-- Image Gallery: end -->
<div class="wrapper-aboutUs no-bgd">	
	<!-- scrollable block: start -->
	<div id="content_1" class="content-aboutUs">
  	<?php the_content(); ?>
	</div>
	<!-- scrollable block: end -->
</div>

<div class="about-usCTA">
<div id="btn-findMoreClasses"><a href="http://synstudio.ca/classes/"><span>Register Now</span></a></div>

<div id="share-plugins">
<!-- Facebook like : Start -->
<div id="facebook">
<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com/SynStudio&amp;send=false&amp;layout=box_count&amp;width=55&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=90&amp;appId=223615814335068" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:55px; height:90px;" allowTransparency="true"></iframe> 
</div>
<!-- Facebook like : end -->
<!-- Twitter: start -->
<div id="twitter">

<div class="twitter-sideBar">

<?php
echo getTwitterFollowers('SynStudio');
echo '<div class="followers">Followers</div>';
?>

    <a href="https://twitter.com/share" class="twitter-share-button" data-dnt="true" data-count="none" data-via="SynStudio" data-text="I'm checking out Syn Studio Art School right now!">Tweet</a>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


</div>
</div>
<!-- Twitter: end -->
</div>

</div>
<h2 style="margin-bottom: 4px;">Teachers</h2>
<div id="carousels" class="wrapper-aboutUs" style="margin-top: 0;">	
<!-- carousel: start -->

<a class="prev">prev</a> 

<div id="scrollable1" class="scrollable">
	
	<div class="items">
  <?php echo get_post_meta($postID, 'aboutUs-carousel1_' . $currentLang, true); ?>
	</div>
	
</div>

<div class="navi"></div>

<a class="next">next</a>

<!-- carousel: end -->

</div>

<br /><br />
<!-- Custom scrollbars -->
<script src="http://synstudio.ca/wp-content/themes/synStudio/js/about-us/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- scrollable --> 
<script src="http://synstudio.ca/wp-content/themes/synStudio/js/about-us/scrollable.js"></script>
<script src="http://synstudio.ca/wp-content/themes/synStudio/js/about-us/scrollable.navigator.js"></script>
<script src="http://synstudio.ca/wp-content/themes/synStudio/js/about-us/scrollable.autoscroll.js"></script>

<script>
	(function($){
		$(window).load(function(){
			$("#content_1").mCustomScrollbar({
				scrollButtons:{
					enable:true
				}
			});
			
			//Slideshow: start
//jCarousel Plugin
	if($(window).width() < 600) {
		alert("asdf");
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
			//Slideshow: end
			
		});
	})(jQuery);
//
$(function() {
	window.api = $("#scrollable1").scrollable({ size: 3 })
		.navigator({idPrefix: 'a', history: true}).data("scrollable");   
				
	api.onBeforeSeek(function() {
		// return false;
	});

	
});
</script>     
<script type="text/javascript">
					
$(document).ready(function () {
								
	


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

				<?php endwhile; // end of the loop. ?> 
  <!-- column 1: end -->
  
  <!-- column 2: start -->
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
  <!-- column 2: end -->
  
	</div>
	<!-- content: end -->

<?php get_footer(); ?>




		
		
