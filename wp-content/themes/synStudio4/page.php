<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
?>

<?php get_header(); ?>

<div id="content" class="general-page"> <!-- content: start --> 
 	
 	<div id="col1"> <!-- column 1: start -->
		<?php while ( have_posts() ) : the_post(); ?>
			<?php echo '<h1>' . get_the_title() . '</h1>'; ?>
 	 		<div class='podcast-boxWrapper'>
   				<div class='podcast-box'><?php the_content(); ?></div>
     		</div>
		<?php endwhile; ?>
  	</div> <!-- column 1: end --> 
  
  	<?php get_sidebar(); ?>

</div> <!-- content: end -->

<?php get_footer(); ?>