<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */

if (function_exists('pll_current_language')) { $currentLang = pll_current_language('slug'); }
?>

    <div class="footer-container">
        <div class="container-fluid section-footer">
            <div class="row">
                <div class="col-sm-3">
                    <p class="footer-nav-title"><?php if($currentLang == "en"){ echo "  Sponsored by"; }else{ echo "  Commandité par"; }?></p>
                    <br />
                    <a href="http://www.artstation.com/" target="_blank"> <!-- Hovering over the sponsor logo changes to another image -->
                        <img id="wavecom-logo" src="<?php echo get_template_directory_uri(); ?>/images/artstation-cad.png" title="artstation" alt="artstation"
                            onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/artstation-cad-color.png';"
                            onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/artstation-cad.png';">
                        </img>
                    </a>
                    <a href="http://www.wacom.com/" target="_blank">
                        <img id="wavecom-logo" src="<?php echo get_template_directory_uri(); ?>/images/diplomawacombw.png" title="Wacom" alt="Wacom"
                            onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/diplomawacomcolor.png';"
                            onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/diplomawacombw.png';">
                        </img>
                    </a>
                </div>
                <div class="col-sm-3">
                    <ul class="menu nav-menu-footer">
                        <?php if($currentLang == "en"){ ?>
                            <li><a href="<?php bloginfo('url'); ?>/concept-art/">Home</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/concept-art-diploma/">Concept Art Diploma</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/about-synstudio/">About Syn Studio</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/student-showcase/">Showcase</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/syn-studio-experience/">Syn Studio Experience </a></li>
                            <li><a href="<?php bloginfo('url'); ?>/concept-art-diploma-admission/">Admission dates and tuition</a></li>
                            <?php } else { ?>
                            <li><a href="<?php bloginfo('url'); ?>/page-daccueil/">Page d'accueil</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/diplome-dart-conceptuel/">Le programme</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/a-propos-de-syn-studio/">À propos de Syn Studio</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/presentation-etudiants/">Présentation</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/lexperience-syn-studio/">L'éxpérience Syn Studio</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/informations-sur-le-programme/">Informations sur le programme</a></li>
                        <?php } ?>
                    </ul>
                    <br />
                    <br />
                </div>
                <div class="col-sm-3">
                    <div>
                        <p class="footer-nav-title"><?php if($currentLang == "en"){ echo "Newsletter Sign Up"; }else{ echo "Inscription à la newsletter"; }?></p>
                        <div>
                            <div id="e-mail-signup-container">
                                <?php if($currentLang == "en"){ ?>
                                    <form id="mc-embedded-subscribe-form" class="validate" action="//synstudio.us2.list-manage.com/subscribe/post?u=23c298529438530e62af0db46&amp;id=623da952bd" method="post" name="mc-embedded-subscribe-form" target="_blank">
                                    <input id="email-input" class="email" title="Email" name="EMAIL" required="" type="text" value="" placeholder="  Enter Email Address" />
                                    <div class="clear">
                                        <input class="btn btn-primary btn-grey-theme" id="subscribe-input" title="Submit" name="subscribe" type="submit" value="Subscribe" />
                                    </div>
                                </form>
                                <?php } else { ?>
                                    <form id="mc-embedded-subscribe-form" class="validate" action="//synstudio.us2.list-manage.com/subscribe/post?u=23c298529438530e62af0db46&amp;id=f3d0db5d90" method="post" name="mc-embedded-subscribe-form" target="_blank">
                                    <input id="email-input" class="email" title="Email" name="EMAIL" required="" type="text" value="" placeholder="  Adresse électronique">
                                    <div class="clear">
                                        <input id="subscribe-input" class="btn btn-primary btn-grey-theme" name="subscribe" type="submit" value="Abonnez-vous">
                                    </div>
                                </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <p class="footer-nav-title"><?php if($currentLang == "en"){ echo "Contact Us"; }else{ echo "Contactez-nous"; }?></p>
                        <div>
                            <p>460 St. Catherine <?php if($currentLang == "en"){ echo "West"; }else{ echo "Ouest"; }?></p>
                            <p>#508 Montreal, H3B 1A7</p>
                            <p><img class="contact-icon" src="<?php echo get_template_directory_uri(); ?>/images/forma_1_2.png" alt="" />&nbsp;&nbsp;info@synstudio.ca</p>
                            <p><img class="contact-icon" src="<?php echo get_template_directory_uri(); ?>/images/forma_1.png" alt="" />&nbsp;&nbsp;&nbsp;514-998-7625</p>
                        </div>
                    </div>
                    <br class="hidden-xs hidden-sm">
                    <div class="row">
                        <p class="footer-nav-title"><?php if($currentLang == "en"){ echo "Connect with us"; }else{ echo "Rejoignez-nous"; }?></p>
                        <div class="nav-social">
                            <ul class="menu social-links-menu-footer">
                                    <li><a class="social-media-icons" href="https://www.facebook.com/SynStudio/"><img src="<?php echo get_template_directory_uri(); ?>/images/fb-social-icon-white.png" alt="" /></a></li>
                                    <li><a class="social-media-icons" href="https://twitter.com/synstudio"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-social-icon-white.png" alt="" /></a></li>
                                    <li><a class="social-media-icons" href="https://www.youtube.com/user/SynStudioMontreal"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-social-icon-white.png" alt="" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="row">
                <br />
                <br />
                <p class=" copyright-text text-left">Syn Studio, <span>École d'art</span>, <span>Art school</span>. © <?php echo date("Y"); ?> Syn Studio</p>
                <br />
            </div>
        </div>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/stacktable.js"></script>
        <script> $('.the-stack').stacktable(); </script>
    <!-- end FOOTER -->
</body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37910846-1', 'auto');
  ga('send', 'pageview');

</script>

</html>

<?php wp_footer(); ?>
