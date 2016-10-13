<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */

get_header(); ?>

	<!-- content: start -->
	<div id="content">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<!-- portfolio piece: start -->
		<div id="post-<?php the_ID(); ?>">
			<?php the_content('Read the rest of this entry &raquo;'); ?>
		</div>
		<!-- portfolio piece: end -->

		<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	<?php else : ?>

		<h2 class="center"><?php _e('Not Found', 'nsomnium'); ?></h2>
		<p class="center"><?php _e('Sorry, but you are looking for something that isn&acute;t here.', 'nsomnium'); ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>


	</div>
	<!-- content: end -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>




		
		