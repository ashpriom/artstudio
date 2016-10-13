<?php get_header(); ?>

	<!-- content: start -->
	<div id="content">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php //the_content(); ?>

				<?php endwhile; // end of the loop. ?>
 	
	</div>
	<!-- content: end -->

<?php get_footer(); ?>