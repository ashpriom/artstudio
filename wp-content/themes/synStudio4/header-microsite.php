<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
?>

<?php
$postID = get_the_ID();
$metaTitle = get_post_meta($postID, 'meta_title', true);
$metaDesc = get_post_meta($postID, 'meta_description', true);
$templateDir = get_template_directory_uri(); $metaImage .= $templateDir ."/images/bannerhome.jpg";
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
		<meta name="author" content="Anthony Walsh, Florent Cachot, Syed Priom">
		<meta name="copyright" content="Syn Studio">
		<meta name="p:domain_verify" content="ed36e341a2434aae18c7121607bc9247"/>
		<meta name="google-site-verification" content="qAS47Im9uAwkEff6CyCYdn_7r6BaP2aRFotf7Fs9Nrs">
		<meta name="twitter:card" content="summary"/>
		<meta name="twitter:site" content="Syn Studio"/>
		<meta name="twitter:title" content="<?php echo $metaTitle; ?>">
		<meta name="twitter:creator" content="Syn Studio"/>
		<meta name="twitter:domain" content="synstudio.ca"/>
		<meta name="twitter:image:src" content="<?php echo $metaImage; ?>">
		<meta property="og:site_name" content="Syn Studio">
		<meta property="og:url" content="<?php the_permalink(); ?>">
		<meta property="og:type" content="article">
		<meta property="og:title" content="<?php echo $metaTitle; ?>">
		<meta property="og:description" content="<?php echo $metaDesc; ?>">
		<meta property="og:image" content="<?php echo $metaImage; ?>">
		<meta itemprop="name" content="<?php echo $metaTitle; ?>"/>
		<meta itemprop="description" content="<?php echo $metaDesc; ?>"/>
		<meta itemprop="image" content="<?php echo $metaImage; ?>">
		<meta name="description" content="<?php echo $metaDesc; ?>"/>
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/diplomaStyle.min.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/diplomaStyleResponsive.min.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/stacktable.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:regular,700&amp;subset=latin">
	  	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100italic,300,300italic,regular,italic,600,600italic,700,700italic&amp;subset=latin,latin-ext">
	    <!--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>-->
    	
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
		<?php wp_head(); ?>

		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery_cookie.min.js"></script>

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

		<!-- Facebook Pixel Code - dec 2015 -->
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

		<!-- Facebook Pixel Code - sep 2016 -->
			<script>
			!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
			n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
			document,'script','https://connect.facebook.net/en_US/fbevents.js');

			fbq('init', '1601202580180253');
			fbq('track', "PageView");</script>
			<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=1601202580180253&ev=PageView&noscript=1"
			/></noscript>
		<!-- End Facebook Pixel Code -->


		<?php if($postID == 11245 || $postID == 11285){ ?>

			<script>
				// Lead
				fbq('track', 'Lead');

				// Complete Registration
				fbq('track', 'CompleteRegistration');
			</script>

		<!-- Facebook Conversion Code for Application Form Submissions - CADP CANADA 18-30 -->
			<script>(function() {
				var _fbq = window._fbq || (window._fbq = []);
				if (!_fbq.loaded) {
				var fbds = document.createElement('script');
				fbds.async = true;
				fbds.src = '//connect.facebook.net/en_US/fbds.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(fbds, s);
				_fbq.loaded = true;
				}
				})();
				window._fbq = window._fbq || [];
				window._fbq.push(['track', '6035361214742', {'value':'0.00','currency':'CAD'}]);
			</script>
			<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6035361214742&amp;cd[value]=0.00&amp;cd[currency]=CAD&amp;noscript=1" /></noscript>

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
	  	if (function_exists('pll_current_language')) { $currentLang = pll_current_language('slug'); }
	  	$translationID = pll_get_post($postID,'en');
	?>
