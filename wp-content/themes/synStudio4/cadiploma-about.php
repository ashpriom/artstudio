<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 * This file corresponds to the concpet art diploma About page.
 */
/*
Template Name: Concept Art Diploma - About
 */

?>
<?php get_header('microsite'); ?>
<?php if (function_exists('pll_current_language')) { $currentLang = pll_current_language(slug); } ?>

<script type="text/javascript">
    function toggleDiv(divId){
      $("#"+divId).toggle("6000"); // used to toggle visibility of section containing all people Syn Studio thanks. Hidden by default.
    }
</script>

<script type="text/javascript">
    function changeImage(){ // Toggle between more and less icons for thank you section.
        if (document.getElementById("imgClickAndChange").src == "<?php bloginfo('template_directory'); ?>/css/images/cadiplomaAbout/more.png"){
            document.getElementById("imgClickAndChange").src = "<?php bloginfo('template_directory'); ?>/css/images/cadiplomaAbout/less.png";
        }
        else{
            document.getElementById("imgClickAndChange").src = "<?php bloginfo('template_directory'); ?>/css/images/cadiplomaAbout/more.png";
        }
    }
</script>

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

    <?php if($currentLang == "en"){ ?>
        <div class="off-canvas-menu-wrap">
            <a class="close-button" id="close-button" href="#"><?php if($currentLang == "en"){ ?>Close Menu<?php } else{ ?>Fermer Menu<?php } ?></a>
            <ul class="menu off-canvas-menu">
                <li><a href="<?php bloginfo('url'); ?>/concept-art/">Home</a></li>
                <li><a href="<?php bloginfo('url'); ?>/concept-art-diploma/">Concept Art Diploma</a></li>
                <li><a href="<?php bloginfo('url'); ?>/about-synstudio/">About Syn Studio</a></li>
                <li><a href="<?php bloginfo('url'); ?>/student-showcase/">Showcase</a></li>
                <li><a href="<?php bloginfo('url'); ?>/syn-studio-experience/">Syn Studio Experience</a></li>
                <li><a href="<?php bloginfo('url'); ?>/concept-art-diploma-admission/">Admission dates and tuition</a></li>
            </ul>
        </div>
        <div class="nav-site">
            <ul class="menu toggle-menu-btn" id="open-button">
                <li><a href="#"><ul class="toggle-menu-icon"><li></li><li></li><li></li></ul> Menu</a></li>
            </ul>
            <ul class="menu nav-menu">
                <li><a href="<?php bloginfo('url'); ?>/concept-art/">Home</a></li>
                <li><a href="<?php bloginfo('url'); ?>/concept-art-diploma/">Concept Art Diploma</a></li>
                <li><a href="<?php bloginfo('url'); ?>/about-synstudio/">About Syn Studio</a></li>
                <li><a href="<?php bloginfo('url'); ?>/student-showcase/">Showcase</a></li>
                <li><a href="<?php bloginfo('url'); ?>/syn-studio-experience/">Syn Studio Experience</a></li>
                <li><a href="<?php bloginfo('url'); ?>/concept-art-diploma-admission/">Admission dates and tuition</a></li>
            </ul>
        </div>
        <div class="header-container" id="section-header-ca-aboutsynstudio">
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
            <h1 class="header-title shadow-text-dark orange-text"><small class="white-text">About</small><br />Syn Studio</h1>
        </div>
        <!-- end HEADER -->
        <!-- MAIN CONTENT -->
    <div class="main-content-container">
        <div class="container-fluid section-highlight deviant" id="section-highlight-intro">
            <div class="row">
                <h1 class="black-text"><strong><span class="fancy-quotations">"</span>Great artists are NOT born</strong></h1>
                <h1 class="orange-text"><strong>They are made<span class="fancy-quotations">"</span></strong></h1>
                <br />
                <div class="section-intro-text40">
                    <p>
                        <!--At <strong>Syn Studio</strong>, we believe in the power of training over talent.
                        <br />
                        <strong>Since 2007</strong>, we’ve been <strong>helping passionate and <br />
                        dedicated </strong>students master the fundamentals and <strong>learn high <br />
                        level design and digital illustration skills:</strong>. The skills they now
                        <br /> use professionally to create <strong>mind-blowing concepts and <br />
                        visuals</strong> for the <strong>next generation</strong> of entertainment media-->
                        At <strong>Syn Studio</strong>, we believe in the power of training over talent.
                        <strong>Since 2007</strong>, we’ve been <strong>helping passionate and
                        dedicated </strong>students master the fundamentals and <strong>learn high
                        level design and digital illustration skills:</strong>. The skills they now
                        use professionally to create <strong>mind-blowing concepts and
                        visuals</strong> for the <strong>next generation</strong> of entertainment media.
                    </p>
                    <br />
                    <br />
                    <p>at World-Renowned companies including:
                        <br />
                    </p>
                </div>
            </div>
            <br />
            <br />
            <div class="row row-75percent">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_124.png" alt="">
                    </div>
                    <br />
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_128.png" alt="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_126.png" alt="">
                    </div>
                    <br />
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_133.png" alt="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_132.png" alt="">
                    </div>
                    <br />
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_125.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_130.png" alt="">
                    </div>
                    <br />
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_131.png" alt="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_127.png" alt="">
                    </div>
                    <br />
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_129.png" alt="">
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <div class="container-fluid section-highlight" id="section-highlight-instructors">
            <div class="row">
                <div class="highlight-text-box row-75percent">
                </div>
            </div>
        </div>
        <div class="container-fluid section-highlight general-content" id="section-highlight-instructors-tile">
            <div class="row">
                <div class="instructors-text-box">
                    <h1 class="orange-text off-margin-header">Our instructors</h1>
                    <br />
                    <div class="section-intro-text">
                        <p>
                            <!--Concept art is a quickly evolving field so it is critical that you learn from
                            <br /> professionals who are working in the industry right now (and not five
                            <br /> or ten years ago). <strong>Over a dozen top concept artists</strong> teach part time at
                            <br /> Syn Studio so you can be directed, corrected, coached and mentored
                            <br /> by the <strong>best in the industry right now!</strong>-->
                            Concept art is a quickly evolving field so it is critical that you learn from
                            professionals who are working in the industry right now (and not five
                            or ten years ago). <strong>Over a dozen top concept artists</strong> teach part time at
                            Syn Studio so you can be directed, corrected, coached and mentored
                            by the <strong>best in the industry right now!</strong>
                        </p>
                        <br />
                        <p>
                            Our instructors have designed the characters, creatures, environments, props
                            and vehicles for your favourite movies and games such as:
                        </p>
                    </div>
                </div>
                <br />
            </div>
            <br />

            <!-- Teacher slideshow with bxslider...see the script loaded at the end of this file for implementation. The language of hover text is fired depending on Polylang's language detection -->
            <ul class="bxslider-teachers">
                <li>
                    <div class="row row-75percent">
                        <div class="col-md-4">
                            <div class="tile1">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/16_teachers_assassin3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile2">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_150_copy_3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile3">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/05_teachers_watchdogs.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row row-75percent">
                        <div class="col-md-4">
                            <div class="tile4">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/00_teachers_DeuxExHR.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile5">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/15_teachers_batmanarkhamo.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile6">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/08_teachers_300.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row row-75percent">
                        <div class="col-md-4">
                            <div class="tile7">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/07_teachers_mummy3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile8">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/08_teachers_benjamin_button.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile9">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/09_teachers_farcry3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row row-75percent">
                        <div class="col-md-4">
                            <div class="tile10">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/10_teachers_splinterCell_conviction.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile11">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/11_teachers_ac_unity.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile12">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/12_teachers_Moons_Hunters.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row row-75percent">
                        <div class="col-md-4">
                            <div class="tile13">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/13_teachers_mirror_mirror.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile14">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/14_teachers_far_cry4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile15">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/15_teachers_belle_bete.jpg" alt="Belle Bete">
                            </div>
                        </div>
                    </div>
                    <div class="row row-75percent">
                        <div class="col-md-4">
                            <div class="tile16">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/16_teachers_cosmos.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile17">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/17_teachers_ac_brotherhood.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile18">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/18_teachers_spiderwick.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="outside">
                <p><span id="slider-prev"></span>   <span id="slider-next"></span></p>
            </div>
        </div>
        <div class="container-fluid section-highlight general-content">
            <br />
            <div class="row">
                <div class="arrow-border-formatting">
                    <div class="col-md-1">
                    </div>
                    <div class="col-sm-4 hidden-xs">
                        <p class="today-text-pt1">
                            Today
                            <img class="shape-1" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_1.png" alt="">
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="today-text-pt2 clearfix">
                            Syn Studio instructors and alumni are designing the characters,
                            creatures, environments, vehicles and props for the world’s most
                            exciting and top secret AAA video games and blockbuster films!
                        </p>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
            <br />
        </div>
        <div class="container-fluid section-highlight general-content">
            <br />
            <div class="row accrediation-row">
                <div class="col-md-5 layer-91-copy-3">
                </div>
                <div class="col-md-7">
                    <div class="accrediation-text">
                        <h3>Accreditation</h3>
                        <br />
                        <p>
                            Syn Studio is an accredited private college. Our accreditation is at the highest possible level: the accrediting body being the <strong>Ministry of Education, Higher Education and Research of the province of Quebec.</strong>
                            We are the first and only school in Quebec that is licensed to give a college level diploma in Concept Art. The degree given is an attestation of college studies (AEC) and is an internationally recognized professional degree. Receiving the diploma signifies that the student is ready to enter the job market as a concept artist.
                        </p>
                        <br />
                        <img class="qc-logo" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_137.jpg" alt="">
                    </div>
                </div>
            </div>
            <br />
        </div>
        <div class="container-fluid section-highlight general-content">
            <br />
            <h2>Special thanks</h2>
            <br />
            <div class="section-intro-text">
                <p>
                    <!--Syn Studio wishes to thank the dozens of top concept artists and educators worldwide who met with us
                    <br /> to advise us in the creation of an elite concept art training program. In particular, we wish to give thanks to the
                    <br /> legendary concept artist and world renowned educator <strong> Scott Robertson</strong> for generously donating his time
                    <br /> and sharing his expertise with us on several occasions. We’d also like to thank the following artists and educators,
                    <br /> mentioned in the “special thanks” sections of our application to the Ministry of Education, who officially
                    <br /> participated in the process of developing and evaluating our program and application for accreditation.
                    <br />
                    <br />
                    <br />-->
                    Syn Studio wishes to thank the dozens of top concept artists and educators worldwide who met with us
                    to advise us in the creation of an elite concept art training program. In particular, we wish to give thanks to the
                    legendary concept artist and world renowned educator <strong> Scott Robertson</strong> for generously donating his time
                    and sharing his expertise with us on several occasions. We’d also like to thank the following artists and educators,
                    mentioned in the “special thanks” sections of our application to the Ministry of Education, who officially
                    participated in the process of developing and evaluating our program and application for accreditation.
                </p>
            </div>
            <br />
            <div id="expand" style="display:none;">
            <div class="row row-80percent">
                <div class="col-md-3">
                    <p class="personname">Marc Taro Holmes</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="" />
                    <p class="persondescription orange-text">Freelance concept
                        <br />artist, educator and
                        <br />art director</p>
                </div>
                <div class="col-md-3">
                    <p class="personname">Florent Cachot</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text">Technical director of
                        <br />lighting, compositor,
                        <br />illustrator</p>
                </div>
                <div class="col-md-3">
                    <p class="personname">Pierre Grenier</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text">Director of the
                        <br />animation program at
                        <br />Old Montreal College</p>
                </div>
                <div class="col-md-3">
                    <p class="personname">Adrian Bobb</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text">Art director,
                        <br />freelance concept
                        <br />artist &amp; educator</p>
                </div>
            </div>
            <br />
            <div class="row row-80percent">
                <div class="col-md-3">
                    <p class="personname">Donglu Yu</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text orange-text">Senior concept artist</p>
                </div>
                <div class="col-md-3">
                    <p class="personname">Thierry Doizon</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text">Art director and Senior concept artist</p>
                </div>
                <div class="col-md-3">
                    <p class="personname">Meinert Hansen</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text">Art director and educator</p>
                </div>
                <div class="col-md-3">
                    <p class="personname">Nick Oroc</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text">Senior concept artist</p>
                </div>
            </div>
            <br />
            <div class="row row-80percent">
                <div class="col-md-4">
                    <p class="personname">Jeong Hwan Shin</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text">Senior concept artist</p>
                </div>
                <div class="col-md-4">
                    <p class="personname">Bruno Gauthier Leblanc</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text">Senior concept artist</p>
                </div>
                <div class="col-md-4">
                    <p class="personname">Nick Oroc</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text">Senior concept artist</p>
                </div>
            </div>
            <br />
            <h3>
                <br />
                    And a big thanks to all those<br />
                    not included on the list above who were also <br />
                    pivotal for the research <br />
                    and writing of our application <br />
                    and those we quoted in our industry report
                <br /><br />
            </h3>
            <br />
            <br />
            <div class="row row-80percent">
                <div class="col-md-3">
                    <p class="personname">Sylvie Gagnon</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text">Expert Consultant</p>
                </div>
                <div class="col-md-3">
                    <p class="personname">Marc Lemieux</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text"> Expert Consultant</p>
                </div>
                <div class="col-md-3">
                    <p class="personname">Vlad Dergachov</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text">Senior 3D Environment Artist</p>
                </div>
                <div class="col-md-3">
                    <p class="personname">Davide Tabacco</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text">Producer</p>
                </div>
            </div>
            <br />
            <div class="row row-80percent">
                <div class="col-md-4">
                    <p class="personname">Frédéric-Antoine Marcoux</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text">Senior Recruiter</p>
                </div>
                <div class="col-md-4">
                    <p class="personname">Amir Sám Nakhjavan</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text">Researcher</p>
                </div>
                <div class="col-md-4">
                    <p class="personname">Olivia Bowman</p>
                    <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                    <p class="persondescription orange-text">Researcher</p>
                </div>
            </div>
            <br />
            <br />
            <br />
        </div> <!-- expand -->
        <p class="montpara">
            <a href="javascript:toggleDiv('expand');" style="margin:auto;padding:5px 10px;"><img style="width:auto !important;" src="<?php bloginfo('template_directory'); ?>/css/images/cadiplomaAbout/more.png" id="imgClickAndChange" onclick="changeImage()" alt=""></a>
        </p>
        </div>
        <div class="container-fluid section-highlight" id="section-highlight7">
            <div class="row">
                <p>
                    <strong>Want to see the artwork you <br />
                        could be creating at Syn Studio?<br />
                        Check out our student artwork showcase.</strong>
                </p>
                <br />
                <a class="btn btn-primary btn-orange-theme" href="<?php bloginfo('url'); ?>/student-showcase/" onClick="ga(‘send’, ‘event’, ‘CADP’, ‘click-button’, ‘Showcase’, 10);">Student Art Showcase <img class="white-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1.png" alt="Arrow" /></a>
            </div>
        </div>
    </div> <!-- end MAIN CONTENT -->

    <?php } else{ ?>

        <div class="off-canvas-menu-wrap">
            <a class="close-button" id="close-button" href="#">Fermer Menu</a>
            <ul class="menu off-canvas-menu">
                <li><a href="<?php bloginfo('url'); ?>/page-daccueil/">Page d'accueil</a></li>
                <li><a href="<?php bloginfo('url'); ?>/diplome-dart-conceptuel/">Le programme</a></li>
                <li><a href="<?php bloginfo('url'); ?>/a-propos-de-syn-studio/">À propos de Syn Studio</a></li>
                <li><a href="<?php bloginfo('url'); ?>/presentation-etudiants/">Présentation</a></li>
                <li><a href="<?php bloginfo('url'); ?>/lexperience-syn-studio/">L'éxpérience Syn Studio</a></li>
                <li><a href="<?php bloginfo('url'); ?>/informations-sur-le-programme/">Informations sur le programme</a></li>
            </ul>
        </div>
        <div class="nav-site">
            <ul class="menu toggle-menu-btn" id="open-button">
                <li><a href="#"><ul class="toggle-menu-icon"><li></li><li></li><li></li></ul> Menu</a></li>
            </ul>
            <ul class="menu nav-menu">
                <li><a href="<?php bloginfo('url'); ?>/page-daccueil/">Page d'accueil</a></li>
                <li><a href="<?php bloginfo('url'); ?>/diplome-dart-conceptuel/">Le programme</a></li>
                <li><a href="<?php bloginfo('url'); ?>/a-propos-de-syn-studio/">À propos de Syn Studio</a></li>
                <li><a href="<?php bloginfo('url'); ?>/presentation-etudiants/">Présentation</a></li>
                <li><a href="<?php bloginfo('url'); ?>/lexperience-syn-studio/">L'éxpérience Syn Studio</a></li>
                <li><a href="<?php bloginfo('url'); ?>/informations-sur-le-programme/">Informations sur le programme</a></li>
            </ul>
        </div>
        <div class="header-container" id="section-header-ca-aboutsynstudio">
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
            <h1 class="header-title shadow-text-dark orange-text"><small class="white-text">À propos de </small><br />Syn Studio</h1>
        </div> <!-- end HEADER -->

    <div class="main-content-container"> <!-- MAIN CONTENT -->
        <div class="container-fluid section-highlight deviant" id="section-highlight-intro">
            <div class="row">
                <h1 class="black-text"><strong><span class="fancy-quotations">"</span>On ne naît pas artiste.</strong></h1>
                <h1 class="orange-text"><strong>On le devient<span class="fancy-quotations">"</span></strong></h1>
                <br />
                <div class="section-intro-text40">
                    <p>
                       <!--Chez <strong>Syn Studio</strong>, nous croyons à l'entraînement plus qu'au<br /> talent. <strong>Depuis 2007</strong>, nous <strong>aidons des étudiants<br /> passionnés et dévoués</strong> à maîtriser les fondamentaux et à<br /> <strong>apprendre des compétences de conception et<br /> d'illustration de haut niveau</strong>. Ces mêmes compétences<br /> qu'ils utilisent professionnellement pour <strong>créer des concepts et des <br />images à couper le souffle</strong> pour la<br /> <strong>prochaine génération</strong> de médias de divertissement dans<br /> des entreprises à renommée mondiale.<br />-->
                        Chez <strong>Syn Studio</strong>, nous croyons à l'entraînement plus qu'au talent. <strong>Depuis 2007</strong>, nous <strong>aidons des étudiants passionnés et dévoués</strong> à maîtriser les fondamentaux et à <strong>apprendre des compétences de conception et d'illustration de haut niveau</strong>. Ces mêmes compétences qu'ils utilisent professionnellement pour <strong>créer des concepts et des images à couper le souffle</strong> pour la <strong>prochaine génération</strong> de médias de divertissement dans des entreprises à renommée mondiale.
                    </p>
                    <br /><br />
                    <p>avec des compagnies mondialement reconnues:<br /></p>
                </div>
            </div>
            <br />
            <br />
            <div class="row row-75percent">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_124.png" alt="">
                    </div>
                    <br />
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_128.png" alt="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_126.png" alt="">
                    </div>
                    <br />
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_133.png" alt="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_132.png" alt="">
                    </div>
                    <br />
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_125.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_130.png" alt="">
                    </div>
                    <br />
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_131.png" alt="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_127.png" alt="">
                    </div>
                    <br />
                    <div class="logo-box">
                        <img class="company-logos" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_129.png" alt="">
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <div class="container-fluid section-highlight" id="section-highlight-instructors">
            <div class="row">
                <div class="highlight-text-box row-75percent">
                </div>
            </div>
        </div>
        <div class="container-fluid section-highlight general-content" id="section-highlight-instructors-tile">
            <div class="row">
                <div class="instructors-text-box">
                    <h1 class="orange-text off-margin-header">Nos professeurs</h1>
                    <br />
                    <div class="section-intro-text">
                        <!--<p><br>Le conception artistique est un secteur qui évolue rapidement. <br />Il est donc essentiel d'apprendre avec des professionnels qui travaillent actuellement <br />dans ce secteur (et non pas des personnes qui y ont eu une expérience il y a cinq ou dix ans). <br /><strong>Plus d'une douzaine d'artistes professionnels enseignent</strong>  chez Syn Studio afin que vous puissiez être guidé, <br /><strong>corrigé et entraîné par les meilleurs du moment</strong>.</p>
                        <p>Nos professeurs on conçu des personnages, des créatures, des décors,<br /> des accessoires et des véhicules pour vos jeux et films préférés tels que :</p>-->
                        <p>Le conception artistique est un secteur qui évolue rapidement. Il est donc essentiel d'apprendre avec des professionnels qui travaillent actuellement dans ce secteur (et non pas des personnes qui y ont eu une expérience il y a cinq ou dix ans). <strong>Plus d'une douzaine d'artistes professionnels enseignent</strong>  chez Syn Studio afin que vous puissiez être guidé, <strong>corrigé et entraîné par les meilleurs du moment</strong>.</p>
                        <p>Nos professeurs on conçu des personnages, des créatures, des décors, des accessoires et des véhicules pour vos jeux et films préférés tels que :</p>
                    </div>
                </div>
                <br />
            </div>
            <br />

            <!-- Teacher slideshow with bxslider...see main.js for JS. -->
            <ul class="bxslider-teachers">
                <li>
                    <div class="row row-75percent">
                        <div class="col-md-4">
                            <div class="tile1">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/16_teachers_assassin3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile2">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_150_copy_3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile3">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/05_teachers_watchdogs.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row row-75percent">
                        <div class="col-md-4">
                            <div class="tile4">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/00_teachers_DeuxExHR.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile5">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/15_teachers_batmanarkhamo.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile6">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/08_teachers_300.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row row-75percent">
                        <div class="col-md-4">
                            <div class="tile7">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/07_teachers_mummy3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile8">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/08_teachers_benjamin_button.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile9">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/09_teachers_farcry3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row row-75percent">
                        <div class="col-md-4">
                            <div class="tile10">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/10_teachers_splinterCell_conviction.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile11">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/11_teachers_ac_unity.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile12">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/12_teachers_Moons_Hunters.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row row-75percent">
                        <div class="col-md-4">
                            <div class="tile13">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/13_teachers_mirror_mirror.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile14">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/14_teachers_far_cry4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile15">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/15_teachers_belle_bete.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row row-75percent">
                        <div class="col-md-4">
                            <div class="tile16">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/16_teachers_cosmos.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile17">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/17_teachers_ac_brotherhood.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tile18">
                                <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/18_teachers_spiderwick.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="outside">
                <p><span id="slider-prev"></span>    <span id="slider-next"></span></p>
            </div>
        </div>
        <div class="container-fluid section-highlight general-content">
            <br />
            <div class="row">
                <div class="arrow-border-formatting">
                    <div class="col-md-1">
                    </div>
                    <div class="col-sm-4 hidden-xs">
                        <p class="today-text-pt1">
                            Aujourd'hui
                            <img class="shape-1" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_1.png" alt="">
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="today-text-pt2 clearfix">
                            Les professeurs et les élèves de Syn Studio conçoivent les personnages, les créatures, les décors, les véhicules et les accessoires des jeux vidéos les plus attendus et les mieux classés dans le monde, ainsi que ceux des films à succès!
                        </p>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
            <br />
        </div>
        <div class="container-fluid section-highlight general-content">
            <br />
            <div class="row accrediation-row">
                <div class="col-md-5 layer-91-copy-3">
                </div>
                <div class="col-md-7">
                    <div class="accrediation-text">
                        <h3>Qualifications</h3>
                        <br />
                        <p>
                            Syn Studio est un institut privé qualifié. Nos avons le niveau de qualification le plus élevé possible : notre accréditation nous est donnée par le Ministère de l'Éducation, l'Ensignement Supérieur et la Recherche de la province de Québec. Nous sommes la seule et unique école québecoise à avoir obtenu le permis de délivrer un diplôme en conception artistique. Le diplôme est une attestation d'études collégiales (AEC) qui est reconnu mondialement comme un diplôme professionnel. L'obtention de ce diplôme prouve que l'étudiant est prêt à intégrer le marché professionnel en tant qu'artiste concepteur(trice).
                        </p>
                        <br />
                        <img class="qc-logo" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/layer_137.jpg" alt="">
                    </div>
                </div>
            </div>
            <br />
        </div>
        <div class="container-fluid section-highlight general-content">
            <br />
            <h2>Remerciements</h2>
            <br />
            <div class="section-intro-text">
                <p>
                    Syn Studio souhaite remercier la douzaine d'artistes renommés et d'éducateurs qui nous ont rencontré pour nous conseiller dans la création de notre programme d'entraînement d'élite en conception artistique. Nous souhaitons remercier plus particulièrement l'artiste légendaire et éducateur à la renommé mondiale, <strong>Scott Robertson</strong>,  qui a généreusement donné de son temps et partagé avec nous son expertise à plusieurs occasions. Nous aimerions aussi remercier les artistes et les professeurs suivants, mentionnés dans la section de remerciements de notre candidature auprès du Ministère de l'Éducation, car ils ont participé au développement et à l'évaluation du programme :
                </p>
            </div>
            <br />
            <div id="expand" style="display:none;">
            <div class="row row-80percent">
                <div class="col-md-3">
                        <p class="personname">Marc Taro Holmes</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="" />
                        <p class="persondescription orange-text">artiste conceptuel indépendant,<br />professeur et directeur<br />  artistique</p>
                    </div>
                    <div class="col-md-3">
                        <p class="personname">Florent Cachot</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text">directeur technique pour l'éclairage, compositeur, illustrateur</p>
                    </div>
                    <div class="col-md-3">
                        <p class="personname">Pierre Grenier</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text">directeur du programme d'animation au Cégep du vieux Montréal</p>
                    </div>
                    <div class="col-md-3">
                        <p class="personname">Adrian Bobb</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text">directeur artistique, artiste concepteur indépendant et professeur</p>
                    </div>
            </div>
            <br />
            <div class="row row-80percent">
                <div class="col-md-3">
                        <p class="personname">Donglu Yu</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text orange-text">artiste conceptrice sénior</p>
                    </div>
                    <div class="col-md-3">
                        <p class="personname">Thierry Doizon</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text">directeur artistique et artiste concepteur sénior</p>
                    </div>
                    <div class="col-md-3">
                        <p class="personname">Meinert Hansen</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text">professeur et artiste concepteur sénior</p>
                    </div>
                    <div class="col-md-3">
                        <p class="personname">Nick Oroc</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text">artiste concepteur sénior</p>
                    </div>
            </div>
            <br />
            <div class="row row-80percent">
                <div class="col-md-4">
                        <p class="personname">Jeong Hwan Shin</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text">artiste concepteur sénior</p>
                    </div>
                    <div class="col-md-4">
                        <p class="personname">Bruno Gauthier Leblanc</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text">artiste concepteur sénior</p>
                    </div>
                    <div class="col-md-4">
                        <p class="personname">Sean Samuels</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text">artiste concepteur et matte painter sénior</p>
                    </div>
            </div>
            <br />
            <h3>
                <br />
                    Un grand remerciement à tous ceux qui ne sont pas cités dans la liste ci-dessus mais<br />
                    qui ont joué un rôle décisif dans la rédaction de notre candidature et ceux que nous avons cité dans notre rapport sectoriel :
                <br /><br />
            </h3>
            <br />
            <br />
            <div class="row row-80percent">
                <div class="col-md-3">
                        <p class="personname">Sylvie Gagnon</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text">consultante experte</p>
                    </div>
                    <div class="col-md-3">
                        <p class="personname">Marc Lemieux</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text">consultant expert</p>
                    </div>
                    <div class="col-md-3">
                        <p class="personname">Vlad Dergachov</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text">créateur de décors 3D sénior</p>
                    </div>
                    <div class="col-md-3">
                        <p class="personname">Davide Tabacco</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text">producteur</p>
                    </div>
            </div>
            <br />
            <div class="row row-80percent">
                <div class="col-md-4">
                        <p class="personname">Frédéric-Antoine Marcoux</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text">recruteur confirmé</p>
                    </div>
                    <div class="col-md-4">
                        <p class="personname">Amir Sám Nakhjavan</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text">chercheur</p>
                    </div>
                    <div class="col-md-4">
                        <p class="personname">Olivia Bowman</p>
                        <img class="personarrow" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAbout/shape_2.png" alt="">
                        <p class="persondescription orange-text">chercheur</p>
                    </div>
            </div>
            <br />
            <br />
            <br />
        </div> <!-- expand -->
        <p class="montpara">
            <a href="javascript:toggleDiv('expand');" style="margin:auto;padding:5px 10px;"><img style="width:auto !important;" src="<?php bloginfo('template_directory'); ?>/css/images/cadiplomaAbout/more.png" id="imgClickAndChange" onclick="changeImage()" alt=""></a>
        </p>
        </div>
        <div class="container-fluid section-highlight" id="section-highlight7">
            <div class="row">
                <p>
                    <strong><strong>Vous voulez voir un aperçu de ce <br />que vous pourriez créer à Syn Studio? Jetez un oeil<br /> aux oeuvres de nos élèves.</strong></strong>
                </p>
                <br />
                <a class="btn btn-primary btn-orange-theme" href="<?php bloginfo('url'); ?>/presentation-etudiants/" onClick="ga(‘send’, ‘event’, ‘CADP’, ‘click-button’, ‘Presentation, 10);">Présentation des étudiants <img class="white-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1.png" alt="Arrow" /></a>
            </div>
        </div>
    </div>
    <!-- end MAIN CONTENT -->
    <?php } ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            jQuery(".tile1").append("<p class='hovertext1'><?php if($currentLang=="en"){echo "Our instructor Remko Troost designed Conor, the main character.";} else{ echo "Notre professeur Remko Troost a conçu Connor, le personnage principal d'Assassin's Creed III.";} ?></p>");
            jQuery(".tile1 .hovertext1").hide();
            jQuery(".tile1").mouseover(function(){
                jQuery(".tile1 .hovertext1").show();
            }).mouseout(function(){
                jQuery(".tile1 .hovertext1").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile2").append("<p class='hovertext2'><?php if($currentLang=="en"){echo "Several Syn Studio Instructors designed props and environments for the X-Men movies.";} else{ echo "Plusieurs des professeurs de Syn Studio ont créé des environnements pour les films de la série X-Men.";} ?></p>");
            jQuery(".tile2 .hovertext2").hide();
            jQuery(".tile2").mouseover(function(){
                jQuery(".tile2 .hovertext2").show();
            }).mouseout(function(){
                jQuery(".tile2 .hovertext2").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile3").append("<p class='hovertext3'><?php if($currentLang=="en"){echo "Jeong H.Shin designed many vehicles and props for the video game Watch Dogs.";} else{ echo "Jeong H.Shin a créé les principaux véhicules et accessoires pour le jeu vidéo Watch Dogs.";} ?></p>");
            jQuery(".tile3 .hovertext3").hide();
            jQuery(".tile3").mouseover(function(){
                jQuery(".tile3 .hovertext3").show();
            }).mouseout(function(){
                jQuery(".tile3 .hovertext3").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile4").append("<p class='hovertext4'><?php if($currentLang=="en"){echo "Several of our instructors worked as senior concept artists on the main characters and main environments of the video game Deux Ex : Human Revolution.";} else{ echo "Plusieurs de nos instructeurs ont travaillé sur les principaux personnages et les principaux environnements du jeu Deus Ex : Human Revolution.";} ?></p>");
            jQuery(".tile4 .hovertext4").hide();
            jQuery(".tile4").mouseover(function(){
                jQuery(".tile4 .hovertext4").show();
            }).mouseout(function(){
                jQuery(".tile4 .hovertext4").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile5").append("<p class='hovertext5'><?php if($currentLang=="en"){echo "Several Syn Studio Instructors designed props and environments for the Batman games.";} else{ echo "Plusieurs professeurs de Syn Studio ont aussi créé des accessoires et des décors pour les jeux vidéo de la série des Batman.";} ?></p>");
            jQuery(".tile5 .hovertext5").hide();
            jQuery(".tile5").mouseover(function(){
                jQuery(".tile5 .hovertext5").show();
            }).mouseout(function(){
                jQuery(".tile5 .hovertext5").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile6").append("<p class='hovertext6'><?php if($currentLang=="en"){echo "Our instructor Meinert Hansen created 65 key frame illustrations for the film 300.";} else{ echo "Notre professeur Meinert Hansen a réalisé 65 illustrations pour le film 300.";} ?></p>");
            jQuery(".tile6 .hovertext6").hide();
            jQuery(".tile6").mouseover(function(){
                jQuery(".tile6 .hovertext6").show();
            }).mouseout(function(){
                jQuery(".tile6 .hovertext6").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile7").append("<p class='hovertext7'><?php if($currentLang=="en"){echo "Several of our instructors designed key illustrations, concepts and environments for the movie The Mummy : Tomb of the Dragon Emperor.";} else{ echo "Plusieurs de nos instructeurs ont créé des illustrations, des concepts et des décors pour le film La Momie : La tombe de l’Empereur Dragon.";} ?></p>");
            jQuery(".tile7 .hovertext7").hide();
            jQuery(".tile7").mouseover(function(){
                jQuery(".tile7 .hovertext7").show();
            }).mouseout(function(){
                jQuery(".tile7 .hovertext7").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile8").append("<p class='hovertext8'><?php if($currentLang=="en"){echo "Our instructor Christian Robert de Massy designed environments for the movie The Curious Case of Benjamin Button.";} else{ echo "Notre instructeur Christian Robert de Massy a dessiné des décors pour le film l’Etrange Histoire de Benjamin Button.";} ?></p>");
            jQuery(".tile8 .hovertext8").hide();
            jQuery(".tile8").mouseover(function(){
                jQuery(".tile8 .hovertext8").show();
            }).mouseout(function(){
                jQuery(".tile8 .hovertext8").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile9").append("<p class='hovertext9'><?php if($currentLang=="en"){echo "Several of our instructors designed environments, characters and vehicles for the game Far Cry 3.";} else{ echo "Plusieurs de nos instructeurs ont dessiné des décors, des personnages et des véhicules pour le jeu Far Cry 3.";} ?></p>");
            jQuery(".tile9 .hovertext9").hide();
            jQuery(".tile9").mouseover(function(){
                jQuery(".tile9 .hovertext9").show();
            }).mouseout(function(){
                jQuery(".tile9 .hovertext9").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile10").append("<p class='hovertext10'><?php if($currentLang=="en"){echo "Our instructor Christopher Cao helped to design the characters on the video game Tom Clancy’s Splinter Cell : Conviction.";} else{ echo "Notre instructeur Christopher Cao  a aidé dans le design de plusieurs personnages dans le jeu Tom Clancy’s Splinter Cell : Conviction.";} ?></p>");
            jQuery(".tile10 .hovertext10").hide();
            jQuery(".tile10").mouseover(function(){
                jQuery(".tile10 .hovertext10").show();
            }).mouseout(function(){
                jQuery(".tile10 .hovertext10").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile11").append("<p class='hovertext11'><?php if($currentLang=="en"){echo "Several of our instructors designed environments, characters and props for the video game Assassin’s Creed : Unity.";} else{ echo "Plusieurs de nos instructeurs ont dessiné des environnements, des personnages, et des accessoires pour le jeu video Assassin’s Creed : Unity.";} ?></p>");
            jQuery(".tile11 .hovertext11").hide();
            jQuery(".tile11").mouseover(function(){
                jQuery(".tile11 .hovertext11").show();
            }).mouseout(function(){
                jQuery(".tile11 .hovertext11").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile12").append("<p class='hovertext12'><?php if($currentLang=="en"){echo "Our instructor Xin Ran Liu, was lead artist on Moon Hunters, one of the biggest Kickstarter indy game successes of 2014.";} else{ echo "Notre instructeur Xin Ran Liu fut l'artiste principal de Moon Hunters, l'un des plus gros succès Kickstarter en tant que jeu indépendant de 2014.";} ?></p>");
            jQuery(".tile12 .hovertext12").hide();
            jQuery(".tile12").mouseover(function(){
                jQuery(".tile12 .hovertext12").show();
            }).mouseout(function(){
                jQuery(".tile12 .hovertext12").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile13").append("<p class='hovertext13'><?php if($currentLang=="en"){echo "Several of our instructors designed environments for the movie Mirror, Mirror.";} else{ echo "Plusieurs de nos instructeurs ont aidé à la création de décors pour le film Blanche Neige.";} ?></p>");
            jQuery(".tile13 .hovertext13").hide();
            jQuery(".tile13").mouseover(function(){
                jQuery(".tile13 .hovertext13").show();
            }).mouseout(function(){
                jQuery(".tile13 .hovertext13").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile14").append("<p class='hovertext14'><?php if($currentLang=="en"){echo "Several of our instructors designed environments and props for the video game Far Cry 4.";} else{ echo "Plusieurs de nos instructeurs ont aidé à la conception de décors et de véhicules pour le jeu vidéo Far Cry 4.";} ?></p>");
            jQuery(".tile14 .hovertext14").hide();
            jQuery(".tile14").mouseover(function(){
                jQuery(".tile14 .hovertext14").show();
            }).mouseout(function(){
                jQuery(".tile14 .hovertext14").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile15").append("<p class='hovertext15'><?php if($currentLang=="en"){echo "Several of our instructors designed environments for the movie Beauty and the Beast.";} else{ echo "Plusieurs de nos instructeurs ont aidé dans la conception de décors pour le film la Belle et la Bête.";} ?></p>");
            jQuery(".tile15 .hovertext15").hide();
            jQuery(".tile15").mouseover(function(){
                jQuery(".tile15 .hovertext15").show();
            }).mouseout(function(){
                jQuery(".tile15 .hovertext15").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile16").append("<p class='hovertext16'><?php if($currentLang=="en"){echo "Our instructor Dhamindra Jeevan designed alien planets for the Emmy award winning TV show Cosmos: A Spacetime Odyssey.";} else{ echo "Notre  instructeur Dhamindra Jeevan a créé les planètes ‘aliens’ pour la série TV récompensée aux Emmy, Cosmos : Une odyssée à travers l’univers.";} ?></p>");
            jQuery(".tile16 .hovertext16").hide();
            jQuery(".tile16").mouseover(function(){
                jQuery(".tile16 .hovertext16").show();
            }).mouseout(function(){
                jQuery(".tile16 .hovertext16").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile17").append("<p class='hovertext17'><?php if($currentLang=="en"){echo "Several of our instructors designed environments, characters and props for the video game Assassin’s Creed : Brotherhood.";} else{ echo "Plusieurs de nos instructeurs ont créé des décors, des personnages et des accessoires pour le jeu vidéo Assassin’s Creed : Brotherhood.";} ?></p>");
            jQuery(".tile17 .hovertext17").hide();
            jQuery(".tile17").mouseover(function(){
                jQuery(".tile17 .hovertext17").show();
            }).mouseout(function(){
                jQuery(".tile17 .hovertext17").hide();
            });
        });

        $(document).ready(function(){
            jQuery(".tile18").append("<p class='hovertext18'><?php if($currentLang=="en"){echo "Our instructor Meinert Hansen designed the main house and other environments for The Spiderwick Chronicles.";} else{ echo "Notre instructeur Meinert Hansen  a dessiné la maison principale et d’autres décors pour le film Les Chroniques de Spiderwick.";} ?></p>");
            jQuery(".tile18 .hovertext18").hide();
            jQuery(".tile18").mouseover(function(){
                jQuery(".tile18 .hovertext18").show();
            }).mouseout(function(){
                jQuery(".tile18 .hovertext18").hide();
            });
        });
    </script>

<?php get_footer('microsite'); ?>
