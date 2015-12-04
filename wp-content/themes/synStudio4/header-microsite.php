<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="keywords" content="Concept Art Diploma Montreal Canada" />
		<meta name="author" content="Bill, Syed, Anthony, Florent, Courtney, Greg" />
		<meta name="copyright" content="Syn Studio" />
		<meta name="p:domain_verify" content="ed36e341a2434aae18c7121607bc9247"/>
		<meta name="google-site-verification" content="qAS47Im9uAwkEff6CyCYdn_7r6BaP2aRFotf7Fs9Nrs" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:regular,700&amp;subset=latin">
  		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin+Sans:100,100italic,300,300italic,regular,italic,600,600italic,700,700italic&amp;subset=latin,latin-ext">
  		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" type="text/css" />
    	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" type="text/css" />
    	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-mini.css" type="text/css" />
    	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.responsive-mini.css" type="text/css" />
    	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    	<!--[if lt IE 9]>
      	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->
		<!--[if IE 6]>
		<style type="text/css">
		* html .group {
			height: 1%;
		}
		</style>
  		<![endif]--> 
  		<!--[if IE 7]>
		<style type="text/css">
		*:first-child+html .group {
			min-height: 1px;
		}
		</style>
  		<![endif]--> 
  		<!--[if lt IE 9]> 
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
  		<![endif]-->
		<?php wp_enqueue_script("jquery"); ?>
		<?php $options = get_option( 'sample_theme_options' ); ?> 
		<?php wp_head(); ?>
		<?php $postID = get_the_ID(); ?>

		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery_cookie.js"></script>

		<script type="text/javascript">
			jQuery( document ).ready(function( $ ) {
			 	$("#close-msg").bind( "click", function() {
					$("#popup-message").hide();
					$.cookie("syn-popup", "true", { path: '/' });
				});	
			});
		</script>

		<!-- Start of SkyGlue Code -->
         <script type="text/javascript">
           var _sgq = _sgq || [];
           _sgq.push(['setSgAccount', 'jjkqccji']);

           setTimeout(function() {
             var sg = document.createElement('script'); sg.type = 'text/javascript'; sg.async = true;
             sg.src = ("https:" == document.location.protocol ? "https://dc" : "http://cdn0") + ".skyglue.com/sgtracker.js";
             var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sg, s);
           }, 1);
         </script>
		<!-- End of SkyGlue Code -->

		<!-- Facebook Pixel Code -->
			<script>
			!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
			n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
			document,'script','//connect.facebook.net/en_US/fbevents.js');

			fbq('init', '456389534556260');
			fbq('track', "PageView");</script>
			<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=456389534556260&ev=PageView&noscript=1"
			/></noscript>
		<!-- End Facebook Pixel Code -->


		<?php if($postID == 11245 || $postID == 11285){ ?>
			<script>
				// Lead
				// Track when a user expresses interest in your offering (ex. form submission, sign up for trial, landing on pricing page)
				fbq('track', 'Lead');
			</script>
		<?php } ?>

		<style>
			.lang-item a{
				color: ivory;
			    text-decoration: none !important;
			    font-family: 'Josefin Sans', sans-serif, sans-serif;
			    font-weight: 500;
			    padding: 7px 7px;
			    font-size: 1.1em;
			}
			.lang-item img{width:auto !important;}
		</style>
	
	</head>
	<?php 
		remove_filter ('the_content', 'wpautop');
	  	$postID = get_the_ID();
	  	if (function_exists('pll_current_language')) { $currentLang = pll_current_language('slug'); } 
	  	$translationID = pll_get_post($postID,'en');
	?>