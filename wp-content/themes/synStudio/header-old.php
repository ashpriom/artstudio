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
$currentLang = qtrans_getLanguage(); 
if ($currentLang == "fr") {
?>
<link rel="stylesheet" href="http://www.synstudio.ca/wp-content/themes/synStudio/css/style-fr.css" type="text/css" media="screen" />
<?php	
	
}

?>
<!--<script src="http://sandbox.synstudio.ca/wp-content/themes/synStudio/test/tinynav.min.js"></script>-->

<script type="text/javascript">
jQuery(document).ready(function () {
// For mobile testing $("#menu-main-nav").tinyNav();

	//Dynamic Drawing
	jQuery("li#menu-item-5927 a").append("<div class='classNotOffered' style='padding: 2px 8px'>Class Not Offered for this semester</div>");
	jQuery("li#menu-item-5927 a .classNotOffered").hide();
	jQuery("li#menu-item-5927").mouseover(function() {
		jQuery("li#menu-item-5927 a .classNotOffered").show();
	}).mouseout(function(){
		jQuery("li#menu-item-5927 a .classNotOffered").hide();
	});
	
	//Watercolour
	jQuery("li#menu-item-5932 a").append("<div class='classNotOffered' style='padding: 10px 8px'>Class Not Offered for this semester</div>");
	jQuery("li#menu-item-5932 a .classNotOffered").hide();
	jQuery("li#menu-item-5932").mouseover(function() {
		jQuery("li#menu-item-5932 a .classNotOffered").show();
	}).mouseout(function(){
		jQuery("li#menu-item-5932 a .classNotOffered").hide();
	});	
	
	//Advanced Production Techniques
	jQuery("li#menu-item-5944 a").append("<div class='classNotOffered' style='padding: 16px 8px'>Class Not Offered for this semester</div>");
	jQuery("li#menu-item-5944 a .classNotOffered").hide();
	jQuery("li#menu-item-5944").mouseover(function() {
		jQuery("li#menu-item-5944 a .classNotOffered").show();
	}).mouseout(function(){
		jQuery("li#menu-item-5944 a .classNotOffered").hide();
	});
	
//FRENCH Dynamic Drawing
	jQuery("li#menu-item-4777 a").append("<div class='classNotOffered' style='padding: 2px 8px'>Ce cours n&rsquo;est pas offert cette session</div>");
	jQuery("li#menu-item-4777 a .classNotOffered").hide();
	jQuery("li#menu-item-4777").mouseover(function() {
		jQuery("li#menu-item-4777 a .classNotOffered").show();
	}).mouseout(function(){
		jQuery("li#menu-item-4777 a .classNotOffered").hide();
	});

//FRENCH Watercolour
	jQuery("li#menu-item-4769 a").append("<div class='classNotOffered' style='padding: 10px 8px'>Ce cours n&rsquo;est pas offert cette session</div>");
	jQuery("li#menu-item-4769 a .classNotOffered").hide();
	jQuery("li#menu-item-4769").mouseover(function() {
		jQuery("li#menu-item-4769 a .classNotOffered").show();
	}).mouseout(function(){
		jQuery("li#menu-item-4769 a .classNotOffered").hide();
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

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37910846-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</head>

<body>
<?php remove_filter ('the_content', 'wpautop'); ?>

<!-- Main Content Wrapper: Start -->
<div id="wrapper">
 <!-- header: start -->
	<div id="header">
 	<div id="logo"><a href="/home/">Syn Studio - Art School</a></div>
  <div id="language">
   <div class="phone">514 998-7625</div>
   <?php echo qtrans_generateLanguageSelectCode('both'); ?>   
   <!--<a href="#">Fran&ccedil;ais</a>-->
  </div>
  
  <div id="nav">
  	<div id="nav-wrapper">
				<?php
    $currentLang = qtrans_getLanguage(); 
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
				if ($currentLang == "fr") {
					echo "<h4>GARDEZ LE CONTACT</h4>";
				}
				else {
					echo "<h4>Stay in touch</h4>";
				}
				
				?>   
   	<a href="http://www.facebook.com/SynStudio" target="_blank" id="lnk-facebook">Facebook</a>
    <a href="https://twitter.com/SynStudio" target="_blank" id="lnk-twitter">Twitter</a>         
    <!-- AddThis Button BEGIN -->
    <div class="addthis_toolbox addthis_default_style" style="position: absolute; right: 0px; top: 17px;">
    <a class="addthis_button_compact" title="More Choices" id="lnk-share">Share</a>
    </div>
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
