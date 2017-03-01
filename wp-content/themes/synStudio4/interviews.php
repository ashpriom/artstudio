<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
/*
Template Name: Interview Page
 */
get_header();
if (function_exists('pll_current_language')) { $currentLang = pll_current_language('slug'); }

?>

<div id="content" class="podcast"> <!-- content: start -->
  <div id="col1"> <!-- column 1: start -->
    <?php while ( have_posts() ) : the_post(); ?>
      <?php echo "<h1>"; the_title(); echo "</h1>"; ?> 
      <?php the_content(); ?>
      <?php $postID = get_the_ID(); ?>
    <?php endwhile; // end of the loop. ?>
    <?php

    if($currentLang=="en"){ $cat = 'Interviews'; }
    else{ $cat = 'Entrevues';}
    
    $catID = get_cat_ID($cat);
    query_posts('cat=' . $catID);
    while (have_posts()) : the_post();
      echo "<div class='podcast-boxWrapper'>";
      echo "<div class='podcast-box'>";
      $postIDInterviews = get_the_ID();
      echo '<h2><a href="' . get_permalink($postIDInterviews ) . '">' . get_the_title() . '</a></h2>';
      echo "<div class='podcast-text'>";
      echo the_excerpt();
      echo "<style>.podcast-box p {width: 80%; float: left; padding-right: 2%;}"; 
      echo "@media only screen and (max-width: 640px) {";
      echo ".podcast-box p {width: 80%; float: left; padding-right: 2%;}";
      echo "}"; 
      echo "</style>";
      echo "<div class='buttons2'>";
      echo "<a href='";
      echo get_permalink( $postIDInterviews ); 
      echo "'>";
      echo "<img src='";
      echo get_post_meta($postIDInterviews, 'podcastsThumbnail', true);
      echo "' alt='' />";
      echo "</a>";
      echo "<a href='";
      echo get_permalink( $postIDInterviews ); 

      if ($currentLang == "en") {
        echo "' class='btn-play'>Read More</a></div>"; 
      }
      else {
        echo "' class='btn-play'>La suite</a></div>"; 
      }    
      echo "</div>";
      echo "</div>";
      echo "</div>";
    endwhile;
    ?>	
       
  </div> <!-- column 1: end -->
  
  <div id="col2"> <!-- column 2: start -->
    
    <?php
    if($currentLang=="en"){  
  $catID = '10';
  query_posts(array(
    'showposts' => 1,
    'orderby' => 'rand',
    'category_name' => 'Testimonials' //You can insert any category name
  ));
}

else{
  $catID = '110';
  query_posts(array(
    'showposts' => 1,
    'orderby' => 'rand',
    'category_name' => 'testimonials-fr' //You can insert any category name
  )); 
}

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
    
    <!--<div id="facebook">-->
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