<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
/*
Template Name: Artists Interviews Page
 */
get_header(); ?>

	<!-- content: start -->
	<div id="content" class="podcast">

 	<!-- column 1: start -->
 	<div id="col1">   
   <!-- title: start -->
     <?php while ( have_posts() ) : the_post(); ?>
      <?php echo "<h1>"; the_title(); echo "</h1>"; ?> 
      <?php the_content(); ?>
      <?php $postID = get_the_ID(); ?>
     <?php endwhile; // end of the loop. ?> 
   <!-- title: end -->
			<?php
   $cat = 'Artists Interviews';
			
   $catID = get_cat_ID($cat);
   
   query_posts('cat=' . $catID);
   while (have_posts()) : the_post();
   echo "<div class='podcast-boxWrapper'>";
   echo "<div class='podcast-box'>";
   echo '<h2>' . get_the_title() . '</h2>';
   the_excerpt();
			$postID = get_the_ID();
			echo "<div style='text-align: right;'><a href=" . get_permalink( $postID ) . ">Read more</a></div>";
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
   
   query_posts('cat=' . $catID . '&showposts=1');
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
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.synstudio.ca" data-via="your_screen_name" data-lang="en" data-related="anywhereTheJavascriptAPI" data-count="vertical">Tweet</a>  
     <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>  
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




		
		