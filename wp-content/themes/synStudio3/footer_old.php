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
  460 St. Catherine West, #508. Montreal. H3B 1A7
  <br /><br />
  &copy; <?php echo date("Y"); ?> SynStudio

 
 </div>
 <!-- footer: end -->
  
</div>
<?php wp_footer(); ?>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://192.168.2.200/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="http://192.168.2.200/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

</body>
</html>
