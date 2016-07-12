<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
*/

/*
Template Name: Podcast Page
*/

get_header();
if (function_exists('pll_current_language')) { $currentLang = pll_current_language('slug'); }
?>

<div id="content" class="podcast"> <!-- content: start -->

 	<div id="col1"> <!-- column 1: start -->

    <?php 
    while ( have_posts() ) : the_post();
      echo "<h1>"; the_title(); echo "</h1>";
      the_content();
      $postID = get_the_ID();
    endwhile; 

		$cat = 'Podcasts';
		$catID = get_cat_ID($cat);
    query_posts('cat=' . $catID);
    
    while (have_posts()) : the_post();
      echo "<div class='podcast-boxWrapper'>";
      echo "<div class='podcast-box'>";
      $postIDPodcast = get_the_ID();
      echo '<h2><a href="' . get_permalink($postIDPodcast ) . '">' . get_the_title() . '</a></h2>';
	    echo "<div class='podcast-text'>";
      the_excerpt();
      echo "<style>.podcast-box p {width: 80%; float: left; padding-right: 34px;}"; 
      echo "@media only screen and (max-width: 640px) {";
	    echo ".podcast-box p {width: 80%; float: left; padding-right: 12px;}";
      echo "}";	
	    echo "</style>";
      echo "<div class='buttons'>";
      echo "<a href='";
      echo get_permalink( $postIDPodcast ); 
      echo "'>";
      echo "<img src='";
      echo get_post_meta($postIDPodcast, 'podcastsThumbnail', true);
      echo "' alt='' />";
      echo "</a>";
      echo "<a href='";
      echo get_permalink( $postIDPodcast ); 

      if ($currentLang == "en") {
        echo "' class='btn-play'>Play</a></div>";
      }
      else {
        echo "' class='btn-play'>écoutez</a></div>";
      }

      echo "</div>";
      echo "</div>";
      echo "</div>";
    endwhile;
    ?>	
       
  </div> <!-- column 1: end -->
  
  <div id="col2"> <!-- column 2: start -->
    
    <?php
    if ($currentLang=="en") {
      echo "<div class='info-box2'><h3>Coming...</h3><div class='text-wrapper'><div class='text'><p>";
      echo get_post_meta($postID, 'podcastsNextEpisodes_en', true);
      echo "</div></div></div> ";  
    }   
    else {
        $translationID = pll_get_post($postID,'en');
        echo "<div class='info-box2'><h3>À venir...</h3><div class='text-wrapper'><div class='text'><p>";
        echo get_post_meta($translationID, 'podcastsNextEpisodes_fr', true);
        echo "</div></div></div> ";         
      } 

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

      <!--<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com/SynStudio&amp;send=false&amp;
      layout=box_count&amp;width=55&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=90&amp;appId=223615814335068" 
      scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:65px; height:90px;" allowTransparency="true"></iframe>-->

    </div>

    <div id="twitter">

      <a href="https://twitter.com/SynStudio" class="twitter-follow-button" data-show-screen-name="false" data-show-count="true">Follow</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

      <!--<div class="twitter-sideBar">
        <?php
          echo getTwitterFollowers('SynStudio'); // see functions.php for reference
          echo '<div class="followers">Followers</div>';
        ?>
        <a href="https://twitter.com/share" class="twitter-share-button" data-dnt="true" data-count="none" data-via="SynStudio" data-text="I'm checking out Syn Studio Art School right now!">Tweet</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>-->
    
    </div>

  </div>
   
    <div id="btn-howToRegister"><a href="#">How to Register</a></div>
   
    <!-- Join Our Newsletter : start -->
    <?php
    $cat = 'General';
    $catID = get_cat_ID($cat);
    query_posts('cat=' . $catID);
    while (have_posts()) : the_post();
      $postID = get_the_ID();
      if ($postID = "145") { // Newsletter Post ID is 145
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
    
  </div> <!-- column 2: end -->  
  
</div> <!-- content: end -->

<?php get_footer(); ?>