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
   	  <div id="facebook">
				<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com/SynStudio&amp;send=false&amp;layout=box_count&amp;width=55&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=90&amp;appId=223615814335068" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:65px; height:90px;" allowTransparency="true"></iframe> 
      </div>
    
      <div id="twitter">
        <div style="border: 1px solid #c9c9c9; background: #FFF; width: 65px; height: 32px; line-height: 28px; text-align: center; color: #333;	font-size: 13px; float: left;">
          <?php
          echo getTwitterFollowers('SynStudio');
          echo '<div style="font-size: 10px;margin-top: -16px;">Followers</div>';
          ?>
          <a href="https://twitter.com/share" class="twitter-share-button" data-dnt="true" data-count="none" data-via="SynStudio" data-text="I'm checking out Syn Studio Art School right now!">Tweet</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
      </div>
    </div>
   
   <div id="btn-howToRegister"><a href="#">How to Register</a></div>
   
   <!-- Join Our Newsletter : start -->
   <?php
   if($currentLang=="en"){$cat = 'General';} else{$cat = 'Uncategorized';}
   $catID = get_cat_ID($cat);
   
   query_posts('cat=' . $catID);
   while (have_posts()) : the_post();
   
   $postID = get_the_ID();
   if($currentLang=="en"){$postID="145";} else{$postID="11014";}
   if ($postID = "145" || $postID="11014") {
   //echo $postID;
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
   <!-- Join Our Newsletter : end -->
   
      
  </div>
  <!-- column 2: end -->  

  
  
	</div>
	<!-- content: end -->

<?php get_footer(); ?>