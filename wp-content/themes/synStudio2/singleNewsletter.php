<?php

$currentLang = qtrans_getLanguage(); 

get_header(); ?>
 
	<!-- content: start -->
	<div id="content" class="classes-byCategory" style="padding-top: 24px;">

	
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
	<!-- content: end -->

<?php get_footer(); ?>