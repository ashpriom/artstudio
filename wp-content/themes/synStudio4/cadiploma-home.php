<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
/*
Template Name: Concept Art Diploma - Home
 */

?>

<?php get_header('microsite'); ?> <!-- CAD header -->
<?php if (function_exists('pll_current_language')) { $currentLang = pll_current_language(slug); } ?>

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
        <div class="header-container" id="section-header-ca">
            <div class="synstudio-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/synlogo.png" alt="Syn Studio Logo" />
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
                    <li><a class="social-media-icons" href="https://www.facebook.com/SynStudio/"><img src="<?php echo get_template_directory_uri(); ?>/images/fb-social-icon-white.png" title="Facebook" alt="facebook" /></a></li>
                    <li><a class="social-media-icons" href="https://twitter.com/synstudio"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-social-icon-white.png" title="Twitter" alt="twitter" /></a></li>
                    <li><a class="social-media-icons" href="https://www.youtube.com/user/SynStudioMontreal"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-social-icon-white.png" title="YouTube" alt="YouTube" /></a></li>
                </ul>
            </div>
            <div class="nav-social hidden-md hidden-lg">
                <ul class="menu social-links-menu-dark text-right">
                    <li>
                        <?php if (function_exists('pll_the_languages')){
                            pll_the_languages(array('hide_current'=>1, 'show_flags'=>1, 'hide_if_no_translation'=>1,));
                        }?>
                    </li>
                    <li><a class="social-media-icons" href="https://www.facebook.com/SynStudio/"><img src="<?php echo get_template_directory_uri(); ?>/images/fb-social-icon-black.png" title="Facebook" alt="facebook" /></a></li>
                    <li><a class="social-media-icons" href="https://twitter.com/synstudio"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-social-icon-black.png" title="Twitter" alt="twitter" /></a></li>
                    <li><a class="social-media-icons" href="https://www.youtube.com/user/SynStudioMontreal"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-social-icon-black.png" title="YouTube" alt="YouTube" /></a></li>
                </ul>
            </div>
            <h1 class="header-title shadow-text-dark orange-text"><small class="white-text"><?php if($currentLang == "en"){ ?>You want to be a<?php } else{ ?>Vous voulez être<?php } ?></small><br /><?php if($currentLang == "en"){ ?>Concept Artist<?php } else{ ?>concept artist<?php } ?></h1>
        </div> <!-- HEADER ends here from header-microsite.php -->

        <!-- MAIN CONTENT -->
        <div class="main-content-container">
            <div class="container-fluid section-highlight" id="section-highlight1" style="background-image:none !important; min-height: 325px !important;">
                <div class="row">
                    <div class="ellipse-overlay hidden-xs hidden-sm"></div>
                    <h3 class="white-text shadow-text-grey"><?php if($currentLang == "en"){ ?>But it’s very competitive...<br />Are you good enough?<?php } else{ ?>Êtes vous assez bon <br>pour ce milieu très compétitif? <?php } ?></h3>
                    <h3 class="highlight1-text">
                        <small>
                            <?php if($currentLang == "en"){ ?> Only the most skilled make it as<br /> concept artists. You need serious training<br /> from the <strong>best in the industry.</strong><br /><br />
                            <?php } else{ ?> Seuls les plus qualifiés deviennent concept artists.<br /> Il vous faut le meilleur entraînement avec<br /> <strong style="color:black;">les élite de l'industrie.</strong><?php } ?>
                        </small>
                    </h3>
                    <!--<p class="art-credit">Art: Bruno Gauthier Leblanc</p>-->
                </div>
            </div>
            <div class="container-fluid section-highlight snow-background-color">
                <div class="row">
                    <div class="bx-wrapper-row">
                        <ul class="bxslider">
                            <li class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/01_Jeong H. Shin.jpg" alt="shin" title="Jeong H. Shin"></li>
                            <li class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/07_Remko Troost.png" alt="remko" title="Remko Troost"></li>
                            <li class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/02_Daniel Kvasznicza.png" alt="daniel" title="Daniel Kvasznicza"></li>
                            <li class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/04_Donglu Yu.png" alt="donglu" title="Donglu Yu"></li>
                            <li class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/05_Frédéric Bennett.png" alt="bennet" title="Frédéric Bennett"></li>
                            <li class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/12_Frédéric St-Arnaud.jpg" alt="Frédéric St-Arnaud" title="Frédéric St-Arnaud"></li>
                            <li class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/10_Christian Robert de Massy.png" alt="Christian Robert de Massy" title="Christian Robert de Massy"></li>
                            <li class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/14_Charles Vinh.png" alt="Charles Vinh" title="Charles Vinh"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid section-highlight" id="section-highlight2">
                <div class="row">
                    <h3>
                        <?php if($currentLang == "en"){ ?>
                        <span class="fancy-quotations">" </span>We all want our art to be the perfect translation of the visions<br /> in our minds.
                        We want the ability to create images that exhibit<br /> our true potential.
                        But, we all need to ask ourselves,
                        'What can I<br /> do to take my skills to the highest level?'<span class="fancy-quotations"> "</span>
                        <?php } else{ ?>
                        <span class="fancy-quotations">" </span>
                        Nous voulons tous que notre art soit la représentation parfaite de l'image<br />
                        que nous en avons dans notre esprit. Notre but est d’avoir cette capacité de produire<br />
                        des images qui projettent notre potentiel. Mais nous devons aussi nous demander <br />
                        que puis-je faire pour que mes compétences atteignent leur meilleur niveau?<span class="fancy-quotations"> "</span>
                        <?php } ?>
                    </h3>
                    <br /><br />
                </div>
                <div class="row">
                    <div class="bx-wrapper-row2">
                        <ul class="scrollable-text bxslider-sliding-text">
                            <?php if($currentLang == "en"){ ?>
                            <li><p>You can seek out a true master artist and take lessons from them.</p></li>
                            <li><p>You can surround yourself with like-minded artists on the path to mastery.</p></li>
                            <li><p>You can learn the latest techniques from the top artists working in the industry.</p></li>
                            <li><p>You can get honest feedback on your work from a professional.</p></li>
                            <li><p>Solve the problems you’re struggling with.</p></li>
                            <li><p>Identify and correct the issues you may have overlooked.</p></li>
                            <?php } else{ ?>
                            <li><p>vous aurez l’opportunité de prendre des cours avec des artistes pionniers dans l’industrie et prendre des cours avec lui/elle.</p></li>
                            <li><p>vous pouvez vous entourer d'autres gens à l'esprit artistique et vous améliorer ensemble.</p></li>
                            <li><p>Vous pouvez apprendre les dernières techniques avec des artistes renommés qui travaillent dans le secteur.</p></li>
                            <li><p>Vous pouvez reçevoir des commentaires honnêtes sur votre travail de la part de professionnels afin de pouvoir</p></li>
                            <li><p>résoudre ce qui vous pose problème</p></li>
                            <li><p>repérer et corriger les problèmes qui vous auraient échappé.</p></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <br /><br />
                </div>
            </div>
            <div class="container-fluid section-highlight" id="section-highlight3">
                <div class="row">
                    <p>
                        <?php if($currentLang == "en"){ ?>
                        Then <strong>you<br />
                        can build</strong><br />
                        an amazing<br />
                        <strong>portfolio</strong><br />
                        and raise<br />
                        your chances of<br />
                        <strong>getting hired</strong>
                        <?php } else{ ?>
                        Ensuite, vous <br> <strong> pourrez <br> construire</strong><br> un superbe <br><strong>portfolio</strong> <br> qui augmentera <br> vos chances <strong><br>de vous faire <br> embaucher</strong>
                        <?php } ?>
                    </p>
                </div>
            </div>

            <div class="container-fluid section-highlight" id="section-highlight4">
                <div class="row">
                    <?php if($currentLang == "en"){ ?>
                    <h3><strong>And what if a great<br />portfolio isn't enough?</strong></h3><br />
                    <p>You need to be<strong> where the action is </strong>in one of the<br class="hidden-xs hidden-sm"/><strong> entertainment capitals of the world.</strong><br /><br /></p>
                    <?php } else{ ?>
                    <h3><strong>Et si un bon portfolio<br /> n'était pas suffisant?</strong></h3><br />
                    <p>se créer un réseau est <strong>aussi important</strong>. Vous devez être <br class="hidden-xs hidden-sm">au cœur de <strong>l'action</strong>, dans l'une des <strong>capitales mondiales du divertissement.</strong><br /><br /></p>
                    <?php } ?>
                </div>
            </div>

            <div class="container-fluid section-highlight white-text shadow-text-dark" id="section-highlight5">
                <div class="row">
                    <p>Montréal<br /><small class="white-text shadow-text-dark">Canada</small></p>
                </div>
            </div>

            <div class="container-fluid section-highlight" id="section-highlight6">
                <div class="row hidden-overflow-section">

                    <!--View in medium to large screen-->
                    <p class="shadow-text-dark hidden-xs hidden-sm hidden-md camera-text">
                        <?php if($currentLang == "en"){ ?> Some films<br /> and games<br /> made here:
                        <?php } else{ ?>Quelques <br /> films et <br /> jeux qui<br /> y ont été<br /> produits:<?php } ?>
                    </p>
                    <ul class="background-camera hidden-xs hidden-sm hidden-md">
                    <li class="margin-10px hidden-md"><img class="background-camera-img hidden-xl" src="<?php echo get_template_directory_uri(); ?>/images/camera-back1.png" alt=""></li>
                    <li class="margin-10px visible-xl"><img class="background-camera-img visible-xl" src="<?php echo get_template_directory_uri(); ?>/images/camera-back2.png" alt=""></li>
                    <li class="margin-10px"><img class="background-camera-img" src="<?php echo get_template_directory_uri(); ?>/images/camera-back3.png" alt=""></li>
                    <li>
                        <div class="camera-container clearfix">
                            <div class="camera-overlay">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/layer_109.png" alt="" />
                            </div>
                            <div class="bx-wrapper-row3 bxslider-camera-roll clearfix">
                                <ul class="bxslider-camera">
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/00_Tomb_Raider.jpg" title="Square Enix" alt=""></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/16_X_Men_Days_of_Future_Past.jpg" title="20th Century Fox" alt=""></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/03_Mass_Effects_3.jpg" title="Electronics Arts" alt=""></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/07_For_Honor.jpg" title="Ubisoft" alt=""></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/04_Terminator_Genisys.jpg" title="Paramount Pictures" alt=""></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/12_Far_Cry_4.jpg" title="Ubisoft" alt=""></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/18_300.jpg" title="Warner Bros. Picture" alt=""></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/01_Dragon_Age_Origins.jpg" title="Electronics Arts" alt=""></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/05_Deus_Ex_Mankind_Divided.jpg" title="Square Enix" alt=""></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/06_Deus_Ex_Mankind_Divided.jpg" title="Square Enix" alt=""></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/08_Sin_City.jpg" title="Dimension Films" alt=""></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/10_Batman_Arkham_Origins.jpg" title="Warner Bros. Interactive Entertainment" alt=""></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/15_Assassins_Creed_3.jpg" title="Ubisoft" alt=""></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/09_Fantastic_Four.jpg" title="20th Century Fox" alt=""></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/02_Watch_Dogs.jpg" title="Ubisoft" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="margin-10px"><img class="background-camera-img" src="<?php echo get_template_directory_uri(); ?>/images/camera-back1.png" alt=""></li>
                    <li class="margin-10px"><img class="background-camera-img" src="<?php echo get_template_directory_uri(); ?>/images/camera-back2.png" alt=""></li>
                    <li class="margin-10px"><img class="background-camera-img" src="<?php echo get_template_directory_uri(); ?>/images/camera-back3.png" alt=""></li>
                    <li class="margin-10px"><img class="background-camera-img" src="<?php echo get_template_directory_uri(); ?>/images/camera-back1.png" alt=""></li>
                    </ul>

                    <!--View in small screen -->
                    <div class="camera-container-small hidden-lg clearfix">
                        <h2><?php if($currentLang == "en"){ ?> Some films<br /> and games<br /> made here:
                        <?php } else{ ?>Quelques <br /> films et <br /> jeux qui<br /> y ont été<br /> produits:<?php } ?>
                        </h2>
                        <br />
                        <img class="camera-overlay-small clearfix" src="<?php echo get_template_directory_uri(); ?>/css/images/layer_109.png" />
                        <div class="bx-wrapper-row4 bxslider-camera-roll-small clearfix">
                            <ul class="bxslider-camera2">
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/00_Tomb_Raider.jpg" title="Square Enix" alt=""></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/16_X_Men_Days_of_Future_Past.jpg" title="20th Century Fox" alt=""></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/03_Mass_Effects_3.jpg" title="Electronics Arts" alt=""></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/07_For_Honor.jpg" title="Ubisoft" alt=""></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/04_Terminator_Genisys.jpg" title="Paramount Pictures" alt=""></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/12_Far_Cry_4.jpg" title="Ubisoft" alt=""></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/18_300.jpg" title="Warner Bros. Picture" alt=""></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/01_Dragon_Age_Origins.jpg" title="Electronics Arts" alt=""></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/05_Deus_Ex_Mankind_Divided.jpg" title="Square Enix" alt=""></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/06_Deus_Ex_Mankind_Divided.jpg" title="Square Enix" alt=""></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/08_Sin_City.jpg" title="Dimension Films" alt=""></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/10_Batman_Arkham_Origins.jpg" title="Warner Bros. Interactive Entertainment" alt=""></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/15_Assassins_Creed_3.jpg" title="Ubisoft" alt=""></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/09_Fantastic_Four.jpg" title="20th Century Fox" alt=""></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/images/02_Watch_Dogs.jpg" title="Ubisoft" alt=""></li>
                            </ul>
                        </div><br /><br />
                    </div>
                </div>
            </div>

            <div class="container-fluid section-highlight" id="section-highlight7">
                <div class="row">
                    <p>
                        <?php if($currentLang == "en"){ ?>
                        This is <strong>EXACTLY</strong> what you will get<br />
                        and where you will be <strong>as a student</strong> in<br />
                        the <strong>Concept Art Diploma</strong> program at<br />
                        <strong>Syn Studio</strong> in <strong>Montreal, Canada</strong>.
                        <?php } else{ ?>
                        C'est <strong>EXACTEMENT</strong> là où vous serez <br />avec le programme de<br /> Syn Studio<strong> à Montréal</strong>.
                        <?php } ?>
                    </p>
                    <br />
                    <?php if($currentLang == "en"){ ?>
                    <a class="btn btn-primary btn-orange-theme highlight-7-btn" href="<?php bloginfo('url'); ?>/concept-art-diploma/" onClick="ga(‘send’, ‘event’, ‘CADP’, ‘click-button’, ‘Learn-More-Program’, 10);">Learn more about our program <img class="white-arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.png" alt="Arrow" /></a>
                    <?php } else{ ?>
                    <a class="btn btn-primary btn-orange-theme highlight-7-btn" href="<?php bloginfo('url'); ?>/diplome-dart-conceptuel/" onClick="ga(‘send’, ‘event’, ‘CADP’, ‘click-button’, ‘Decouvrez-Notre-Programme’, 10);">DÉCOUVREZ NOTRE PROGRAMME <img class="white-arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.png" alt="Arrow" /></a>
                    <?php } ?>
                </div>
            </div>
        </div>

<?php get_footer('microsite'); ?>
