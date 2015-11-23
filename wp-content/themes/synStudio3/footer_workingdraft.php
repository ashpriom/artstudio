<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
	
$currentLang = qtrans_getLanguage();
?>

<!-- Footer menu and address: start -->
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
<!-- Footer menu and address: end -->

</div>

<?php wp_footer(); ?>

<!-- Include Sidr bundled CSS theme -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/test/css/jquery.sidr.light.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" type="text/css" media="screen">

<style>
#mobile-header {
display: none;
}

@media only screen and (max-width: 768px){
#mobile-header {
display: block;
}


#nav-wrapper {
	display: none;
}

}
</style>

<!-- Include the Sidr JS -->
<script src="http://sandbox.synstudio.ca/wp-content/themes/synStudio/js/test/js/jquery.sidr.min.js"></script>
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
//alert( "User clicked" );
//});
jQuery( window ).load(function() {
	if(jQuery("#sidr-main").length !== 0) {        
			jQuery(".sidr-class-sub-menu").hide();      
			jQuery( "li.sidr-class-menu-item ul.sidr-class-sub-menu" ).each(function() {
			jQuery( this ).after("<div class='lnk-plus'>+</div>");
			});
			
            jQuery( ".lnk-plus" ).toggle(function() {
            //alert( "First handler for .toggle() called." );
                            var id1= jQuery( this ).parent().attr("id");
                            jQuery("#" + id1 + " ul.sidr-class-sub-menu").show();
                            jQuery("#" + id1 + " .sidr-class-menu-item-has-children ul").hide();   
                            jQuery( this ).html("-");
            }, function() {
            //alert( "Second handler for .toggle() called." );
                            var id1= jQuery( this ).parent().attr("id");
                            jQuery("#" + id1 + " ul.sidr-class-sub-menu").hide();
                            jQuery( this ).html("+");
            });
	}


//Hammer(document.getElementById('sidr-main')).on('swipeleft', function(e) {
        //$('.slide-in').toggleClass('on');   
  //      $('#sidr-main').toggleClass('on');
    //    $('#wrapper').toggleClass('on');
        //outIn = 'in';
//});





});

</script>

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

			//jQuery( window ).load(function() {
				if(jQuery("#sidr-main").length !== 0) {
					
					//var flag = false;
					jQuery(window).bind('touchstart click', function(){	
						//if (!flag) {
    					//	flag = true;
    					//	setTimeout(function(){ flag = false; }, 100);
    						// do something								
							//jQuery(".sidr-class-sub-menu").hide("slow");
						//}
						//return false
					});
					

					//jQuery( "li.sidr-class-menu-item ul.sidr-class-sub-menu" ).each(function() {
			 		//jQuery( this ).after("<div class='lnk-plus'>+</div>");
					//});	//alert( "start." );
		            
		            
		            jQuery( ".lnk-plus" ).toggle(function() {
		            		//alert( "First handler for .toggle() called." );
		                    var id1= jQuery( this ).parent().attr("id");
		                    jQuery("#" + id1 + " ul.sidr-class-sub-menu").show("slow");
		                    jQuery("#" + id1 + " .sidr-class-menu-item-has-children ul").hide("slow");   
		                    jQuery( this ).html("-");
		            }, function() {
		            		//alert( "Second handler for .toggle() called." );
                            var id1= jQuery( this ).parent().attr("id");
                            jQuery("#" + id1 + " ul.sidr-class-sub-menu").hide("slow");
                            jQuery( this ).html("+");
            		});	

        		}			
		//alert( "User clicked" );
 		}
 	//});
});

</script>

<script>



//$(document).ready(function(e) {
     
  //  var startX, curX, startY, curY;
   // var newXScroll, newYScroll, genXScroll;
     
   // function sideBarHeight() { 

     //   var docHeight = $(document).height();
      //  var winHeight = $(window).height();
         
       // $('.slide-in').height(winHeight);
       // $('#sidr-main').height(winHeight);
       // $('#sub-container').height($('#sub-container').height());
    //} 
     
    // Run the function on resize and when the page loads!
    //$(window).resize(function() {
      //  sideBarHeight();
    //}); sideBarHeight();

</script>



<script>
      $(window).touchwipe({
        wipeLeft: function() {
          // Close
          $.sidr('close', 'sidr-main');
        },
        wipeRight: function() {
          // Open
          $.sidr('open', 'sidr-main');
        },
        preventDefaultEvents: false
      });
</script>

<script>

//var outIn = 'in';
 
//Hammer(document.getElementById('sidr-main')).on('swiperight', function(e) {
//        $('.slide-in').toggleClass('on');       
 //       $('#sidr-main').toggleClass('on');
 //       outIn = 'out';
         
//});
 
//Hammer(document.getElementById('sidr-main')).on('swipeleft', function(e) {
//        $('.slide-in').toggleClass('on');   
//        $('#sidr-main').toggleClass('on');
//        $('#wrapper').toggleClass('on');
        //outIn = 'in';
//});
     
 
//function runAnimation() {
 
  //  if(outIn == 'out') {
         
        //$('.slide-in').toggleClass('on');
        //$('#sidr-main').toggleClass('on');
        //$('#wrapper').toggleClass('on'); 
    //    outIn = 'in';
         
    //} else if(outIn == 'in') {
     
        //$('.slide-in').toggleClass('on');   
        //$('#sidr-main').toggleClass('on');
        //$('#wrapper').toggleClass('on');
        //outIn = 'out';
         
 //   }
 
//}


</script>

<!-- Piwik Code -->
<noscript><p><img src="http://192.168.2.200/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>

</body>
</html>
