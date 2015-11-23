<?php
get_header(); 
$currentLang = qtrans_getLanguage(); 
?>

	<!-- content: start -->
	<div id="content" class="general-page podcast">
  <div id="col1">

     <?php while ( have_posts() ) : the_post(); ?>
 
      <?php echo "<h1>" . get_the_title() . "</h1>"; ?>

   <div class="podcast-boxWrapper">
    <div class="podcast-box">

<div class="podcontent">
<?php
 $postIDPodcast = get_the_ID();   
	
	echo "<div class='main-text'>"; 
	echo "<div class='image-description'>";
	echo "<img width='178' height='300' alt='' src='".get_post_meta($postIDPodcast, 'podcastsImage', true)."'>";
	echo "<div class='image-description-text'>";
	the_excerpt();
	echo "</div>";
	echo "</div>";
	
	echo "<div class='podcast-topplayer'>";
	echo get_post_meta($postIDPodcast, 'podcastsIframe', true);
	echo "</div>";
	
	the_content();
	
	if ($currentLang == "en") {
		echo "<div class='alert'>".get_post_meta($postIDPodcast, 'podcastsAudioAlert_en', true)."</div>";
	}
	else {
		echo "<div class='alert'>".get_post_meta($postIDPodcast, 'podcastsAudioAlert_fr', true)."</div>";
	}
	echo "</div>";
?>

<?php echo get_post_meta($postIDPodcast, 'podcastsIframe', true); ?>

	<?php if ($currentLang == "en") { ?>
	<div class='mailcall1'>
		<h2>Even More…</h2>
		<p>This interview is part of a series of exclusive Concept Art, Illustration, VFX, 3D and Comics Podcasts created by Syn Studio. If you enjoyed this podcast please share it with your friends. And please sign up below for our newsletter to keep informed about all of our great podcasts, interviews, tutorials, articles, videos and other material created for you: the artist.</p>
     <div class='mailform1'>
      <form action="//synstudio.us2.list-manage.com/subscribe/post?u=23c298529438530e62af0db46&amp;id=623da952bd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      
     <p><input type="text" placeholder="First Name" value="" name="FNAME" class="" id="mce-FNAME"></p>
    
     <p><input type="email" required="" placeholder="Email Address" id="mce-EMAIL" class="email" name="EMAIL" value=""></p>

		<p><input type="checkbox" value="1" name="group[9193][1]" id="mce-group[9193]-9193-0" checked="true"><label for="mce-group[9193]-9193-0">Syn Studio podcasts, videos, tutorials, interviews and articles.</label></p>
		<p><input type="checkbox" value="2" name="group[9193][2]" id="mce-group[9193]-9193-1" checked="true"><label for="mce-group[9193]-9193-1">Syn Studio life drawing, workshops, classes, parties and news.</label></p>
     
      <div class="clear"><input type="submit" class="button" id="mc-embedded-subscribe" name="subscribe" value="Subscribe" onclick="_gaq.push(['_trackEvent', 'Newsletter EN', 'Join Our Newsletter', 'Subscribe']);" ></div>
      </form>
     </div>   
	</div>
    <?php }	else { ?>
	<div class='mailcall1'>
		<h2>Bien plus encore..</h2>
		<p>Cette entrevue fait partie d’une série exclusive dédiée à la conception artistique, à l'illustration, aux effets visuels, à la 3D et à la bande dessinée et créée par l’équipe de Syn Studio. Si vous avez aimé ce podcast, n’hésitez pas à le partager avec vos ami(e)s. Vous pouvez aussi vous abonner à notre bulletin électronique (ci-dessous) pour rester informé sur les prochains podcasts, entrevues, tutoriaux, articles, vidéos, et autres matériels exclusifs conçus pour vous, l'artiste.</p>
     <div class='mailform1'>
      <form action="//synstudio.us2.list-manage.com/subscribe/post?u=23c298529438530e62af0db46&amp;id=623da952bd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      
     <p><input type="text" placeholder="Prénom" value="" name="FNAME" class="" id="mce-FNAME"></p>
     
     <p><input type="email" required="" placeholder="Adresse électronique" id="mce-EMAIL" class="email" name="EMAIL" value=""></p>

		<p><input type="checkbox" value="1" name="group[9197][1]" id="mce-group[9197]-9197-0" checked="true"><label for="mce-group[9197]-9197-0">Podcasts, vidéos, tutoriaux, entrevues et articles de Syn Studio</label></p>
		<p><input type="checkbox" value="2" name="group[9197][2]" id="mce-group[9197]-9197-1" checked="true"><label for="mce-group[9197]-9197-1">Sessions de modèles vivants, ateliers, cours, événements spéciaux et nouvelles de Syn Studio</label></p>
     
      <div class="clear"><input type="submit" class="button" id="mc-embedded-subscribe" name="subscribe" value="Subscribe" onclick="_gaq.push(['_trackEvent', 'Newsletter EN', 'Join Our Newsletter', 'Subscribe']);" ></div>
      </form>
     </div>   
	</div>
	<?php } ?>




</div>

    </div>
   </div> 
     <?php endwhile; // end of the loop. ?>

  </div>
  <div>
  <?php get_sidebar(); ?>
  		
  </div>
		
			
		
	</div>

	<!-- content: end -->

<?php get_footer(); ?>
