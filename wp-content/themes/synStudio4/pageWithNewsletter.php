<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
/*
Template Name: Default Template with Newsletter Page
 */
get_header();
if (function_exists('pll_current_language')) { $currentLang = pll_current_language('slug'); } ?>


<div id="content" class="podcast"> <!-- content: start -->
 	<div id="col1"> <!-- column 1: start -->  
		<?php while ( have_posts() ) : the_post(); ?>
			<?php echo '<h1>' . get_the_title() . '</h1>'; ?>
 	 	  <div class='podcast-boxWrapper'>
        <div class='podcast-box'><?php the_content(); ?></div>
      </div>
    <?php endwhile; ?>
  </div> <!-- column 1: end --> 
  
  <div id="col2"> <!-- column 2: start -->
    
    <?php
    if($currentLang=="en"){$catName = "Testimonials";} else{$catName = "testimonials-fr";}

    query_posts(array(
    'showposts' => 1,
    'orderby' => 'rand',
    'category_name' => $catName //You can insert any category name
    ));


    while (have_posts()) : the_post();
      echo "<div class='info-box2'>";
      echo '<h3>' . get_cat_name($catID) . '</h3>';
      echo "<div class='text-wrapper'><div class='text'>";
      the_excerpt();    
      if ($currentLang == "en") { echo "<a class='lnk-readMore' href='/testimonials'>Read More</a>"; }
      else{ echo "<a class='lnk-readMore' href='/temoignages/'>En savoir plus</a>"; }
      echo "</div></div>";
      echo "</div>";
    endwhile;
    ?>	
   
  <div id="share-plugins">
    
    <div style="margin-bottom:10px;">

      <div id="fb-root"></div>
      
      <?php if($currentLang=="en"){ ?>

        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6&appId=105570572908054";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
      
      <?php } else { ?>

        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/fr_CA/sdk.js#xfbml=1&version=v2.6&appId=105570572908054";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
      
      <?php } ?>

      <div class="fb-like" 
      data-href="https://www.facebook.com/SynStudio" 
      data-layout="standard" 
      data-action="like" 
      data-show-faces="false" 
      data-share="false">
      </div>
    
    </div>

    <div id="twitter">
      <a href="https://twitter.com/SynStudio" class="twitter-follow-button" data-show-screen-name="false" data-show-count="true">Follow</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>

  </div>
   
  <!-- Join Our Newsletter : start -->
  <?php 
  if($currentLang=="en"){ $newsletterPost = get_post(145); }
  else{ $newsletterPost = get_post(11014); }
  $newsletterTitle = $newsletterPost->post_title;
  $newsletterContent = apply_filters( 'the_content', $newsletterPost->post_content );
  $newsletterExcerpt = $newsletterPost->post_excerpt;
  echo "<div id='newsletter-box2' class='info-box2'>";
    echo '<h3>' . $newsletterTitle . '</h3>';
    echo "<div class='text-wrapper'>";
      echo "<div class='text'>";
        echo "<p>";
          echo $newsletterExcerpt;
        echo "</p>";
        echo $newsletterContent;
      echo "</div>";
    echo "</div>";
  echo "</div>";
  ?>
  <!-- Join Our Newsletter : end -->
   
      
</div> <!-- column 2: end -->  

</div> <!-- content: end -->

<?php get_footer(); ?>