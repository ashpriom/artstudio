<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */

get_header(); ?>

	<!-- content: start -->
	<div id="content" class="home" style="text-align:center; color: #747474; padding: 50px 0;">

		<?php 
		$currentLang = qtrans_getLanguage(); 

		if ($currentLang == "en") {
		?>
			<h1>Page not found</h1>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<a href="http://synstudio.ca/contact-us/" title="Contact Us" style="font-size: 14px; color: #ED780B;">Feel free to contact us</a>
	
		<?	
		}
		else{
		?>
			<h1>Page non trouvée</h1>
			<p>Désolé, mais vous cherchez quelque chose qui n'est pas ici.</p>
			<a href="http://synstudio.ca/fr/contact-us/" title="Contactez-nous" style="font-size: 14px; color: #ED780B;">N'hésitez pas à nous contacter</a>
	
		<?	
		}
		?>


	</div>
	<!-- content: end -->

<?php get_footer(); ?>




		
		