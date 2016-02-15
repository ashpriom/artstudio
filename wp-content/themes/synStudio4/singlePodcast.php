<?php
get_header(); 
if (function_exists('pll_current_language')) { $currentLang = pll_current_language('slug'); }
?>

<div id="content" class="general-page podcast"> <!-- content: start -->
	<meta name="twitter:image:src" content="<?php echo get_post_meta($postIDPodcast, 'podcastsImage', true); ?>"/>
	<meta property="og:image" content="<?php echo get_post_meta($postIDPodcast, 'podcastsImage', true); ?>" />
	<meta itemprop="image" content="<?php echo get_post_meta($postIDPodcast, 'podcastsImage', true); ?>"/>
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
					if ($currentLang == "en") { echo "<div class='alert'>".get_post_meta($postIDPodcast, 'podcastsAudioAlert_en', true)."</div>"; }
					else { echo "<br><div class='alert'>".get_post_meta($postIDPodcast, 'podcastsAudioAlert_fr', true)."</div>"; }
					echo "</div>";
					?>

					<?php 
					$postyear = get_the_date('Y'); // don't show player twice for older podcasts
					if($postyear != "2012" && $postyear != "2013" && $postyear != "2014"){
						echo get_post_meta($postIDPodcast, 'podcastsIframe', true);
					}
					?>

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
      							<!--<form action="//synstudio.us2.list-manage.com/subscribe/post?u=23c298529438530e62af0db46&amp;id=623da952bd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
     								<p><input type="text" placeholder="Prénom" value="" name="FNAME" class="" id="mce-FNAME"></p>
     								<p><input type="email" required="" placeholder="Adresse électronique" id="mce-EMAIL" class="email" name="EMAIL" value=""></p>
									<p><input type="checkbox" value="1" name="group[9197][1]" id="mce-group[9197]-9197-0" checked="true"><label for="mce-group[9197]-9197-0">Podcasts, vidéos, tutoriaux, entrevues et articles de Syn Studio</label></p>
									<p><input type="checkbox" value="2" name="group[9197][2]" id="mce-group[9197]-9197-1" checked="true"><label for="mce-group[9197]-9197-1">Sessions de modèles vivants, ateliers, cours, événements spéciaux et nouvelles de Syn Studio</label></p>
     								<div class="clear"><input type="submit" class="button" id="mc-embedded-subscribe" name="subscribe" value="Abonnez-vous" onclick="_gaq.push(['_trackEvent', 'Newsletter FR', 'Join Our Newsletter', 'Subscribe']);" ></div>
      							</form>-->
      							<div id="mc_embed_signup"> <!-- Begin MailChimp Signup Form -->
            						<form action="//synstudio.us2.list-manage.com/subscribe/post?u=23c298529438530e62af0db46&amp;id=f3d0db5d90" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              							<div id="mc_embed_signup_scroll">
                							<div class="mc-field-group">
                								<input type="text" value="" name="FNAME" placeholder="Prénom" class="" id="mce-FNAME">
              								</div>
              								<div class="mc-field-group">
                								<input type="email" value="" name="EMAIL" placeholder="Adresse e-mail" class="required email" id="mce-EMAIL">
            								</div>
								            <div class="mc-field-group input-group">
								                <ul>
								                	<li><input type="checkbox" value="1" checked="true" name="group[9197][1]" id="mce-group[9197]-9197-0"><label for="mce-group[9197]-9197-0">Podcasts, vidéos, tutoriaux, entrevues et articles de Syn Studio</label></li>
								            		<li><input type="checkbox" value="2" checked="true" name="group[9197][2]" id="mce-group[9197]-9197-1"><label for="mce-group[9197]-9197-1">Sessions de modèles vivants, ateliers, cours, événements spéciaux et nouvelles de Syn Studio</label></li>
								            	</ul>
								            </div>
								            <div id="mce-responses" class="clear">
								                <div class="response" id="mce-error-response" style="display:none"></div>
								                <div class="response" id="mce-success-response" style="display:none"></div>
								            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								            <div style="position: absolute; left: -5000px;"><input type="text" name="b_23c298529438530e62af0db46_f3d0db5d90" tabindex="-1" value=""></div>
								            <div class="clear"><input type="submit" value="Abonnez-vous" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
								        </div>
								    </form>
								</div><!--End mc_embed_signup-->
     						</div>
						</div>
					<?php } ?>
				</div>
			</div>
   		</div> 
    	<?php endwhile; // end of the loop. ?>
	
	</div> <!-- col-1 ends -->
  	<div> <?php get_sidebar(); ?> </div>		
</div> <!-- content: end -->

<?php get_footer(); ?>