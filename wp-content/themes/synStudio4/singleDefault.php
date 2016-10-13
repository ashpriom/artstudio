<?php get_header(); ?>

<div id="content" class="general-page"> <!-- content: start -->
  
  <div id="col1">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php echo "<h1>" . get_the_title() . "</h1>"; ?>
    <div class="podcast-boxWrapper">
      <div class="podcast-box">
        <?php the_content(); ?>
      </div>
    </div> 
    <?php endwhile; ?>
  </div>
  
  <?php get_sidebar(); ?>	

</div> <!-- content: end -->

<?php get_footer(); ?>