<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage SynStudio

 */
$currentLang = qtrans_getLanguage(); 
?>
	
  <!-- column 2: start -->
  <div id="col2">

			<?php
   //$cat = 'Testimonials';
   $catID = '10';
   
   //query_posts('cat=' . $catID . '&showposts=1');
			query_posts(array(
				'showposts' => 1,
				'orderby' => 'rand',
				'category_name' => 'Testimonials' //You can insert any category name
			));
   while (have_posts()) : the_post();
   echo "<div class='info-box2'>";
   echo '<h3>' . get_cat_name($catID) . '</h3>';
   echo "<div class='text-wrapper'><div class='text'>";
   the_excerpt();
			
			if ($currentLang == "en") {
				echo "<a class='lnk-readMore' href='/testimonials'>Read More</a>";
			}
			else {
				echo "<a class='lnk-readMore' href='/fr/testimonials/'>En savoir plus</a>";
			}
   echo "</div></div>";
   echo "</div>";
   endwhile;
    ?>	
   
   <div id="share-plugins">
   	<!-- Facebook like : Start -->
    <div id="facebook">
					<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com/SynStudio&amp;send=false&amp;layout=box_count&amp;width=55&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=90&amp;appId=223615814335068" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:55px; height:90px;" allowTransparency="true"></iframe> 
    </div>
    <!-- Facebook like : end -->
    <!-- Twitter: start -->
    <div id="twitter">
    
    	<div class="twitter-sideBar">
<?php
echo getTwitterFollowers('SynStudio');
echo '<div class="followers">Followers</div>';
?>

    <a href="https://twitter.com/share" class="twitter-share-button" data-dnt="true" data-count="none" data-via="SynStudio" data-text="I'm checking out Syn Studio Art School right now!">Tweet</a>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    
					</div>
</div>
    <!-- Twitter: end -->
   </div>

<? 
if ($currentLang == "en") {
?>
    <div id="btn-findMoreClasses"><a href="http://synstudio.ca/classes/"><span>Register Now</span></a></div>   

<?	
}
else{
?>
    <div id="btn-findMoreClasses"><a href="http://synstudio.ca/fr/classes/"><span>Apprendre plus</span></a></div>   

<?	
}
?>   

   
  </div>
  <!-- column 2: end -->
