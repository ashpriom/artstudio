<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="keywords" content="<?php bloginfo('url'); _e(''); ?>" />
<meta name="author" content="http://www.n-somnium.com" />
<meta name="copyright" content="Syn Studio" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>

<?php 
if (function_exists('pll_current_language')) { $currentLang = pll_current_language('slug'); }

if ($currentLang == "fr") { ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-fr.css" type="text/css" media="screen" />
<?php } ?>

<style>
	#mobile-header { display: none; }
	@media only screen and (max-width: 768px){
		#mobile-header { display: block;}
		#nav-wrapper { display: none; }
	}
</style>

<script type="text/javascript">
jQuery(document).ready(function () {
// For mobile testing $("#menu-main-nav").tinyNav();

	//Advanced Production Techniques
	jQuery("li#menu-item-5944 a").append("<div class='classNotOffered' style='padding: 16px 8px'>Class Not Offered for this semester</div>");
	jQuery("li#menu-item-5944 a .classNotOffered").hide();
	jQuery("li#menu-item-5944").mouseover(function() {
		jQuery("li#menu-item-5944 a .classNotOffered").show();
	}).mouseout(function(){
		jQuery("li#menu-item-5944 a .classNotOffered").hide();
	});
	
	//FRENCH Advanced Production Techniques
	jQuery("li#menu-item-4767 a").append("<div class='classNotOffered' style='padding: 16px 8px'>Ce cours n&rsquo;est pas offert cette session</div>");
	jQuery("li#menu-item-4767 a .classNotOffered").hide();
	jQuery("li#menu-item-4767").mouseover(function() {
		jQuery("li#menu-item-4767 a .classNotOffered").show();
	}).mouseout(function(){
		jQuery("li#menu-item-4767 a .classNotOffered").hide();
	});
	
});

</script>

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />

</head>

<body>
		<!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MJ8KT7"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MJ8KT7');</script>
        <!-- End Google Tag Manager -->
<?php remove_filter ('the_content', 'wpautop'); ?>

<!-- Main Content Wrapper: Start -->
<div id="wrapper">
 <!-- header: start -->
	<div id="header">
 	<!-- banner: start -->
				<?php
				if ($currentLang == "fr") {
					 echo "<img src='http://synstudio.ca/wp-content/uploads/2015/04/banner_artstation_French_a.jpg' alt='Shaddy Safadi & Eytan Zana - Concept Art Masterclass' width='1000' />";
				}
				else {
					echo "<img src='http://synstudio.ca/wp-content/uploads/2015/04/banner_Artstation_a.jpg' alt='Shaddy Safadi & Eytan Zana - Concept Art Masterclass' width='1000' />";
				}
				?>  
  <!-- banner: end -->
  <div id="language2" style="top: 270px; right: 12px; color:white;">
   <?php echo qtrans_generateLanguageSelectCode('both'); ?>   
   <!--<a href="#">Fran&ccedil;ais</a>-->
  </div>
  
  <div id="nav">
  	<div id="nav-wrapper">
				<?php
				if ($currentLang == "fr") {
					wp_nav_menu( array('menu' => 'Main Nav FR' ));
				}
				else {
					wp_nav_menu( array('menu' => 'Main Nav' ));
				}
				
				?>
   </div>
   
   <div id="social">
			<?php
			 echo "<h4>&nbsp;</h4>";
				//if ($currentLang == "fr") {
				//	echo "<h4>GARDEZ LE CONTACT</h4>";
				//}
				//else {
				//	echo "<h4>Stay in touch</h4>";
				//}
				
				?>   
   	<a href="http://www.facebook.com/SynStudio" target="_blank" id="lnk-facebook">Facebook</a>
    <a href="https://twitter.com/SynStudio" target="_blank" id="lnk-twitter">Twitter</a>
    <a href="https://www.youtube.com/user/SynStudioMontreal" target="_blank" id="lnk-youtube">You Tube</a>
				
	<!--			<?php
    $currentLang = qtrans_getLanguage(); 
				if ($currentLang == "fr") {
					?>
     <a href="http://synstudio.ca/fr/join-our-newsletter/" id="lnk-newsletter">Newsletter</a>
     <?
				}
				else {
					?>
     <a href="http://synstudio.ca/join-our-newsletter/" id="lnk-newsletter">Newsletter</a>
     <?
				}
				?>
        
    
    <a href="#" id="lnk-share">Share</a>-->
<!-- AddThis Button BEGIN 
<div class="addthis_toolbox addthis_default_style" style="position: absolute; right: 0px; top: 17px;">
<a class="addthis_button_compact" title="More Choices" id="lnk-share">Share</a>
</div>-->
<?php 
if ($currentLang == "fr") {
?>
<script type="text/javascript">
var addthis_config = {
      ui_language: "fr" 
} 
</script>
<?php	
	
}

?>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js?pub=galeriesyn"></script>
<!-- AddThis Button END -->
   </div>
  </div>
 
 </div>
 <!-- header: end -->
