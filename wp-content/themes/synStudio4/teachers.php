<?php

  /**
   * @package WordPress
   * @subpackage SynStudio_Theme
   */
  /*
  Template Name: Teachers Page
   */

  get_header();
  if (function_exists('pll_current_language')) { $currentLang = pll_current_language('slug'); } 

?>

<!-- content: start -->
<div id="content" class="podcast">

 	<div id="col1">   
    
    <?php while ( have_posts() ) : the_post(); ?>
    <?php echo "<h1>"; the_title(); echo "</h1>"; ?> 
    <?php the_content(); ?>
    <?php $postID = get_the_ID(); ?>
    <?php 
      endwhile; // end of the loop. 
    ?>
		
    <?php
			switch ($postID){
							case 135:
											if($currentLang=="en"){
                       $cat = 'Podcasts';
                      }
                      else{
                       $cat = 'Podcasts-Fr';  
                      }
											break;
							case 235:
											if($currentLang=="en"){
                       $cat = 'Workshops';
                      }
                      else{
                       $cat = 'Ateliers';  
                      }
                      break;
							case 239:
                      if($currentLang=="en"){
                       $cat = 'Videos';
                      }
                      else{
                       $cat = 'Videos-Fr';  
                      }
                      break;
              case 953:
                      if($currentLang=="en"){
          					   $cat = 'Teachers';
                      }
                      else{
                       $cat = 'Professeurs';  
                      }
          					  
                      echo "<style>";
            						echo ".podcast #col1 {position: inherit; width: 100%}";
            						echo ".podcast #col1 p {clear: both;}";
            						echo ".podcast #col2 {display: none;}";
            						echo ".teacher-boxWrapper .teacher-box {height: 530px;}";
            						echo ".teachers-thumb {float: left; margin-right: 43px; margin-bottom: 12px;}";
            						echo ".teachers-art img {height: 152px;}";
            						echo ".podcast-boxWrapper h2 {font-size: 18px; margin-bottom: 10px;}";
            						echo " -webkit-line-clamp: 4";
            						echo "-webkit-box-orient: vertical;";
          						echo "</style>";
                      break;
              case 11042:
                      if($currentLang=="en"){
                        $cat = 'Teachers';
                      }
                      else{
                        $cat = 'Professeurs';  
                      }

                      echo "<style>";
                        echo ".podcast #col1 {position: inherit; width: 100%}";
                        echo ".podcast #col1 p {clear: both;}";
                        echo ".podcast #col2 {display: none;}";
                        echo ".teacher-boxWrapper .teacher-box {height: 530px;}";
                        echo ".teachers-thumb {float: left; margin-right: 43px; margin-bottom: 12px;}";
                        echo ".teachers-art img {height: 152px;}";
                        echo ".podcast-boxWrapper h2 {font-size: 18px; margin-bottom: 10px;}";
                        echo " -webkit-line-clamp: 4";
                        echo "-webkit-box-orient: vertical;";
                      echo "</style>";
                      break;        
              case 3123:
                      if($currentLang=="en"){
                        $cat = 'Testimonials';
                      }
                      else{
                        $cat = 'Témoignages';  
                      }
                      break;        
			}			
   
    $catID = get_cat_ID($cat);
    query_posts('cat=' . $catID);

    /*query_posts(array(
        'orderby' => 'ASC',
        'category_id' => $catID,
    ));*/
    
    while (have_posts()) : the_post();
      echo "<div class='teacher-boxWrapper'>";
      echo "<div class='teacher-box'>";
      echo '<h2>' . get_the_title() . '</h2>';

      if ($cat=="Teachers" || $cat=="Professeurs"){
        $postIDTeacher = get_the_ID();
        if($currentLang=="en"){
          echo "<div class='teachers-thumb'><img src='";
          echo get_post_meta($postIDTeacher, 'teacherImageUrl' , true);
          echo "' /></div>";
          
          //Add Teachers Art Image: start 
          echo "<div class='teachers-art'><img src='";
          echo get_post_meta($postIDTeacher, 'teacherArtUrl' , true);
          echo "' /></div>";
        }

        else{
          if(function_exists('pll_get_post')){ $translationID = pll_get_post($postIDTeacher,'en'); }
          echo "<div class='teachers-thumb'><img src='";
          echo get_post_meta($translationID, 'teacherImageUrl' , true);
          echo "' /></div>";
          
          //Add Teachers Art Image: start 
          echo "<div class='teachers-art'><img src='";
          echo get_post_meta($translationID, 'teacherArtUrl' , true);
          echo "' /></div>";
        }
      }

  		?>	
      <p>
        <?php the_content(); ?>
      </p>
      <?php
      echo "</div>";
      echo "</div>";
    
    endwhile;
    
    ?>	
       
  </div>

  <div id="col2">
  
		<?php
    if ($cat=="Podcasts") {
      if ($currentLang=="en") {
        echo "<div class='info-box2'><h3>Coming...</h3><div class='text-wrapper'><div class='text'><p>";
        echo get_post_meta($postID, 'podcastsNextEpisodes_en', true);
        echo "</div></div></div> ";  
      }   
      else {
        echo "<div class='info-box2'><h3>À venir...</h3><div class='text-wrapper'><div class='text'><p>";
        echo get_post_meta($postID, 'podcastsNextEpisodes_fr', true);
        echo "</div></div></div> ";         
      } 
        
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
        'category_id' => '110' //You can insert any category ID too.
      )); 
    }
	

    while (have_posts()) : the_post();
      echo "<div class='info-box2'>";
      echo '<h3>' . get_cat_name($catID) . '</h3>';
      echo "<div class='text-wrapper'><div class='text'>";
      the_excerpt();
			echo "<a class='lnk-readMore' href='/testimonials'>Read More</a>";
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
   
      
  </div>
</div>

<?php get_footer(); ?>