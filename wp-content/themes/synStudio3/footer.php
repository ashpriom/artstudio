<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
	
$currentLang = qtrans_getLanguage();
?>

<div id="footer">
 	<?php 
		if ($currentLang == "fr") { ?>
	 		<a href="/fr/home/">Accueil</a>   ||    <a href="/fr/about/">À propos de nous</a>    ||   <a href="/fr/classes/">Nos cours</a>     ||    <a href="/fr/workshops/">Nos ateliers</a>    ||    <a href="/fr/resources/">Ressources</a>    ||   <a href="http://synstudio.ca/blog/?lang=fr">Blogue</a>     ||  <a href="http://synstudio.ca/wp-content/uploads/2012/10/Politiques.pdf">Nos politiques</a>    ||   <a href="/fr/privacy-policy/">Politique de confidentialité</a>     ||     <a href="/fr/contact-us/">Contactez-nous</a>  
	  	<?php }
	
		else { ?>
	 		<a href="/home">Home</a>   ||    <a href="/about">About</a>    ||   <a href="/classes">Classes</a>     ||    <a href="/workshops">Workshops</a>    ||    <a href="/resources">Resources</a>    ||   <a href="http://synstudio.ca/blog/">Blog</a>     ||  <a href="http://synstudio.ca/wp-content/uploads/2012/10/Policies.pdf">School Policies</a>    ||   <a href="/privacy-policy">Privacy Policy</a>     ||     <a href="/contact-us">Contact us</a>   
	  	<?php } ?>
			
  	<br /><br />
  	460 St. Catherine West, #508. Montreal. H3B 1A7
  	<br /><br />
  	&copy; <?php echo date("Y"); ?> SynStudio

</div>

<!-- this closing div is for continuity from another file -->
</div>
<?php wp_footer(); ?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/test/css/jquery.sidr.light.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" type="text/css" media="screen">

<style>
#mobile-header { display: none; }
@media only screen and (max-width: 768px){
#mobile-header { display: block;}
#nav-wrapper { display: none; }
}
</style>

<script src="<?php echo get_template_directory_uri(); ?>/js/test/js/jquery.sidr.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.touchwipe.1.1.1.js"></script>

<script>
jQuery('#responsive-menu-button').sidr({
name: 'sidr-main',
<?php
    $currentLang = qtrans_getLanguage(); 
	if ($currentLang == "fr") { ?>
		source: '.menu-main-nav-fr-container'
	<?php }
				
	else { ?>
		source: '.menu-main-nav-container'
	<?php }			
?>
});

//jQuery( "#responsive-menu-button" ).bind( "click", function() {
//alert( "User clicked" ); });

jQuery( window ).load(function() {
	if(jQuery("#sidr-main").length !== 0) {        
			jQuery(".sidr-class-sub-menu").hide();      
			jQuery( "li.sidr-class-menu-item ul.sidr-class-sub-menu" ).each(function() {
			jQuery( this ).after("<div class='lnk-plus'>+</div>");
			});
			
            jQuery( ".lnk-plus" ).toggle(function() {
                            var id1= jQuery( this ).parent().attr("id");
                            jQuery("#" + id1 + " ul.sidr-class-sub-menu").show();
                            jQuery("#" + id1 + " .sidr-class-menu-item-has-children ul").hide();   
                            jQuery( this ).html("-");
            }, function() {
                            var id1= jQuery( this ).parent().attr("id");
                            jQuery("#" + id1 + " ul.sidr-class-sub-menu").hide();
                            jQuery( this ).html("+");
            });
	}
});

</script>

<!-- Menu effects for iPad and iPhone Only! -->
<script>
jQuery(document).ready(function($){
		var deviceAgent = navigator.userAgent.toLowerCase();
		var agentID = deviceAgent.match(/(ipad|iphone)/);
		if (agentID) {		
			jQuery('#responsive-menu-button').sidr({
				name: 'sidr-main',
				<?php
			    $currentLang = qtrans_getLanguage(); 
				if ($currentLang == "fr") { ?>
					source: '.menu-main-nav-fr-container'
				<?php }
							
				else { ?>
					source: '.menu-main-nav-container'
				<?php }
				?>
			});

			if(jQuery("#sidr-main").length !== 0) {
				jQuery(window).bind('touchstart click', function(){	
						//return false
				});
							            
		      	jQuery( ".lnk-plus" ).toggle(function() {
		        var id1= jQuery( this ).parent().attr("id");
		        jQuery("#" + id1 + " ul.sidr-class-sub-menu").show("slow");
		        jQuery("#" + id1 + " .sidr-class-menu-item-has-children ul").hide("slow");   
		        jQuery( this ).html("-");
		        }, function() {
                var id1= jQuery( this ).parent().attr("id");
                jQuery("#" + id1 + " ul.sidr-class-sub-menu").hide("slow");
                jQuery( this ).html("+");
            	});	

        	}					
 		}
});
</script>

<!-- Swipe to open or close mobile menu -->
<script>
      jQuery(window).touchwipe({
        wipeLeft: function() {
          // Close
          jQuery.sidr('close', 'sidr-main');
        },
        wipeRight: function() {
          // Open
          jQuery.sidr('open', 'sidr-main');
        },
        preventDefaultEvents: false
      });
</script>

<!-- Switch Between Mobile and Desktop Versions -->
<script src="<?php echo get_template_directory_uri(); ?>/js/responsible.js"></script>
<script>
  responsible.init({
    cssPath: 'http://synstudio.staging.wpengine.com/wp-content/themes/synStudio3/css/responsive.css', // path to responsive css file containing media queries
    desktopWidth: 1000, // the desired width of the mobile desktop view
    toggleThreshold: 768, // if the window is smaller than this width, the mobile toggle will display
    desktopToggleDisplay: true, // set to false to hide mobile toggle
	<?php
	if ($currentLang == "en") {
		echo "desktopToggleText: \"Switch to Mobile Version\",";
	}
	else {
		echo "desktopToggleText: \"changez a la version mobile\",";
	}   
	?>
  	//desktopToggleText: "Switch to Mobile Version", Text on the 'Back to mobile' Toggle
    mobileToggleDisplay: true, // set to false to hide mobile toggle
	<?php
	if ($currentLang == "en") {
		echo "mobileToggleText: \"Switch to Desktop Version\",";
	}
	else {
		echo "mobileToggleText: \"changez a la version bureau\",";
	}
	?>
	//mobileToggleText: "Switch to Desktop Version", // Text on the 'View full site' Toggle
    mobileToggleAlign: 'right', // right or left
    mobileToggleBottom: '0px' // offset from bottom
    });
</script>

<noscript><p><img src="http://192.168.2.200/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>

</body>
</html>
