<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
/*
Template Name: Artwork Showcase
 */
?>

<?php get_header('microsite'); ?>
<?php if (function_exists('pll_current_language')) { $currentLang = pll_current_language(slug); } ?>

    <style>
    /*.container-fluid{padding:0px !important;}*/
    .pbWrapper img{width: auto !important;}
    .justified-gallery{overflow: visible !important;}
    </style>

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

        <div class="off-canvas-menu-wrap">
            <a class="close-button" id="close-button" href="#"><?php if($currentLang == "en"){ ?>Close Menu<?php } else{ ?>Fermer Menu<?php } ?></a>
            <ul class="menu off-canvas-menu">
                <?php if($currentLang == "en"){ ?>
                <li><a href="<?php bloginfo('url'); ?>/concept-art/">Home</a></li>
                <li><a href="<?php bloginfo('url'); ?>/concept-art-diploma/">Concept Art Diploma</a></li>
                <li><a href="<?php bloginfo('url'); ?>/about-synstudio/">About Syn Studio</a></li>
                <li><a href="<?php bloginfo('url'); ?>/student-showcase/">Showcase</a></li>
                <li><a href="<?php bloginfo('url'); ?>/syn-studio-experience/">Syn Studio Experience</a></li>
                <li><a href="<?php bloginfo('url'); ?>/concept-art-diploma-admission/">Admission dates and tuition</a></li>
                <?php } else{ ?>
                <li><a href="<?php bloginfo('url'); ?>/page-daccueil/">Page d'accueil</a></li>
                <li><a href="<?php bloginfo('url'); ?>/diplome-dart-conceptuel/">Le programme</a></li>
                <li><a href="<?php bloginfo('url'); ?>/a-propos-de-syn-studio/">À propos de Syn Studio</a></li>
                <li><a href="<?php bloginfo('url'); ?>/presentation-etudiants/">Présentation</a></li>
                <li><a href="<?php bloginfo('url'); ?>/lexperience-syn-studio/">L'éxpérience Syn Studio</a></li>
                <li><a href="<?php bloginfo('url'); ?>/informations-sur-le-programme/">Informations sur le programme</a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="nav-site">
            <ul class="menu toggle-menu-btn" id="open-button">
                <li><a href="#"><ul class="toggle-menu-icon"><li></li><li></li><li></li></ul> Menu</a></li>
            </ul>
            <ul class="menu nav-menu">
                <?php if($currentLang == "en"){ ?>
                <li><a href="<?php bloginfo('url'); ?>/concept-art/">Home</a></li>
                <li><a href="<?php bloginfo('url'); ?>/concept-art-diploma/">Concept Art Diploma</a></li>
                <li><a href="<?php bloginfo('url'); ?>/about-synstudio/">About Syn Studio</a></li>
                <li><a href="<?php bloginfo('url'); ?>/student-showcase/">Showcase</a></li>
                <li><a href="<?php bloginfo('url'); ?>/syn-studio-experience/">Syn Studio Experience</a></li>
                <li><a href="<?php bloginfo('url'); ?>/concept-art-diploma-admission/">Admission dates and tuition</a></li>
                <?php } else{ ?>
                <li><a href="<?php bloginfo('url'); ?>/page-daccueil/">Page d'accueil</a></li>
                <li><a href="<?php bloginfo('url'); ?>/diplome-dart-conceptuel/">Le programme</a></li>
                <li><a href="<?php bloginfo('url'); ?>/a-propos-de-syn-studio/">À propos de Syn Studio</a></li>
                <li><a href="<?php bloginfo('url'); ?>/presentation-etudiants/">Présentation</a></li>
                <li><a href="<?php bloginfo('url'); ?>/lexperience-syn-studio/">L'éxpérience Syn Studio</a></li>
                <li><a href="<?php bloginfo('url'); ?>/informations-sur-le-programme/">Informations sur le programme</a></li>
                <?php } ?>
            </ul>
        </div>

        <?php $postID = get_the_ID();
        if($postID == "11534" || $postID == "11644"){ ?>
            <div class="header-container" id="section-header-ca-teacher-showcase">
        <?php } else{ ?>
            <div class="header-container" id="section-header-ca-student-showcase">
        <?php } ?>

            <div class="synstudio-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/layer_1.png" alt="Syn Studio Logo" />
                <p class="synstudio-logo-text-fr">École d'art</p>
                <p class="synstudio-logo-text-en">Art school</p>
            </div>
            <div class="nav-social hidden-xs hidden-sm">
                <ul class="menu social-links-menu text-right">
                    <li>
                        <?php if (function_exists('pll_the_languages')){ 
                            pll_the_languages(array('hide_current'=>1, 'show_flags'=>1, 'hide_if_no_translation'=>1,)); 
                        }?>
                    </li>
                    <li><a class="social-media-icons" href="https://www.facebook.com/SynStudio/"><img src="<?php echo get_template_directory_uri(); ?>/images/fb-social-icon-white.png" alt="" /></a></li>
                    <li><a class="social-media-icons" href="https://twitter.com/synstudio"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-social-icon-white.png" alt="" /></a></li>
                    <li><a class="social-media-icons" href="https://www.youtube.com/user/SynStudioMontreal"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-social-icon-white.png" alt="" /></a></li>
                </ul>
            </div>
            <div class="nav-social hidden-md hidden-lg">
                <ul class="menu social-links-menu-dark text-right">
                    <li>
                        <?php if (function_exists('pll_the_languages')){ 
                            pll_the_languages(array('hide_current'=>1, 'show_flags'=>1, 'hide_if_no_translation'=>1,)); 
                        }?>
                    </li>
                    <li><a class="social-media-icons" href="https://www.facebook.com/SynStudio/"><img src="<?php echo get_template_directory_uri(); ?>/images/fb-social-icon-black.png" alt="" /></a></li>
                    <li><a class="social-media-icons" href="https://twitter.com/synstudio"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-social-icon-black.png" alt="" /></a></li>
                    <li><a class="social-media-icons" href="https://www.youtube.com/user/SynStudioMontreal"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-social-icon-black.png" alt="" /></a></li>
                </ul>
            </div>
            <h1 class="header-title shadow-text-dark orange-text"><small class="white-text"></small><br /><?php if($currentLang == "en"){ ?>Showcase<?php } else { ?>Présentation<?php } ?></h1>
        </div>
        <!-- end HEADER -->
        <!-- MAIN CONTENT -->
            <div> 
              	<?php while ( have_posts() ) : the_post(); ?>
                    <div class="main-content-container" id="section-highlight-showcase">
                        <div class="container-fluid section-highlight">
                            <ul class="menu showcase-menu">
                                <?php if($currentLang == "en"){ ?>
                                <li class="col-md-3"><span>View : <br class="hidden-md hidden-lg"/></span><a href="<?php bloginfo('url'); ?>/student-showcase/">Student Artwork</a></li>
                                <li class="col-md-3"><a href="<?php bloginfo('url'); ?>/teacher-showcase/">Teacher Artwork</a></li>
                                <li class="col-md-3"><span>Click image to enlarge</span></li>
                                <li class="col-md-3"><span>Next : </span><a href="<?php bloginfo('url'); ?>/syn-studio-experience/">Syn Studio Experience</a></li>
                                <?php } else{ ?>
                                <li class="col-md-3"><span>Voir: <br class="hidden-md hidden-lg"/></span><a href="<?php bloginfo('url'); ?>/presentation-etudiants/">les travaux étudiants</a></li>
                                <li class="col-md-3"><a href="<?php bloginfo('url'); ?>/presentation-professeurs/">les travaux professeurs</a></li>
                                <li class="col-md-3"><span>Cliquer sur image pour l'élargir</span></li>
                                <li class="col-md-3"><span>Suivant: </span><a href="<?php bloginfo('url'); ?>/lexperience-syn-studio/">L'expérience Syn Studio</a></li>
                                <?php } ?>
                            </ul><br />
                            <div><?php the_content(); ?></div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

            <?php  $postID = get_the_ID();
            if($postID == "11436"){ ?>
                <div class="container-fluid section-highlight" id="section-highlight7">
                <div class="row">
                    <p>
                        <strong>What’s next? check out some artwork<br /> by Syn Studio instructors:</strong>
                    </p>
                    <br />
                    <a class="btn btn-primary btn-orange-theme" href="<?php bloginfo('url'); ?>/teacher-showcase/"> Teacher Showcase <img class="white-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1.png" alt="Arrow" /></a>
                </div>
            </div>
            <?php }
            if($postID == "11643"){ ?>
                <div class="container-fluid section-highlight" id="section-highlight7">
                <div class="row">
                    <p>
                        <strong>Ensuite? Aller voir quelque<br /> travaux de nos enseignants:</strong>
                    </p>
                    <br />
                    <a class="btn btn-primary btn-orange-theme" href="<?php bloginfo('url'); ?>/presentation-professeurs/"> Présentation des enseignants <img class="white-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1.png" alt="Arrow" /></a>
                </div>
            </div>                
            <?php } 
            if($postID == "11534"){ ?>
                <div class="container-fluid section-highlight" id="section-highlight7">
                <div class="row">
                    <p>
                        <strong>Want to see what it’s like<br /> to be a student at Syn Studio? Check out:</strong>
                    </p>
                    <br />
                    <a class="btn btn-primary btn-orange-theme" href="<?php bloginfo('url'); ?>/syn-studio-experience/"> The Syn Studio Experience <img class="white-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1.png" alt="Arrow" /></a>
                </div>
            </div>
            <?php }
            if($postID == "11644"){ ?>
                <div class="container-fluid section-highlight" id="section-highlight7">
                <div class="row">
                    <p>
                        <strong>Voulez-vous voir à quoi ressemble<br /> la vie étudiante à Syn Studio? Aller voir:</strong>
                    </p>
                    <br />
                    <a class="btn btn-primary btn-orange-theme" href="<?php bloginfo('url'); ?>/lexperience-syn-studio/"> l'experience syn studio <img class="white-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1.png" alt="Arrow" /></a>
                </div>
            </div>                
            <?php } ?>


<?php get_footer('microsite'); ?>

</body>
</html>