<?php
	$postID = get_the_ID();
	if(function_exists('pll_current_language')){ $currentLang = pll_current_language('slug'); }
	if(function_exists('pll_get_post')){ $translationID = pll_get_post($postID,'en');}
	if(function_exists('get_option')){ $options = get_option('synstudio-options'); $redundant_options = get_option( 'sample_theme_options' ); }
?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slideshow.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery_cookie.min.js"></script>

<script type="text/javascript">

	function closeDetailBox(a){
	   $(a).hide();
	}					

	$(document).ready(function (){
		if($(window).width() < 768){
	        $('#carousel').jcarousel({
	            horizontal: true,
	            scroll: 1,
	            auto: 2,
	            wrap: 'last',
	            initCallback: mycarousel_initCallback
	        });

	        $( "#col2 a" ).bind( "click", function(event) {
	            event.preventDefault();
	        });

	        //Add Close link in description boxes
	        $( ".details-box" ).each(function(index){
	           var idBox = $( this ).attr("id");
	           $( this ).append("<a href='javascript:closeDetailBox(\"#"+idBox+"\");' class='detail-boxLink'>CLOSE(X)</a>");    
	        });
		}

		else{
		    $('#carousel').jcarousel({
				vertical: true,
				scroll: 1,
				auto: 2,
				wrap: 'last',
				initCallback: mycarousel_initCallback
		   	});
		}     

		//Front page Carousel - Initial Setup
	   	$('div#slideshow-carousel a img').css({'opacity': '0.5'});
	   	$('div#slideshow-carousel a img:first').css({'opacity': '1.0'});
	   	$('div#slideshow-carousel li a:first').append('<span class="arrow"></span>')
	  
	  	//Combine jCarousel with Image Display
	    $('div#slideshow-carousel li a').hover(
	       	function(){
	       		if (!$(this).has('span').length) {
	        		$('div#slideshow-carousel li a img').stop(true, true).css({'opacity': '0.5'});
	   	    		$(this).stop(true, true).children('img').css({'opacity': '1.0'});
	       		}		
	       	},
	       	function(){
	       		$('div#slideshow-carousel li a img').stop(true, true).css({'opacity': '0.5'});
	       		$('div#slideshow-carousel li a').each(function () {
	       			if ($(this).has('span').length) $(this).children('img').css({'opacity': '1.0'});
	       		});
	       	}
		).click(function(){
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

			if (r<slideshowItems) {
				r = r + 1;
			}
			else {
				r = 1;
			}	
		};
		var interval = setInterval(slider, 5000);
						
		// when the user hovers in, clear the interval; if they hover out, restart it again
		$('#slideshow-carousel').hover(function() {
			clearInterval(interval);
		},function() {
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

	// Show hide information boxes
	function showDetails(a){
		$(".details-box").hide();
		$(a).show();
	}

	function hideDetails(){
		$(".details-box").hide();
	}	

</script>

<style>#slideshow-main .p1 .content{display:none;}</style> <!-- Hide the text and level on first slide -->
 
<div id="content" class="class-details"> <!-- content: start -->

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
  		<p>
  			<?php
			if (get_post_meta($postID, 'breadcrumb_' . $currentLang, true)!=""){
				echo get_post_meta($postID, 'breadcrumb_' . $currentLang, true);
			}
			else {
				if($currentLang == en){ ?> <a href="<?php bloginfo('home'); ?>/classes/">All Classes</a> <?php }
				else{ ?> <a href="<?php bloginfo('home'); ?>/cours-arts/">Tous les cours</a> <?php }
			}
			?>
		</p>
   	</div>   
  
  	<div style="display: none;"><?php the_content(); ?></div>  
 	
 	<div id="col1" onmouseover="hideDetails();"> <!-- column 1: start -->
   		
   		<div id="welcomeHero">
    		<div id="slideshow-main">
      			<ul></ul>									
     		</div>

     		<div id="slideshow-carousel"><ul id="carousel" class="jcarousel jcarousel-skin-tango"></ul></div>
  
     		<script type="text/javascript">

     			var slide1 = { 
					slideLarge:"",
					slideSmall:"<?php get_site_url(); ?>/wp-content/uploads/2017/03/ssgm-video-thumb.jpg",
					slideText1:"",
					slideText2:"",
					slideLink:"",
				};

		 		<?php
				/*	A loop field named "slider" with sub-fields "image"
				    It uses the Custom Field Suite plugin's loop functionality.
				    Prints Javascript snippet for the slider code in next blocks of code.
				*/
				    if($currentLang=="en"){
						$fields = CFS()->get('slider');
					}
					else{
						$fields = CFS()->get('slider',$translationID);
					}
					$i=1;
					foreach ((array)$fields as $field) {
						$i++;
						echo "var slide".$i." = { \n";
					    echo "slideLarge:\"".$field['image'];
					    echo "\",\n";
					    $slideID = attachment_url_to_postid($field['image']);
					    $thumbSource = wp_get_attachment_image_src($slideID,'slidethumb',false);
					    
					    if(empty($field['small_image'])){
					    	if(!empty($thumbSource[0])){
					    		echo "slideSmall:\"".$thumbSource[0];
					    	}
					    	else{
					    		echo "slideSmall:\"".$field['image'];
					    	}
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
				for ($countVble0 = 1; $countVble0 <= 50; $countVble0++) {
					echo "if( typeof slide".$countVble0." != 'undefined' ) {";
					echo "totalSlides2++;";
					echo "} else { }";
				}
			?>

			for (var i2=1; i2<=totalSlides2; i2++){
				
				//Items for Large Image
				if (i2==1) {
					var listItem = "<li class='p" + i2 + " active'><iframe style=\"position: relative; height: 100%; width: 100%;\" src=\"https://www.youtube.com/embed/THWecUL38uQ?autoplay=1\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></li>";
				}
				else {
					var listItem = "<li class='p" + i2 + "'><a href=''><img src='' width='545' height='342' alt=''/><span class='opacity'></span><span class='content'><h1></h1><p></p></span></a></li>";
				}

				$("#slideshow-main ul").append(listItem);
				
				//Items for Small Image
				if (i2==1) {
					var listItemSmall = "<li><a href='#' rel='p" + i2 + "'><img id='p" + i2 + "ImageSmall' src='<?php get_site_url(); ?>/wp-content/uploads/2017/03/ssgm-video-thumb.jpg' width='154' height='127' alt='#'/></a></li>";
	          	}
	          	else{
	          		var listItemSmall = "<li><a href='#' rel='p" + i2 + "'><img id='p" + i2 + "ImageSmall' src='' width='154' height='127' alt='#'/></a></li>";
	          	}

	          	$("#slideshow-carousel ul").append(listItemSmall);
			}
					
			//count array elements
			var arrayElements = "";
			for (var countVble=2; countVble<=totalSlides2; countVble++){
				arrayElements = arrayElements + "var count"+countVble+" = 0;";
				arrayElements = arrayElements + "for (i in slide"+countVble+") {";
				arrayElements = arrayElements + "if (slide"+countVble+".hasOwnProperty(i)) {";
				arrayElements = arrayElements + "count"+countVble+"++;";
				arrayElements = arrayElements + "}";
				arrayElements = arrayElements + "}";
			}																									
			eval(arrayElements);
													
			//Apply array values
			for (var i2=2; i2<=totalSlides2; i2++){
				var builtSlide1 = "$('.p" + i2 + " a').attr('href',slide" + i2 + ".slideLink); $('.p" + i2 + " img').attr('src',slide" + i2 + ".slideLarge); $('#p" + i2 + "ImageSmall').attr('src',slide" + i2 + ".slideSmall);";
				var builtSlide2 = " $('.p" + i2 + " h1').append(slide" + i2 + ".slideText1); $('.p" + i2 + " p').append(slide" + i2 + ".slideText2);";							
				var slideTest = "count" + i2;
				if ((eval(slideTest)!=3)||eval(slideTest)!=2) {
					eval(builtSlide1)
					if (eval("slide" + i2 + ".slideText1")!="") {
						eval(builtSlide2)
					}
					else {
						var hideSection = " $('.p" + i2 + " h1').css('display','none'); $('.p" + i2 + " p').css('display','none');";
						eval(hideSection)
					}				
				}
				else{
					eval(builtSlide1)
					var hideSection = " $('.p" + i2 + " h1').css('display','none'); $('.p" + i2 + " p').css('display','none');";
					eval(hideSection)
				}
			}
			
			</script>

     	<div class="clear"></div>
   
   	</div>
   
</div> <!-- column 1: end -->

<div id="col2"> <!-- column 2: start -->

	<!-- Triggers effects on the boxes on right on mouseover -->  
	<?php if ($currentLang == "en") { ?>
			<a href="#" id="lnk-teacherInfo" onmouseover="showDetails('#cnt-teacherInfo')">Speaker Info</a>
			<a href="#" id="lnk-description" onmouseover="showDetails('#cnt-description')">Description</a>
			<a href="#" id="lnk-courseOutline" onmouseover="showDetails('#cnt-courseOutline')">Event Outline</a>
			<a href="#" id="lnk-schedule" onmouseover="showDetails('#cnt-schedule')">Schedule</a>
			<a href="#" id="lnk-preRequisites" onmouseover="showDetails('#cnt-preRequisites')">Who is this for?</a>
	<?php } else { ?>
			<a href="#" id="lnk-teacherInfo" class="fifteen-pixel" onmouseover="showDetails('#cnt-teacherInfo')">À propos du conférencier</a>
			<a href="#" id="lnk-description" class="fifteen-pixel" onmouseover="showDetails('#cnt-description')">Description</a>     
			<a href="#" id="lnk-courseOutline" class="fifteen-pixel" onmouseover="showDetails('#cnt-courseOutline')">Aperçu de l'événement</a>
			<a href="#" id="lnk-schedule" class="fifteen-pixel" onmouseover="showDetails('#cnt-schedule')">Horaire</a>
			<a href="#" id="lnk-preRequisites" class="fifteen-pixel" onmouseover="showDetails('#cnt-preRequisites')">C'est pour qui?</a>	
	<?php } ?>

</div> <!-- column 2: end -->
  
<!-- Content boxes at the bottom -->
<div id="cnt-teacherInfo" class="details-box">
  	<h3><?php 
  		if($currentLang=="en"){  ?> 
	  			Speaker Information
  		<?php } else{ ?>
  				À propos du conférencier 
  		<?php } ?>
  	</h3>
	<div class="text">
		<?php
		if($currentLang=="en"){ 
			$attachment_id1 = get_post_meta($postID, 'teacher_photo1', true);
			$attachment_id2 = get_post_meta($postID, 'teacher_photo2', true);
			$attachment_id3 = get_post_meta($postID, 'teacher_photo3', true);
			$attachment_id4 = get_post_meta($postID, 'teacher_photo4', true);
			$attachment_id5 = get_post_meta($postID, 'teacher_photo5', true);
			$attachment_id6 = get_post_meta($postID, 'teacher_photo6', true);
			$attachment_id7 = get_post_meta($postID, 'teacher_photo7', true);
			$attachment_id8 = get_post_meta($postID, 'teacher_photo8', true);
		}
		else{
			$attachment_id1 = get_post_meta($translationID, 'teacher_photo1', true);
			$attachment_id2 = get_post_meta($translationID, 'teacher_photo2', true);
			$attachment_id3 = get_post_meta($translationID, 'teacher_photo3', true);
			$attachment_id4 = get_post_meta($translationID, 'teacher_photo4', true);
			$attachment_id5 = get_post_meta($translationID, 'teacher_photo5', true);
			$attachment_id6 = get_post_meta($translationID, 'teacher_photo6', true);
			$attachment_id7 = get_post_meta($translationID, 'teacher_photo7', true);
			$attachment_id8 = get_post_meta($translationID, 'teacher_photo8', true);
		}
		?>
		<div class="thumbnail">
			<?php
				echo wp_get_attachment_image($attachment_id1, small); 
				echo wp_get_attachment_image($attachment_id2, small);
				echo wp_get_attachment_image($attachment_id3, small);
				echo wp_get_attachment_image($attachment_id4, small);
				echo wp_get_attachment_image($attachment_id5, small);
				echo wp_get_attachment_image($attachment_id6, small);
				echo wp_get_attachment_image($attachment_id7, small);
				echo wp_get_attachment_image($attachment_id8, small);
			?>
		</div>
		<?php echo get_post_meta($postID, 'teacher_info_' . $currentLang, true); ?>
	</div>
	<div class="bgd-box"></div>
</div>
  
<div id="cnt-courseOutline" class="details-box">
	<h3><?php 
  		if($currentLang=="en"){ ?> 
	  			Event Outline 
	  		<?php } else{ ?> 
	  			Aperçu de l'événement 
	  	<?php } ?>
  	</h3>
   	<div class="text"><?php echo get_post_meta($postID, 'course_outline_' . $currentLang, true); ?></div>
   	<div class="bgd-box"></div>
</div>
  
<div id="cnt-schedule" class="details-box">
  	<h3><?php if($currentLang=="en"){?> Schedule <?php } else{ ?> HORAIRE <?php } ?></h3>
   	<div class="text"><?php echo get_post_meta($postID, 'schedule_' . $currentLang, true); ?></div>
   	<div class="bgd-box"></div>
</div>
  
<div id="cnt-description" class="details-box">
  	<h3><?php if($currentLang=="en"){?> Description <?php } else{ ?> DESCRIPTION <?php } ?></h3>
   	<div class="text"><?php echo get_post_meta($postID, 'description_' . $currentLang, true); ?></div>
   	<div class="bgd-box"></div>
</div>  
  
<div id="cnt-preRequisites" class="details-box">
	<h3><?php 
  		if($currentLang=="en"){ ?> 
	  			Who is this for? 
	  	<?php } else{ ?>
	  		C'est pour qui? <?php 
	  	}
  		?>
  	</h3>
   	<div class="text"><?php echo get_post_meta($postID, 'pre_requisite_' . $currentLang, true); ?></div>
   	<div class="bgd-box"></div>
</div>   
<!-- content boxes: end -->

     
<!-- column 3: start -->
<div id="col3" onmouseover="hideDetails();">
	<div id="registration" class="info-box1Wrapper">   
	  	<div class="info-box1">
	  		<h2><?php if($currentLang=="en"){?> Registration <?php } else{ ?> Inscription <?php } ?></h2>
			<div class="text"><?php echo get_post_meta($postID, 'registration_info_' . $currentLang, true); ?>
				<?php 
	                if($currentLang=="en"){$class_offered = get_post_meta($postID, 'class_offered', true); }
	                else{ $class_offered = get_post_meta($translationID, 'class_offered', true); }
	                if($class_offered == "1"){ ?>
						<h3>
							<?php
						 	if ($currentLang=="en"){
						 		if(!in_category('workshops')){
									echo $redundant_options['deadline_en'];
								}
							}
							else {
							 	if(!in_category('workshops-fr')){					
									echo $redundant_options['deadline_fr'];
	    						}
							}
							?>
						</h3>
					<?php } ?>				
			</div></br>
			
			<div> <!-- Paypal Code: show it if the class is offered -->
				<?php
					if($class_offered == "1"){
				 		echo get_post_meta($postID, 'paypal_button_' . $currentLang, true);
				 	}
				?>
			</div>

	   	</div> 
  	</div>
    
	<div class="info-box1Wrapper"> 
  		<div class="info-box1">
  			<h2><?php if($currentLang=="en"){?> Info <?php } else{ ?> Infos <?php } ?></h2>
    		<div class="text"><?php echo get_post_meta($postID, 'class_info_' . $currentLang, true); ?></div>
   		</div>    
  	</div>

	
	<?php 
	// Close loop before div Column 3 closes, to add Newsletter Box independently
		endwhile; // end of the loop.
	?>
   
   	<!-- Join Our Newsletter : start -->
	<?php
		if($currentLang=="en"){ $newsletterPost = get_post(145); }
	    else{ $newsletterPost = get_post(11014); }
	    $newsletterTitle = $newsletterPost->post_title;
	    $newsletterContent = apply_filters( 'the_content', $newsletterPost->post_content );
	    $newsletterExcerpt = $newsletterPost->post_excerpt;
		echo "<div id='newsletter-box' class='info-box1Wrapper'>";
			echo "<div class='info-box1'>";
				echo '<h2>' . $newsletterTitle . '</h2>';
				echo "<div class='text'>";
					echo "<p>". $newsletterExcerpt. "</p>";
					echo $newsletterContent;
				echo "</div>";
			echo "</div>";
		echo "</div>";
	?>
	<!-- Join Our Newsletter : end -->	
  
</div> <!-- column 3: end -->     			

</div> <!-- content: end -->

<?php get_footer(); ?>