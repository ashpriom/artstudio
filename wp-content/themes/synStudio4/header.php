<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 * header.php is the standard site header loaded in all pages except - concept art diploma pages and specific pages stated in single.php, which is used to load special headers depending on certain post IDs.
 **/
?>

<!DOCTYPE html>

<!--     _______.____    ____ .__   __.         _______..___________. __    __   _______   __    ______
    /       |\   \  /   / |  \ |  |        /       ||           ||  |  |  | |       \ |  |  /  __  \
   |   (    ` \   \/   /  |   \|  |       |   (	   ``  -|  |    `|  |  |  | |  .  .  ||  | |  |  |  |
    \   \      \_    _/   |  . `  |        \   \        |  |     |  |  |  | |  |  |  ||  | |  |  |  |
.	 )   |       |  |     |  |\   |    .	)   |       |  |     |  `  '  | |  '  '  ||  | |  `  '  |
|_______/        |__|     |__| \__|    |_______/        |__|      \______/  |_______/ |__|  \______/
-->

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width,user-scalable=no,minimum-scale=1,maximum-scale=1,initial-scale=1"/>
		<meta itemprop="name" content="<?php the_title(); ?>"/>
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.sidr.light.css" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/synstudioResponsive.min.css" type="text/css" media="screen">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<meta name="author" content="Andrea Acosta Duarte, Bill Jamshedji, Syed Priom" />
		<meta name="copyright" content="<?php bloginfo('url'); _e(''); ?>" />
		<meta name="p:domain_verify" content="ed36e341a2434aae18c7121607bc9247"/>
		<meta name="google-site-verification" content="TfjOiPpkpWW7TlZeMwprhmSFJpcrTbsS_FkF5Y8phDY" />
		<meta name="twitter:card" content="summary"/>
		<meta name="twitter:site" content="Syn Studio"/>
		<meta name="twitter:title" content="<?php the_title(); ?>">
		<meta name="twitter:creator" content="Syn Studio"/>
		<meta name="twitter:domain" content="synstudio.ca"/>
		<meta property="og:site_name" content="Syn Studio" />
		<meta property="og:url" content="<?php the_permalink(); ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="<?php the_title(); ?>" />
		
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
		
		<?php wp_enqueue_script("jquery"); ?>
		
		<?php
			$options = get_option( 'sample_theme_options' ); // loads theme options used for registration dedline notices. See theme_options_do_page() in functions.php
		?>
		
		<?php wp_head(); ?>

		<?php
			if (function_exists('pll_current_language')) {
				$currentLang = pll_current_language(slug); // See polylang documentation polylang.wordpress.com/documentation/documentation-for-developers/functions-reference/
			}
			if ($currentLang == "fr") { ?>
				<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-fr.css" type="text/css" media="screen" /> <?php
			} ?>

		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery_cookie.js"></script>

		<style>
			#mobile-header { display: none; }
			@media only screen and (max-width: 768px){ /* Load mobile menu for screen sizes 767px and below. See footer.php for detailed implementation */
				#mobile-header { display: block;}
				#nav-wrapper { display: none; }
			}
		</style>

		<!-- Popup Message Cookie -->
		<script type="text/javascript">
			jQuery( document ).ready(function( $ ) {
			 	$("#close-msg").bind( "click", function() {
					$("#popup-message").hide();
					$.cookie("syn-popup", "true", { path: '/' });
				});
			});
		</script>

		<!-- SkyGlue -->
		<script type="text/javascript">
		   var _sgq = _sgq || [];
		   _sgq.push(['setSgAccount', 'jjkqccji']);
		   setTimeout(function() {
			 var sg = document.createElement('script'); sg.type = 'text/javascript'; sg.async = true;
			 sg.src = ("https:" == document.location.protocol ? "https://dc" : "http://cdn0") + ".skyglue.com/sgtracker.js";
			 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sg, s);
		   }, 1);
		</script>
	
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

		<div id="wrapper"> <!-- Main Content Wrapper: Start, ends in footer -->
		<div id="header"> <!-- header: start -->

		<?php remove_filter ('the_content', 'wpautop'); ?>	
		
		<!-- pop-up message: start -->
		<?php
		  	if($currentLang=="en"){ $cat = 'Pop-up Message'; } else{ $cat = 'Pop-up Message FR'; }
		  	$catID = get_cat_ID($cat);
		  	query_posts('cat=' . $catID);
				while (have_posts()) : the_post();
				 	$postID = get_the_ID();
					echo '<div id="popup-message" style="display:none;">';
					echo '<a id="close-msg" href="javascript: ;">X</a>';
				 	echo '<h2>' . get_the_title() . '</h2>';
				  	the_content();
					echo '</div>';
					echo '<script type="text/javascript">jQuery( document ).ready(function( $ ) {';
					echo 'if ($.cookie("syn-popup")=="true"){';
					echo '$("#popup-message").hide();';
					echo '} else {';
					echo '$("#popup-message").show();';
					echo '}';
					echo '});</script>';
				endwhile;
			wp_reset_query();
	  	?>
		<!-- pop-up message: end -->

			<div id="logo">
				<?php if($currentLang=="en"){ ?><a href="/home/">Syn Studio - Art School</a> <?php }
				else{ ?><a href="/francais/">Syn Studio - École d’art à Montréal</a> <?php } ?>
			</div>

			<div id="language">
   			<div class="phone">514 998-7625</div>
   			<?php if (function_exists('pll_the_languages')){
   				pll_the_languages(array('hide_current'=>1, 'show_flags'=>1)); // See Polylang reference
				}
   			?>
			</div>

			<div id="nav">
				
				<div id="mobile-header">
					<a id="responsive-menu-button" href="#sidr-main"><img alt="Toggle menu" src="<?php echo get_template_directory_uri(); ?>/images/responsive/mobi-toogleMenu.png"></a>
				</div>

		  		<div id="nav-wrapper">
					<?php
					if ($currentLang == "fr"){
						wp_nav_menu( array('menu' => 'Main Nav FR' ));
					}
					else{
						wp_nav_menu( array('menu' => 'Main Nav' ));
					}
					?>
		   		</div>

		   		<div id="social">
					<?php
						if ($currentLang == "fr") { echo "<h4>GARDEZ LE CONTACT</h4>"; }
						else { echo "<h4>Stay in touch</h4>"; }
					?>
					<!-- Social Media -->
				  <a href="http://www.facebook.com/SynStudio" target="_blank" title="Facebook" id="lnk-facebook">Facebook</a>
					<a href="https://twitter.com/SynStudio" target="_blank" title="Twitter" id="lnk-twitter">Twitter</a>
				  <a href="https://www.youtube.com/user/SynStudioMontreal" target="_blank" title="You Tube" id="lnk-youtube">YouTube</a>
				</div>
			
			</div>
		</div> <!-- header: end....wrapper ends in footer.php -->
