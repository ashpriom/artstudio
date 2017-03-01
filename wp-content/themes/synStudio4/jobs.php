<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
/*
Template Name: Jobs Page
 */
get_header(); 
if (function_exists('pll_current_language')) { $currentLang = pll_current_language('slug'); }
?>

	<!-- content: start -->
	<div id="content" class="podcast">

 	<!-- column 1: start -->
 	<div id="col1">   
   <!-- title: start -->
     <?php while ( have_posts() ) : the_post(); ?>
      <?php echo "<h1>"; the_title(); echo "</h1>"; ?>
      <?php the_content(); ?>
     <?php endwhile; // end of the loop. ?> 
   <!-- title: end -->
			<?php
   
   if($currentLang=="en"){ $cat = 'Jobs'; }
   else{ $cat = 'Emplois'; }

   $catID = get_cat_ID($cat);
   
   query_posts('cat=' . $catID);
   while (have_posts()) : the_post();
   echo "<div class='podcast-boxWrapper' style='margin-top: 10px;'>";
   echo "<div class='podcast-box'>";
   echo '<h2>' . get_the_title() . '</h2>';
   echo '<span>' . get_the_date() . '</span>';
   the_content();
   echo "</div>";
   echo "</div>";
   endwhile;
    ?>	
       
  </div>
  <!-- column 1: end -->
  
  <!-- column 2: start -->
  <div id="col2" style="margin-top: 0px;">
    
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
   
      
  </div>
  <!-- column 2: end -->  
  
	</div>
	<!-- content: end -->


<?php get_footer(); ?>