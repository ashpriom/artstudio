<?php

$postID = get_the_ID();
$currentLang = qtrans_getLanguage(); 
$options = get_option( 'sample_theme_options' );

?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.jcarousel.pack.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.jcarousel.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/skin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slideShow.css" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery_cookie.js"></script>
	<script type="text/javascript">
					
	$(document).ready(function () {
									
		//jCarousel Plugin
	    $('#carousel').jcarousel({
			vertical: true,
			scroll: 1,
			auto: 2,
			wrap: 'last',
			//animation: 3000,
			initCallback: mycarousel_initCallback
	   	});

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

function showDetails(a){
	$(".details-box").hide();
	$(a).show();
}
function hideDetails(){
	$(".details-box").hide();
}	

	</script>
 
	<!-- content: start -->
	<div id="content" class="class-details">
 
				<?php while ( have_posts() ) : the_post(); ?>

					<?php echo "<h1>" . get_the_title() ."</h1>"; ?>
     <?php
     $postID = get_the_ID();
					if (($postID==4191)||($postID==46)) {
						echo "<style>";
						echo ".info-box1 {min-height: 270px;}";
						echo "</style>";
					}
					?>
     
  <div class="breadcrum">
  	<?php
				if (get_post_meta($postID, 'breadcrumb_' . $currentLang, true)!=""){
			 	echo get_post_meta($postID, 'breadcrumb_' . $currentLang, true);
				}
				else {
					echo "&nbsp;";
				}
			?>
   
  </div>   
  <div style="display: none;"><?php the_content(); ?></div>  
 	<!-- column 1: start -->
 	<div id="col1" onmouseover="hideDetails();">  	
   
   <div id="welcomeHero">

					<?php //the_content(); ?>
     <?php $postID = get_the_ID(); ?>
    <div id="slideshow-main">
      <ul>
	
      </ul>										
     </div>
       
     <div style="width:150px;" id="slideshow-carousel">				
        <ul id="carousel" class="jcarousel jcarousel-skin-tango">
	      
        </ul>
     </div>
  
     <script type="text/javascript">
     <?php echo get_post_meta($postID, 'slideshow_' . $currentLang, true); ?>
	
					//Find out number of Slides
					var totalSlides2 = 0;
						<?php 
						 for ($countVble0 = 1; $countVble0 <= 50; $countVble0++) {
						 	echo "if( typeof slide".$countVble0." != 'undefined' ) {";
								echo "totalSlides2++;";
								echo "} else { }";
							}
						?>	
					//

					for (var i2=1; i2<=totalSlides2; i2++)
						{
								//Items for Large Image
								if (i2==1) {
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
						for (var countVble=1; countVble<=totalSlides2; countVble++)
						{
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
					for (var i2=1; i2<=totalSlides2; i2++)
					{
				
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
   
   
  </div>
  <!-- column 1: end -->
  <!-- column 2: start -->
  <div id="col2">
    <!-- Side Navigation -->  
				<?php //echo get_post_meta($postID, 'classSideNavigation_' . $currentLang, true); 
				 if ($currentLang == "en") {
						?>
       <a href="#" id="lnk-teacherInfo" onmouseover="showDetails('#cnt-teacherInfo')">Scott's Bio</a>
       <a href="#" id="lnk-description" onmouseover="showDetails('#cnt-description')">Description</a>
       <a href="#" id="lnk-courseOutline" onmouseover="showDetails('#cnt-courseOutline')">Curriculum</a>
       <a href="#" id="lnk-schedule" onmouseover="showDetails('#cnt-schedule')">Schedule</a>
       <a href="#" id="lnk-preRequisites" onmouseover="showDetails('#cnt-preRequisites')">Pre-Requisites</a>
      <?php
					}
					else {
					?>
					<a href="#" id="lnk-teacherInfo" onmouseover="showDetails('#cnt-teacherInfo')">La Bio de Scott</a>
					<a href="#" id="lnk-description" onmouseover="showDetails('#cnt-description')">Description</a>     
					<a href="#" id="lnk-courseOutline" onmouseover="showDetails('#cnt-courseOutline')">Curriculum</a>
					<a href="#" id="lnk-schedule" onmouseover="showDetails('#cnt-schedule')">Horaire</a>
					<a href="#" id="lnk-preRequisites" onmouseover="showDetails('#cnt-preRequisites')">Pré-requis</a>
					<?php						
					}
				
				?>
  </div>  
  <!-- column 2: end -->
  
  <!-- column 2 content boxes: start -->
  <div id="cnt-teacherInfo" class="details-box">
  	<?php echo get_post_meta($postID, 'teacherInfoBox_' . $currentLang, true); ?>
			<div class="bgd-box"></div>
  </div>
  
  <div id="cnt-courseOutline" class="details-box">
   <?php echo get_post_meta($postID, 'courseOutlineBox_' . $currentLang, true); ?>
   <div class="bgd-box"></div>
  </div>
  
  <div id="cnt-schedule" class="details-box">
   <?php echo get_post_meta($postID, 'scheduleBox_' . $currentLang, true); ?>
   <div class="bgd-box"></div>
  </div>
  
  <div id="cnt-description" class="details-box">
   <?php echo get_post_meta($postID, 'descriptionBox_' . $currentLang, true); ?>
   <div class="bgd-box"></div>
  </div>  
  
  <div id="cnt-preRequisites" class="details-box">
   <?php echo get_post_meta($postID, 'preRequisitesBox_' . $currentLang, true); ?>
   <div class="bgd-box"></div>
  </div>   
  <!-- column 2 content boxes: end -->

     
  <!-- column 3: start -->
  <div id="col3" onmouseover="hideDetails();">

  <div id="registration" class="info-box1Wrapper" style="width: 650px;">   
  	<div class="info-box1">
<?php //echo get_post_meta($postID, 'classRegistrationBox_' . $currentLang, true); ?>
<?php 
if ($currentLang == "en") {
?>
<!-- event brite ENGLISH: start -->
<div style="width:100%; text-align:left;" ><iframe  src="
http://www.eventbrite.ca/tickets-external?eid=9983064615&ref=etckt&v=2"
frameborder="0" height="354" width="100%" vspace="0" hspace="0"
marginheight="5" marginwidth="5" scrolling="auto"
allowtransparency="true"></iframe><div style="font-family:Helvetica, Arial;
font-size:10px; padding:5px 0 5px; margin:2px; width:100%;
text-align:left;" ><a style="color:#ddd; text-decoration:none;"
target="_blank" href="http://www.eventbrite.ca/r/etckt">Online
Ticketing</a><span style="color:#ddd;"> for </span><a style="color:#ddd;
text-decoration:none;" target="_blank" href="
https://scottrobertson2014.eventbrite.ca/?ref=etckt">Scott Robertson :
Concept Art and Design Workshop and Masterclass</a> <span
style="color:#ddd;">powered by</span> <a style="color:#ddd;
text-decoration:none;" target="_blank" href="
http://www.eventbrite.ca?ref=etckt">Eventbrite</a></div></div>    
<!-- event brite ENGLISH: end -->
<?php
}
else {
?>
<!-- event brite FRENCH: start -->
<div style="width:100%; text-align:left;" ><iframe  src="
https://www.eventbrite.ca/tickets-external?eid=10071342657&ref=etckt"
frameborder="0" height="375" width="100%" vspace="0" hspace="0"
marginheight="5" marginwidth="5" scrolling="auto"
allowtransparency="true"></iframe><div style="font-family:Helvetica, Arial;
font-size:10px; padding:5px 0 5px; margin:2px; width:100%;
text-align:left;" ><a style="color:#ddd; text-decoration:none;"
target="_blank" href="http://www.eventbrite.ca/r/etckt">Billetterie en
ligne</a><span style="color:#ddd;"> pour </span><a style="color:#ddd;
text-decoration:none;" target="_blank" href="
https://scottrobertson2014fr.eventbrite.ca/?ref=etckt">Scott Robertson :
classe de maître en conception artistique et design</a> <span
style="color:#ddd;">développé par</span> <a style="color:#ddd;
text-decoration:none;" target="_blank" href="
http://www.eventbrite.ca?ref=etckt">Eventbrite</a></div></div> 
<!-- event brite FRENCH: end -->
<?php
}
?>
   </div> 
  </div>
    
  <!--<div class="info-box1Wrapper"> 
  	<div class="info-box1">
    <?php echo get_post_meta($postID, 'classInfoBox_' . $currentLang, true); ?>
   </div>    
  </div>-->

	
	<?php 
	// Close loop before DIV Column3 closes, to add Newsletter Box independently
		endwhile; // end of the loop.
	?>
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
  </div>
  <!-- column 3: end -->     			
 	
	</div>
	<!-- content: end -->

<?php get_footer(); ?>
