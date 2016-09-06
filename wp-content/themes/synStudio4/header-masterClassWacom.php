<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
?>

<?php
$postID = get_the_ID();

// Detect page language with Polylang
// Check polylang.wordpress.com/documentation/documentation-for-developers/functions-reference/
if (function_exists('pll_current_language')) { $currentLang = pll_current_language(slug); }
if(function_exists('pll_get_post')){ $translationID = pll_get_post($postID,'en');}

// Resolve meta tags using Content Field Suite
if(in_category(4) || in_category(48)){
	if($currentLang=="en"){ $attachment_id = get_post_meta($postID, 'thumbnail', true); }
	else{ $attachment_id = get_post_meta($translationID, 'thumbnail', true); }
	$metaImage = wp_get_attachment_image($attachment_id);
}
else{ $templateDir = get_template_directory_uri(); $metaImage .= $templateDir ."/css/images/synlogo.jpg"; }
$metaTitle = get_post_meta($postID, 'meta_title', true);
$metaDesc = get_post_meta($postID, 'meta_description', true);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="author" content="Andrea, Bill, Priom" />
		<meta name="copyright" content="Syn Studio" />
		<meta name="twitter:card" content="summary"/>
		<meta name="twitter:site" content="Syn Studio"/>
		<meta name="twitter:title" content="<?php echo $metaTitle; ?>" />
		<meta name="twitter:creator" content="Syn Studio"/>
		<meta name="twitter:domain" content="synstudio.ca"/>
		<meta name="twitter:image:src" content="<?php echo $metaImage; ?>" />
		<meta property="og:site_name" content="Syn Studio" />
		<meta property="og:url" content="<?php the_permalink(); ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="<?php echo $metaTitle; ?>" />
		<meta property="og:description" content="<?php echo $metaDesc; ?>" />
		<meta property="og:image" content="<?php echo $metaImage; ?>" />
		<meta itemprop="name" content="<?php echo $metaTitle; ?>"/>
		<meta itemprop="description" content="<?php echo $metaDesc; ?>"/>
		<meta itemprop="image" content="<?php echo $metaImage; ?>" />
		<meta name="description" content="<?php echo $metaDesc; ?>"/>
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.sidr.light.css" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/synstudioResponsive.min.css" type="text/css" media="screen">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />

		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>

		<?php
		if (function_exists('pll_current_language')) { $currentLang = pll_current_language('slug'); }
		if ($currentLang == "fr") { ?><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-fr.css" type="text/css" media="screen" /><?php }
		?>

		<style>
			#mobile-header { display: none; }
			@media only screen and (max-width: 768px){
				#mobile-header { display: block;}
				#nav-wrapper { display: none; }
			}
		</style>
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

		<div id="wrapper">
			<div id="header">

				<?php
				if ($currentLang == "fr") { ?>
					<img src="<?php bloginfo('url'); ?>/../wp-content/uploads/2016/03/gathering-banner-wacom-fr.jpg" alt="SYN STUDIO - GATHERING OF MASTERS 2016 Wacom" width="1000" />
				<?php }
				else { ?>
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/03/gathering-banner-wacom-en.jpg" alt="SYN STUDIO - GATHERING OF MASTERS 2016 Wacom" width="1000" />
				<?php } ?>

			  	<div id="language2" style="top: 270px; right: 12px; color:white;">
			   		<?php
			   		if (function_exists('pll_the_languages')){
			   			pll_the_languages(array('hide_current'=>1, 'show_flags'=>1));
			   		}
			   		?>
			  	</div>

		  		<div id="nav" class="masterclass-nav">
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
		   		</div>
		  	</div>
		</div>
