<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */

get_header(); ?>

	<!-- content: start -->
	<div id="content" class="general-page">
 	<!-- column 1: start -->
 	<div id="col1">  
				<?php while ( have_posts() ) : the_post(); ?>
				<?php echo '<h1>' . get_the_title() . '</h1>'; ?>
 	 	<div class='podcast-boxWrapper'>
   		<div class='podcast-box'>
					<?php the_content(); ?>
     </div>
     </div>

				<?php endwhile; // end of the loop. ?>
  </div>
  <!-- column 1: end --> 
  
  <?php get_sidebar(); ?>	
	</div>
	<!-- content: end -->

<?php get_footer(); ?>