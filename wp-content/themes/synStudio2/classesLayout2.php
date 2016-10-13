<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
/*
Template Name: Classes Layout2 Page
 */
get_header(); 
?>

	<!-- content: start -->
	<div id="content" style="position: relative;">

 	<!-- column 1: start -->
 	<div id="col1">   
   <!-- title: start -->
     <?php while ( have_posts() ) : the_post(); ?>
      <?php echo "<h1>"; the_title(); echo "</h1>"; ?> 
      <?php the_content(); ?>
     <?php endwhile; // end of the loop. ?> 
   <!-- title: end -->

       
  </div>
  <!-- column 1: end -->
  
  <!-- column 2: start -->
  <div id="col2" onmouseover="resetContentItems ();" style="margin-top: 32px; padding-bottom: 60px;">
  
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
    
      <div style="border: 1px solid #c9c9c9; background: #FFF; width: 52px; height: 32px; line-height: 28px; text-align: center; color: #333; font-size: 13px; float: left;">
<?php
//echo rarst_twitter_user('SynStudio', 'name').' has '.
//rarst_twitter_user('SynStudio', 'followers_count').' followers after '.
//rarst_twitter_user('SynStudio', 'statuses_count').' updates.';
echo rarst_twitter_user('SynStudio', 'followers_count'). '<div style="font-size: 10px;margin-top: -16px;">Followers</div>';

?>

    <a href="https://twitter.com/share" class="twitter-share-button" data-dnt="true" data-count="none" data-via="SynStudio" data-text="I'm checking out Syn Studio Art School right now!">Tweet</a>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    
          </div>
</div>
    <!-- Twitter: end -->
   </div>
   
   <div id="btn-howToRegister" style="margin-bottom: 32px;"><a href="#">How to Register</a></div>
   
   <!-- Join Our Newsletter : start -->
   <div class="podcast">
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
   </div>
   <!-- Join Our Newsletter : end -->
   
      
  </div>
  <!-- column 2: end -->  
  
  <!-- column 3: start -->
  <div id="col3" onmouseover="resetContentItems();" style="position: absolute; left: 0; top: 0; width: 10px; height: 500px;"></div>
  <!-- column 3: end -->
  
  <!-- column 4: start -->
  <div id="col4" onmouseover="resetContentItems();" style="width: 100%; height: 24px; position: absolute; bottom: 0; left: 0;"></div>
  <!-- column 4: end -->  
  
	</div>
	<!-- content: end -->


<?php get_footer(); ?>




		
		