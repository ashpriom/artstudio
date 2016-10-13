<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 * Template Name: Resources Page
**/
get_header();
if (function_exists('pll_current_language')) { $currentLang = pll_current_language('slug'); }
?>

<!-- content: start -->
<div id="content" class="classes-byCategory">

  <!-- column 1: start -->
	<?php while ( have_posts() ) : the_post(); ?>
    <?php echo "<h1>"; the_title(); echo "</h1>"; ?>
  	<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>
  <!-- column 1: end -->

  <!-- column 2: start -->
  <?php if ($currentLang == "en") { ?>
	   <div id='newsletter-box' class='info-box10Wrapper'>
		    <div class='info-box10'>
				<h2>Learn More…</h2>
				<p>
					Stay informed about <b>Syn Studio life-drawing sessions</b>, new art classes and workshops with <b>top local and international artists and instructors</b>, free student art shows with wine and cheese, free portfolio reviews and other important local art events. <br />
					Also, get the latest news about about all of our great industry artist podcasts, interviews, tutorials, articles, videos and other material created just for you: the artist. <br />
					Just enter your first name and email in the fields to the right and then click on the big orange "subscribe" button to join the ever growing number of artists in our community.
				</p>
        <div class='mailform2'>
					<form action="//synstudio.us2.list-manage.com/subscribe/post?u=23c298529438530e62af0db46&amp;id=623da952bd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div class='mailtextboxes'>
							<div class='mailtextboxes-first'>
								<input type="text" placeholder="First Name" value="" name="FNAME" class="" id="mce-FNAME">
							</div>
							<div class='mailtextboxes-last'>
								<input type="email" required="" placeholder="Email Address" id="mce-EMAIL" class="email" name="EMAIL" value="">
							</div>
							<div class='mailtextboxes-checkboxes'>
								<input type="checkbox" value="1" name="group[9193][1]" id="mce-group[9193]-9193-0" checked="true"><label for="mce-group[9193]-9193-0">Syn Studio podcasts, videos, tutorials, interviews and articles.</label><br />
								<input type="checkbox" value="2" name="group[9193][2]" id="mce-group[9193]-9193-1" checked="true"><label for="mce-group[9193]-9193-1">Syn Studio life drawing, workshops, classes, parties and news.</label>
								<input type="submit" id="mc-embedded-subscribe" name="subscribe" value="Subscribe" onclick="_gaq.push(['_trackEvent', 'Newsletter EN', 'Join Our Newsletter', 'Subscribe']);" >
							</div>
						</div>
					</form>
			 	</div>
			  </div>
		</div>

    <?php }	else { ?>

	  <div id='newsletter-box' class='info-box10Wrapper-fr'>
		<div class='info-box10'>
			<h2>Bien plus encore..</h2>
			<p>
				Restez informés à propos des <b>sessions de modèles vivants</b>, des nouveaux cours ainsi que des ateliers avec Syn Studio avec <b>les meilleurs artistes et instructeurs locaux et internationaux</b>.Participez à des événements gratuits pour les étudiants, des critiques de portfolios gratuites ainsi que d'autres événements locaux de la scène artistique montréalaise.<br />
				Mais en plus, soyez au courant de nos derniers podcasts exclusifs, entrevues, tutoriaux, articles, vidéos ainsi que d'autres matériels créés pour vous, les artistes.<br />
				Il vous suffit juste d'entrer votre prénom et votre courriel en bas à droite puis cliquez sur le bouton "s'inscrire" pour rejoindre les milliers d'artistes que forment déjà notre communauté !
			</p>
	    <div class='mailform2'>
				<form action="//synstudio.us2.list-manage.com/subscribe/post?u=23c298529438530e62af0db46&amp;id=623da952bd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div class='mailtextboxes'>
						<div class='mailtextboxes-first'>
							<input type="text" placeholder="Prénom" value="" name="FNAME" class="" id="mce-FNAME">
						</div>
						<div class='mailtextboxes-last'>
							<input type="email" required="" placeholder="Adresse électronique" id="mce-EMAIL" class="email" name="EMAIL" value="">
						</div>
						<div class='mailtextboxes-checkboxes'>
							<input type="checkbox" value="1" name="group[9197][1]" id="mce-group[9197]-9197-0" checked="true"><label for="mce-group[9197]-9197-0">Podcasts, vidéos, tutoriaux, entrevues et articles de Syn Studio</label><br />
							<input type="checkbox" value="2" name="group[9197][2]" id="mce-group[9197]-9197-1" checked="true"><label for="mce-group[9197]-9197-1">Sessions de modèles vivants, ateliers, cours, événements spéciaux et nouvelles de Syn Studio</label>
							<input type="submit" class="button" id="mc-embedded-subscribe" name="subscribe" value="S'inscrire" onclick="_gaq.push(['_trackEvent', 'Newsletter FR', 'Join Our Newsletter, 'S'inscrire']);">
						</div>
					</div>
				</form>
			</div>
		</div>
	  </div>

	<?php } ?> <!-- column 2: end -->

</div> <!-- content: end -->

<?php get_footer(); ?>
