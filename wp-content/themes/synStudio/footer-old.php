<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
	
$currentLang = qtrans_getLanguage();
?>
 <!-- footer: start -->
	<div id="footer">
 	<?php 
			if ($currentLang == "fr") {
		?>
 	<a href="/fr/home/">Accueil</a>   ||    <a href="/fr/about/">À propos de nous</a>    ||   <a href="/fr/classes/">Nos cours</a>     ||    <a href="/fr/workshops/">Nos ateliers</a>    ||    <a href="/fr/resources/">Ressources</a>    ||   <a href="http://synstudio.ca/blog/?lang=fr">Blogue</a>     ||  <a href="http://synstudio.ca/wp-content/uploads/2012/10/Politiques.pdf">Nos politiques</a>    ||   <a href="/fr/privacy-policy/">Politique de confidentialité</a>     ||     <a href="/fr/contact-us/">Contactez-nous</a>  
  <?
			}
			else {
		?>
 	<a href="/home">Home</a>   ||    <a href="/about">About</a>    ||   <a href="/classes">Classes</a>     ||    <a href="/workshops">Workshops</a>    ||    <a href="/resources">Resources</a>    ||   <a href="http://synstudio.ca/blog/">Blog</a>     ||  <a href="http://synstudio.ca/wp-content/uploads/2012/10/Policies.pdf">School Policies</a>    ||   <a href="/privacy-policy">Privacy Policy</a>     ||     <a href="/contact-us">Contact us</a>   
  <?php 
			}
		?>
			
  <br /><br />
  460 St. Catherine West, #804. Montreal. H3B 1A7
  <br /><br />
  &copy; <?php echo date("Y"); ?> SynStudio

 
 </div>
 <!-- footer: end -->
  
</div>
<?php wp_footer(); ?>
</body>
</html>