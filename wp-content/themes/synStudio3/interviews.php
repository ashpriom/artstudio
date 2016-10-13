<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
/*
Template Name: Interview Page
 */
get_header();

$currentLang = qtrans_getLanguage(); 


 ?>

	<!-- content: start -->
	<div id="content" class="podcast">

 	<!-- column 1: start -->
 	<div id="col1">   
   <!-- title: start -->
     <?php while ( have_posts() ) : the_post(); ?>
      <?php echo "<h1>"; the_title(); echo "</h1>"; ?> 
      <!-- mod of excerpt -->
      <?php the_content(); ?>
      <?php $postID = get_the_ID(); ?>
     <?php endwhile; // end of the loop. ?> 
   <!-- title: end -->
	<?php
	
	$cat = 'Interviews';
			
   $catID = get_cat_ID($cat);
   
   query_posts('cat=' . $catID);
   while (have_posts()) : the_post();
   
   echo "<div class='podcast-boxWrapper'>";
   echo "<div class='podcast-box'>";


   $postIDInterviews = get_the_ID();
   
  echo '<h2><a href="' . get_permalink($postIDInterviews ) . '">' . get_the_title() . '</a></h2>';
    
    //echo "<div style='width: 520px; float: left; padding-right: 34px; padding-left: 8px; padding-top: 12px; min-height: 220px;'>";
    //echo "<div style='width: 80%; float: left; padding-right: 2%; padding-left: 8px; padding-top: 12px; min-height: 220px;'>";
  echo "<div class='podcast-text'>";
    echo the_excerpt();
    //echo "</div>";
    echo "<style>.podcast-box p {width: 80%; float: left; padding-right: 2%;}"; 
    //echo "<style>.podcast-box p {width: 520px; float: left; padding-right: 34px;}";
    echo "@media only screen and (max-width: 640px) {";
    echo ".podcast-box p {width: 80%; float: left; padding-right: 2%;}";
    //  echo ".podcast-box p {width: auto; float: none; padding-right: 12px;}";                           
    echo "}"; 
    echo "</style>";


  echo "<div class='buttons2'>";
    echo "<a href='";
    echo get_permalink( $postIDInterviews ); 
    echo "'>";
    echo "<img src='";
    echo get_post_meta($postIDInterviews, 'podcastsThumbnail', true);
    echo "' alt='' />";
    echo "</a>";
    echo "<a href='";
    echo get_permalink( $postIDInterviews ); 

    if ($currentLang == "en") {
      echo "' class='btn-play'>Read More</a></div>"; 
    }
    else {
      echo "' class='btn-play'>La suite</a></div>"; 
    }    
  echo "</div>";
  
  //podcast text ends
  echo "</div>";

echo "</div>";
   endwhile;
    ?>	
       
  </div>
  <!-- column 1: end -->
  
  <!-- column 2: start -->
  <div id="col2">
  
<?php

   //$cat = 'Testimonials';
   $catID = '10';
   
   //query_posts('cat=' . $catID . '&showposts=1');
			query_posts(array(
				'showposts' => 1,
				'orderby' => 'rand',
				'category_name' => 'Testimonials' //You can insert any category name
			));
			while (have_posts()) : the_post();
   echo "<div class='info-box2'>";
   echo '<h3>' . get_cat_name($catID) . '</h3>';
   echo "<div class='text-wrapper'><div class='text'>";
   the_excerpt();
			echo "<a class='lnk-readMore' href='/testimonials'>Read More</a>";
   echo "</div></div>";
   echo "</div>";
   endwhile;
    ?>	
   
   <div id="share-plugins">
   	<!-- Facebook like : Start -->
    <div id="facebook">
					<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com/SynStudio&amp;send=false&amp;layout=box_count&amp;width=55&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=90&amp;appId=223615814335068" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:55px; height:90px;" allowTransparency="true"></iframe> 
    </div>
    <!-- Facebook like : end -->
    <!-- Twitter: start -->
    <div id="twitter">
    
    	<div style="border: 1px solid #c9c9c9; background: #FFF; width: 52px; height: 32px; line-height: 28px; text-align: center; color: #333;	font-size: 13px; float: left;">
<?php
echo getTwitterFollowers('SynStudio');
echo '<div style="font-size: 10px;margin-top: -16px;">Followers</div>';
?>

    <a href="https://twitter.com/share" class="twitter-share-button" data-dnt="true" data-count="none" data-via="SynStudio" data-text="I'm checking out Syn Studio Art School right now!">Tweet</a>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    
					</div>
</div>
    <!-- Twitter: end -->
   </div>
   
   <div id="btn-howToRegister"><a href="#">How to Register</a></div>
   
   <!-- Join Our Newsletter : start -->
   <?php
   $cat = 'General';
   $catID = get_cat_ID($cat);
   
   query_posts('cat=' . $catID);
   while (have_posts()) : the_post();
   
   $postID = get_the_ID();
   if ($postID = "145") {
   //echo $postID;
   echo "<div id='newsletter-box2' class='info-box2'>";
   echo '<h3>' . get_the_title() . '</h3>';
   echo "<div class='text-wrapper'>";
			echo "<div class='text'>";
   echo "<p>";
   the_excerpt();
   echo "</p>";
   the_content();
   echo "</div>";
   echo "</div>";
   echo "</div>";
   }
   
   endwhile;
    ?>	
   <!-- Join Our Newsletter : end -->
   
      
  </div>
  <!-- column 2: end -->  
  
	</div>
	<!-- content: end -->


<?php get_footer(); ?>




		
		
