<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage SynStudio
 */

if (function_exists('pll_current_language')) { $currentLang = pll_current_language('slug'); }

?>


<div id="col2"> <!-- column 2: start -->

  <?php

    if($currentLang=="en"){
      $catID = '10';
      query_posts(array(
    		'showposts' => 1,
    		'orderby' => 'date',
        'order' => 'desc',
    		'category_name' => 'Testimonials' // Standard WordPress Category Query. Replace category name to  reuse in other pages
    	));
    }

    else{
      $catID = '110';
      query_posts(array(
        'showposts' => 1,
        'orderby' => 'date',
        'order' => 'desc',
        'category_name' => 'testimonials-fr'
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
    <!--<div style="margin-bottom:10px; margin-top:40px;">-->

      <div id="fb-root"></div>
      
      <!--<?php if($currentLang=="en"){ ?>

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
      </div>-->

      <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com/SynStudio&amp;send=false&amp;
      layout=box_count&amp;width=55&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=90&amp;appId=223615814335068" 
      scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:65px; height:90px;" allowTransparency="true"></iframe>

    </div>

    <div id="twitter">

      <!--<a href="https://twitter.com/SynStudio" class="twitter-follow-button" data-show-count="true">Follow</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>-->

      <div class="twitter-sideBar">
        <?php
          echo getTwitterFollowers('SynStudio'); // see functions.php for reference
          echo '<div class="followers">Followers</div>';
        ?>
        <a href="https://twitter.com/share" class="twitter-share-button" data-dnt="true" data-count="none" data-via="SynStudio" data-text="I'm checking out Syn Studio Art School right now!">Tweet</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
    
    </div>

  </div>

  <?php if ($currentLang == "en") { ?>
    <div id="btn-findMoreClasses"><a href="/classes/"><span>Register Now</span></a></div>
  <?php	} else{ ?>
    <div id="btn-findMoreClasses"><a href="/cours-arts/"><span>Apprendre plus</span></a></div>
  <?php	} ?>

</div> <!-- column 2: end -->