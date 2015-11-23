<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
/*
Template Name: Teacher Artwork Showcase
 */
?>

<?php get_header('microsite'); ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/cadiplomaHeader.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/cadiplomaFooter.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/cadiplomaHome.css" type="text/css" media="screen" />

<div class="globalcontainer" id="globalcontainer"> 
  	<?php while ( have_posts() ) : the_post(); ?>
        <div class="wrapper"><?php the_content(); ?></div>
    <?php endwhile; ?>
</div> <!-- Global Container -->

<?php get_footer('microsite'); ?>

</body>
</html>