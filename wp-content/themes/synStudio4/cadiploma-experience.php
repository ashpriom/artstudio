<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
/*
Template Name: Concept Art Diploma - Syn Studio Experience
 */
?>

<?php get_header('microsite'); ?>
<?php if (function_exists('pll_current_language')) { $currentLang = pll_current_language(slug); } ?>

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
    @media (min-width: 768px) and (max-width: 1199px){
        .navbar-nav>li{ width: auto;}
    }
</style>

<script type="text/javascript">

/* JS for secondary floating menu, not being used right now.

jQuery(document).ready(function(){
  $('.scroll-link').on('click', function(event){
    event.preventDefault();
    var sectionID = $(this).attr("data-id");
    scrollToID('#' + sectionID, 1000);
  });
  $('.scroll-top').on('click', function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop:0}, 'slow');     
  });
  $('#nav-toggle').on('click', function (event) {
    event.preventDefault();
    $('#main-nav').toggleClass("open");
  });
});

// scroll function
function scrollToID(id, speed){
  var offSet = 50;
  var targetOffset = $(id).offset().top - offSet;
  var mainNav = $('#main-nav');
  $('html,body').animate({scrollTop:targetOffset}, speed);
  if (mainNav.hasClass("open")) {
    mainNav.css("height", "1px").removeClass("in").addClass("collapse");
    mainNav.removeClass("open");
  }
}
if (typeof console === "undefined") {
    console = {log: function(){ }};
}

jQuery(document).ready(function (){
    var top = $('#headeroo').offset().top - parseFloat($('#headeroo').css('marginTop').replace(/auto/, 100));
    $(window).scroll(function (event){
        var y = $(this).scrollTop();
    if (y >= top) {
      $('#headeroo').addClass('fixed');
      $('#headeroo').addClass('shortheader');
    } else {
      $('#headeroo').removeClass('fixed');
      $('#headeroo').removeClass('shortheader');
    }
    });
});*/

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
        <div class="header-container" id="section-header-ca-synstudio-experience">
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
            <h1 class="header-title shadow-text-dark orange-text"><small class="white-text">The Syn Studio</small><br />Experience</h1>
        </div>

        <p class="header-credit">Art: Xin Ran Liu</p> <!-- very important to give image credit where due -->

        <!-- MAIN CONTENT 
        
        HTML for the secondary floating menu, currently inactive

        <div id="headeroo" class="shortheader" style="margin-top:-30px;">
            <div>
            <div class="container">
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand scroll-top"><img src="<?php echo get_template_directory_uri(); ?>/images/up.png" alt="" /></a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-nav">
                        <ul class="nav navbar-nav">
                            <li><a href="#" class="scroll-link" data-id="thecity">The City</a></li>
                            <li><a href="#" class="scroll-link" data-id="thecommunity">The Community</a></li>
                            <li><a href="#" class="scroll-link" data-id="theschool">The School</a></li>
                            <li><a href="#" class="scroll-link" data-id="thepeople">The People</a></li>
                            <li><a href="#" class="scroll-link" data-id="thechange">How It Will Change Your Life</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            </div>
        </div>-->

        <div class="main-content-container">
            <div class="container-fluid section-highlight general-content exp-highlight">
                <br />
                <div id="thecity">
                <div class="row">
                    <div class="experience-container top-border hidden-xs hidden-sm"> <!-- only on large screen -->
                        <div class="experience-wrapper">
                            <div class="experience-tag">
                                <div>
                                    <h3 class="experience-headline-title">The City</h3>
                                    <p class="experience-quote">
                                        Creative, Artistic, Safe,
                                        <br />Affordable, Fun, Healthy <!-- These br tags are there for forced line break to improve readability -->
                                    </p>                                    
                                </div>
                            </div>
                            <div class="experience-arrow">
                                <img class="experience-right-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_2.png" alt="" />
                            </div>
                            <div class="experience-description">
                                <p>
                                   <b>Syn Studio</b> is located in the <b>heart of downtown Montreal</b> - rated 2nd best city to live in the world by <b>The Economist in 2015</b>.
                                    Montreal is also a <b>world artistic and cultural capital</b>, recognized by the<b> United Nations Economic Scientific and Cultural Organization</b> as one of the world’s cities of design. &nbsp;
                                    <br /><br />It is one of <b>the biggest student cities </b>and <b>one of the most affordable</b> in North America. And it is <b>a world entertainment hub, attracting new studios</b> and <b>new concept art jobs</b>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="experience-headline hidden-md hidden-lg"> <!-- only on small to medium -->
                        <div class="col-md-1"></div>
                        <div class="col-md-4 top-border col-left-border">
                            <ul class="experience-headline-list">
                                <li class="experience-headline-text">
                                    <h3 class="experience-headline-title">The City</h3>
                                    <br />
                                    <p>
                                        Creative, Artistic, Safe,
                                        <br />
                                        Affordable, Fun, Healthy
                                        <br />
                                    </p>
                                </li>
                                <li class="text-center hidden-xs hidden-sm">
                                    <img class="shape-1-2" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_2.png" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 top-border-description">
                            <p class="experience-headline-description-right">
                                <b>Syn Studio</b> &nbsp;is located in the <b>heart of downtown Montreal</b> - rated 2nd best city to live in the world by <b>The Economist in 2015</b>.
                                Montreal is also a <b>world artistic and cultural capital</b>, recognized by the<b> United Nations Economic Scientific and Cultural Organization</b> as one of the world’s cities of design. &nbsp;
                                <br /><br />It is one of <b>the biggest student cities </b>and <b>one of the most affordable</b> in North America. And it is <b>a world entertainment hub, attracting new studios</b> and <b>new concept art jobs</b>.
                            </p>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <img class="slideExperience" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/slide_montrealcity.jpg" alt="the city" />
                </div>
                </div>
                <br />
                <br />
                <div id="thecommunity">
                <div class="row">
                    <div class="experience-container hidden-xs hidden-sm"> <!-- only on large screen -->
                        <div class="experience-wrapper">
                            <div class="experience-description-inverted">
                                <p>
                                    The <b>Syn Studio community</b> connects our students with the industry in <b>Montreal and beyond </b>so you can build the <b>critical relationships&nbsp;</b>you need to succeed. We organize regular student <b>art shows, industry parties&nbsp;and events</b> such as portfolio review sessions, masterclasses with world-famous concept artists, free demos, panel talks, and <b>themed figure drawing workshops.</b>
                                    <br /><br />Although it’s definitely <b>NOT a party school</b>, we give you all <b>the opportunities</b>&nbsp;you need to <b>make connections</b> and find <b>lifelong friends, allies and comrades!</b> At <b>Syn Studio</b>, you belong to a community of <b>passionate artists</b> who share and help each other thrive! The industry is competitive so we share and cooperate to <b>grow as fast as possible!</b>
                                </p>
                            </div>
                            <div class="experience-tag-inverted">
                                <h3 class="experience-headline-title" style="font-size: 40px !important;">The Community</h3>
                                <p class="experience-quote">
                                    Bringing together students
                                    <br />and industry
                                    <br />
                                </p>
                            </div>
                            <div class="experience-arrow-inverted">
                                <img class="experience-right-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_2.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <!-- only on small to medium -->
                    <div class="experience-headline hidden-md hidden-lg">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-4 hidden-md hidden-lg">
                            <ul class="experience-headline-list">
                                <li class="experience-headline-text">
                                    <h3 class="experience-headline-title" style="font-size: 40px !important;">The Community</h3>
                                    <br />
                                    <p>
                                        Bringing together students
                                        <br />and industry
                                        <br />
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p class="experience-headline-description-left">
                                The <b>Syn Studio community</b> connects our students with the industry in <b>Montreal and beyond </b>so you can build the <b>critical relationships&nbsp;</b>you need to succeed. We organize regular student <b>art shows, industry parties&nbsp;and events</b> such as portfolio review sessions, masterclasses with world-famous concept artists, free demos, panel talks, and <b>themed figure drawing workshops.</b>
                                <br /><br /> Although it’s definitely <b>NOT a party school</b>, we give you all <b>the opportunities</b>&nbsp;you need to <b>make connections</b> and find <b>lifelong friends, allies and comrades!</b> At <b>Syn Studio</b>, you belong to a community of <b>passionate artists</b> who share and help each other thrive! The industry is competitive so we share and cooperate to <b>grow as fast as possible!</b>
                         </p>
                        </div>
                        <div class="col-md-4 hidden-xs hidden-sm col-right-border">
                            <ul class="experience-headline-list">
                                <li class="text-center hidden-xs hidden-sm">
                                    <img class="shape-1-rev" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_rev_long.png" alt="">
                                </li>
                                <li class="experience-headline-text">
                                    <h3 class="experience-headline-title headline-text-right" style="font-size: 40px !important;">The <br />Community</h3>
                                    <br />
                                    <p class="headline-text-right">
                                        Bringing together students
                                        <br />and industry
                                        <br />
                                        <br />
                                       
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                    <img class="slideExperience" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/slide_community.jpg" alt="the community" />
                </div>
                </div>
                <br />
                <br />
                <div id="theschool">
                <div class="row">
                    <!-- only on large screen -->
                    <div class="experience-container hidden-xs hidden-sm">
                        <div class="experience-wrapper">
                            <div class="experience-tag">
                                <div class="experience-float-right">
                                    <h3 class="experience-headline-title">The School</h3>
                                    <p class="experience-quote">
                                        Creative atmosphere, art
                                        studio feel, the latest
                                        technology from Wacom
                                        <br />
                                        <br />
                                    </p>
                                   
                                </div>
                            </div>
                            <div class="experience-arrow">
                                <img class="experience-right-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_2.png" alt="" />
                            </div>
                            <div class="experience-description">
                                <p>
                                    <b>Syn Studio</b> is a special place. When we <b>opened in 2007</b>, we were a <b>traditional drawing</b> and <b>painting atelier</b> in a <b>beautiful downtown loft</b>. We were like a secret oasis where concept artists, animators, comic book artists, illustrators and fine artists could practice their fundamentals with master level instructors.
                                    Since then, we’ve expanded, moved into a much <b>larger location and focused on concept art</b> and <b>digital illustration</b>. But we kept the feel of a <b>beautiful art studio</b> with <b>hard wood floors, high ceilings, large windows and a big dose of charm</b>. it’s not just a computer room (aka studio environment) like many other schools offer, it’s a space for learning and creativity.
                                    <br><br>You’ll have the <b>same pressure and deadlines</b> like in a production studio but you’ll be in a much warmer, brighter and more <b>artistic environment</b>. It’s an inspiring space where you feel safe to explore your <b>full artistic potential</b> and to <b>create freely</b>. The school’s standards are high - they are <b>industry standards</b>. The workload is high and the <b>deadlines are serious</b>. The school has a <b>culture of excellence</b> where everyone is expected to overcome their <b>challenges and focus on growing and becoming their best</b> selves, both artistically and as a <b>human being</b>. We will <b>take your hand</b> and guide you on your journey to <b>artistic and personal mastery</b> - every step of the way.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- only on small to medium -->
                    <div class="experience-headline hidden-md hidden-lg">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-4">
                            <ul class="experience-headline-list">
                                <li class="experience-headline-text">
                                    <h3 class="experience-headline-title">The School</h3>
                                    <br />
                                    <p>
                                        Creative atmosphere, art
                                        <br /> studio feel, the latest
                                        <br /> technology from Wacom
                                        <br />
                                    </p>
                                </li>
                                <li class="text-center hidden-xs hidden-sm">
                                    <img class="shape-1-2-school" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_2_long.png" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-right-border">
                            <p class="experience-headline-description-right">
                           <b>Syn Studio</b> is a special place. When we <b>opened in 2007</b>, we were a <b>traditional drawing</b> and <b>painting atelier</b> in a <b>beautiful downtown loft</b>. We were like a secret oasis where concept artists, animators, comic book artists, illustrators and fine artists could practice their fundamentals with master level instructors.
                            Since then, we’ve expanded, moved into a much <b>larger location and focused on concept art</b> and <b>digital illustration</b>. But we kept the feel of a <b>beautiful art studio</b> with <b>hard wood floors, high ceilings, large windows and a big dose of charm</b>. it’s not just a computer room (aka studio environment) like many other schools offer, it’s a space for learning and creativity.
                            <br /><br /> You’ll have the <b>same pressure and deadlines</b> like in a production studio but you’ll be in a much warmer, brighter and more <b>artistic environment</b>. It’s an inspiring space where you feel safe to explore your <b>full artistic potential</b> and to <b>create freely</b>. The school’s standards are high - they are <b>industry standards</b>. The workload is high and the <b>deadlines are serious</b>. The school has a <b>culture of excellence</b> where everyone is expected to overcome their <b>challenges and focus on growing and becoming their best</b> selves, both artistically and as a <b>human being</b>. We will <b>take your hand</b> and guide you on your journey to <b>artistic and personal mastery</b> - every step of the way.</p>
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                    <img class="slideExperience" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/slide_school.jpg" alt="the school" />
                </div>
                </div>
                <br />
                <br />
                <div id="thepeople">
                <div class="row">
                    <!-- only on large screen -->
                    <div class="experience-container hidden-xs hidden-sm">
                        <div class="experience-wrapper">
                            <div class="experience-description-inverted">
                                <p>
                                    Concept art is a <b>team sport</b>. Blockbuster <b>movies and games</b> tend to have a core concept team of <b>five or more concept artists</b> under the guidance of a<b> production designer</b> or <b>art director</b>.
                                    At <b>Syn Studio</b>, you will battle through <b>crunch time</b> with your team to <b>make tight deadlines and deliver epic concept art</b> that defines the look and feel of an <b>entertainment product</b> and helps the <b>production artists</b> connect the audience with the story. Your <b>teachers will guide</b> you as your art directors and your <b>classmates will be your concept team mates</b>. The bonds you will form with your <b>comrades in art will last a lifetime</b>. You will be <b>surrounded by passionate, skillful, positive, energetic, friendly</b> people on the same life journey together. So come <b>surround yourself</b> with like-minded artists on the path to <b>success</b>.
                                </p>
                            </div>
                            <div class="experience-tag-inverted">
                                <h3 class="experience-headline-title">The People</h3>
                                <p class="experience-quote">
                                    Passionate people who care,
                                    Industry pros, Friendly staff,
                                    Artists on the same journey as you, Create bonds for life.
                                </p>
                            </div>
                            <div class="experience-arrow-inverted">
                                <img class="experience-right-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_2.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <!-- only on small to medium -->
                    <div class="experience-headline hidden-md hidden-lg">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-4 hidden-md hidden-lg">
                            <ul class="experience-headline-list">
                                <li class="experience-headline-text">
                                    <h3 class="experience-headline-title">The People</h3>
                                    <br />
                                    <p>
                                        Passionate people who care,
                                        Industry pros, Friendly staff,
                                        Artists on the same journey as you, Create bonds for life.                                    
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p class="experience-headline-description-left">
                            Concept art is a <b>team sport</b>. Blockbuster <b>movies and games</b> tend to have a core concept team of <b>five or more concept artists</b> under the guidance of a<b> production designer</b> or <b>art director</b>.
                            At <b>Syn Studio</b>, you will battle through <b>crunch time</b> with your team to <b>make tight deadlines and deliver epic concept art</b> that defines the look and feel of an <b>entertainment product</b> and helps the <b>production artists</b> connect the audience with the story. Your <b>teachers will guide</b> you as your art directors and your <b>classmates will be your concept team mates</b>. The bonds you will form with your <b>comrades in art will last a lifetime</b>. You will be <b>surrounded by passionate, skillful, positive, energetic, friendly</b> people on the same life journey together. So come <b>surround yourself</b> with like-minded artists on the path to <b>success</b>. </p>
                        </div>
                        <div class="col-md-4 hidden-xs hidden-sm col-right-border">
                            <ul class="experience-headline-list">
                                <li class="text-center hidden-xs hidden-sm">
                                    <img class="shape-1-rev" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_rev.png" alt="">
                                </li>
                                <li class="experience-headline-text">
                                    <h3 class="experience-headline-title headline-text-right">The People</h3>
                                    <br />
                                    <p class="headline-text-right">
                                        Passionate people who care,
                                        Industry pros, Friendly staff,
                                        Artists on the same journey as you, Create bonds for life.                                  
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                    <img class="slideExperience" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/slide_people.jpg" alt="the people" />
                </div>
                </div>
                <br />
                <br />
                <div id="thechange">
                <div class="row">
                    <!-- only on large screen -->
                    <div class="experience-container hidden-xs hidden-sm">
                        <div class="experience-wrapper">
                            <div class="experience-tag">
                                <div class="experience-float-right">
                                    <h3 class="experience-headline-title" style="font-size: 40px !important;">How<br />Syn Studio<br />
                                        will change<br />
                                        your life
                                    </h3>
                                    <p class="experience-quote">
                                        Skills, Confidence, Success,
                                        <br />Happiness.
                                        <br />
                                    </p>
                              
                                </div>
                            </div>
                            <div class="experience-arrow">
                                <img class="experience-right-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_2.png" alt="" />
                            </div>
                            <div class="experience-description">
                                <p>
                                    When you fully make up your mind that you are going to do whatever it takes to get your dream life as a <b>concept artist</b>, nothing can stop you. If you need to <b>live, breathe, eat and sleep concept art</b>, then <b>Syn Studio</b> isn’t a choice, it’s your destiny.
                                    <br /><br /> Once you are in the right city, and you are part of the right community, going to the <b>right school</b> and bonding with the <b>right people</b>, then you are definitely on the right path. <b>The artist’s journey never ends</b>, but along the way, you will find <b>community, friendship, inner peace, happiness and security</b>.
                                    You will immerse yourself in the <b>training and reach a level of productivity, creativity, skillfulness and mastery</b> that you never thought would be possible in <b>just 18 months</b>. By the end you will be a <b>different person: secure and confident</b> in your skills, and with all the <b>tools, allies and connections</b> you need to succeed as <b>a professional concept artist</b>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- only on small to medium -->
                    <div class="experience-headline hidden-md hidden-lg">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-4">
                            <ul class="experience-headline-list">
                                <li class="experience-headline-text">
                                    <h3 class="experience-headline-title">How<br />Syn Studio<br />
                                        will change<br />
                                        your life
                                    </h3>
                                    <br />
                                    <p>
                                        Skills, Confidence, Success,
                                        <br />Happiness.
                                        <br />
                                    </p>
                                </li>
                                <li class="text-center hidden-xs hidden-sm">
                                    <img class="shape-1-2" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_2_long.png" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-right-border">
                            <p class="experience-headline-description-right">
                             When you fully make up your mind that you are going to do whatever it takes to get your dream life as a <b>concept artist</b>, nothing can stop you. If you need to <b>live, breathe, eat and sleep concept art</b>, then <b>Syn Studio</b> isn’t a choice, it’s your destiny.
                            <br /><br /> Once you are in the right city, and you are part of the right community, going to the <b>right school</b> and bonding with the <b>right people</b>, then you are definitely on the right path. <b>The artist’s journey never ends</b>, but along the way, you will find <b>community, friendship, inner peace, happiness and security</b>.
                            You will immerse yourself in the <b>training and reach a level of productivity, creativity, skillfulness and mastery</b> that you never thought would be possible in <b>just 18 months</b>. By the end you will be a <b>different person: secure and confident</b> in your skills, and with all the <b>tools, allies and connections</b> you need to succeed as <b>a professional concept artist</b>.</p>
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                    <img class="slideExperience" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/slide_life.jpg" alt="the career" />
                </div>
                <br />
            </div>
            </div>
            <div class="container-fluid section-highlight" id="section-highlight-testimonials">
                <div class="row">
                    <div class="bx-wrapper-row3">
                        <ul class="bxslider-testimonials">
                            <li id="testimonials-background-1">
                                <div class="col-md-6">
                                    <div class="testimonials">
                                        <p>
                                            "The time I have spent at Syn Studio helped me improve and become a concept artist in the video game industry.
                                            At Syn Studio, you receive technical knowledge from artists that are already working in the field.
                                            If you're serious about your goals, then this is a good place for learning, networking and working like crazy on your portfolio with people as passionate as you are."
                                        </p>
                                        <div class="testifyer">
                                            <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/EmilyBoivin_headshot.jpg" title="" alt="">
                                            <p class="name">Emylie Boivin</p>
                                            <p class="designation">Concept artist at Frima</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="cold-md-6">
                                </div>
                            </li>
                            <li id="testimonials-background-2">
                                <div class="col-md-6">
                                    <div class="testimonials">
                                        <p class="words">"I'm now a concept artist at Triotech Amusement, I've been taking classes and workshops at Syn Studio for almost 3 years to get the job I have now. All the teachers are super professional and highly responsible. I witnessed Syn Studio getting more and more of a good reputation in training professional artists in video games, film and fine art. There are more and more artists related to Syn Studio, it has become such an incredible place for artists to hang out, get contacts and have fun. And I do sincerely appreciate so much what Syn Studio has done."</p>
                                        <div class="testifyer">
                                            <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/DengYjiaLiu_Headshot.jpg" title="" alt="">
                                            <p class="name">Dengyijia Liu</p>
                                            <p class="designation">Concept Artist at Triotech Amusement</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="cold-md-6">
                                </div>
                            </li>
                            <li id="testimonials-background-3">
                                <div class="col-md-6">
                                    <div class="testimonials">
                                        <p class="words">
                                            "During my time at Syn Studio (where I took classes and studied) many of our teachers were professionals in the movie and game industry as well as illustrators, like Dhamindra Jeevan, Charles Vinh, Meinert Hansen, Donglu Yu. They really pushed me with their feedback [...] Also, Charles Vinh was particularly very important. He is an illustrator here in Canada, and I credit him largely for having taught me so much about color theory and lighting, as well as having taken traditional painting classes with him, he showed me a lot of techniques that were invaluable in my development.”
                                            <br />
                                            <br />
                                            <a href='http://www.cgsociety.org/index.php/CGSFeatures/CGSFeatureSpecial/artist_profile_will_sweet' target="_blank">Quoted from a featured interview in CGSociety</a>
                                        </p>
                                        <div class="testifyer">
                                            <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/WillSweet_headshot.jpg" title="" alt="">
                                            <p class="name">Will Sweet</p>
                                            <p class="designation">Concept Artist at Behaviour Interactive</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </li>
                            <li id="testimonials-background-4">
                                <div class="col-md-6">
                                    <div class="testimonials">
                                        <p class="words">
                                            “At Syn Studio you can expect to be in a relaxing and inspiring environment where you can get one on one feedback with the teachers. I really liked the atmosphere there, Syn Studio has a very warm and welcoming community where one can feel free to express their creativity."
                                        </p>
                                        <div class="testifyer">
                                            <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/RoxanneRainville_headshot.jpg" title="" alt="">
                                            <p class="name">Roxanne Rainville</p>
                                            <p class="designation">Concept Artist at Behaviour Interactive</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </li>
                            <li id="testimonials-background-5">
                                <div class="col-md-6">
                                    <div class="testimonials">
                                        <p class="words">
                                            "Montreal is a city replete with artists of astonishing skill and value. One of the schools here that helps this fact is Syn Studio; a school of high calibre. Having taken a few courses there myself, I can attest that their dedication to training people, in the core principles of art, is excellent. From concept art, regarding environment & character design, to foundation fundamentals such as life drawing and more; Syn Studio is the school that will ensure you get the artistic education to push you forward into a stellar career."
                                        </p>
                                        <div class="testifyer">
                                            <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/SeanSamuel_headshot.jpg" title="" alt="">
                                            <p class="name">Sean Samuels</p>
                                            <p class="designation">Senior Matte Painter / Concept Artist at Atomic Fiction</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </li>
                            <li id="testimonials-background-6">
                                <div class="col-md-6">
                                    <div class="testimonials">
                                        <p class="words">
                                            "Syn Studio enabled me to develop and deepen my artistic potential. The digital illustration classes gave me the confidence and expertise necessary to enter the professional sphere. My experience also allowed me to make many contacts with industry people which proved to be very valuable. I am proud to be a part of the Syn Studio community and I invite all who are interested to join us!"
                                        </p>
                                        <div class="testifyer">
                                            <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/JeanLoicFontaine_Headshot.jpg" title="" alt="">
                                            <p class="name">Jean-Loïc Fontaine</p>
                                            <p class="designation">Concept Artist at Burrito Studio</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </li>
                            <li id="testimonials-background-7">
                                <div class="col-md-6">
                                    <div class="testimonials">
                                        <p class="words">
                                            "I want to express my gratitude and appreciation to Syn Studio for providing a place for artists/professionals to grow in their craft. I've taken classes over the years and enjoyed them a lot, particularly because of the variety they have to offer. A big takeaway for me was the motivation of being around talented artists and teachers who share a passion for what they do. This combined with a professional level education has pushed me farther as an artist and taught me what I needed to know to prepare for the industry. I would definitely recommend Syn Studio to anyone seeking to make it as a professional artist or to anyone interested in art."
                                        </p>
                                        <div class="testifyer">
                                            <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/SeanVo_Headshot.jpg" title="" alt="">
                                            <p class="name">Sean Vo</p>
                                            <p class="designation">Concept Artist/Illustrator at Aptitude X</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid section-highlight" id="section-highlight7">
                <div class="row">
                    <p>
                        Get the <strong>essential information</strong> about <br />
                        the <strong>application process</strong>, <strong>key dates</strong>, and <strong>tuition:</strong>
                    </p>
                    <br />
                    <a class="btn btn-primary btn-orange-theme" href="<?php bloginfo('url'); ?>/concept-art-diploma-admission/" onClick="ga(‘send’, ‘event’, ‘CADP’, ‘click-button’, ‘Learn-Program', 10);">Learn About the Program Details <img class="white-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1.png" alt="Arrow" /></a>
                </div>
            </div>
        </div>
        <!-- end MAIN CONTENT -->


<?php } else{ ?>
        <!-- HEADER -->
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
        <div class="header-container" id="section-header-ca-synstudio-experience">
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
            <h1 class="header-title shadow-text-dark orange-text"><small class="white-text">L'experience</small><br />Syn Studio</h1>
        </div>
        <p class="header-credit">Art: Xin Ran Liu</p><!-- X HEADER -->
        
        <!-- GO MAIN CONTENT 
        <div id="headeroo" class="shortheader" style="margin-top:-30px;">
            <div>
            <div class="container">
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand scroll-top"><img src="<?php echo get_template_directory_uri(); ?>/images/up.png" alt="" /></a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-nav">
                        <ul class="nav navbar-nav">
                            <li><a href="#" class="scroll-link" data-id="thecity">La ville</a></li>
                            <li><a href="#" class="scroll-link" data-id="thecommunity">La communauté</a></li>
                            <li><a href="#" class="scroll-link" data-id="theschool">L'école</a></li>
                            <li><a href="#" class="scroll-link" data-id="thepeople">Les gens</a></li>
                            <li><a href="#" class="scroll-link" data-id="thechange">Comment Syn Studio va changer votre vie</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            </div>
        </div>-->
            
        <div class="main-content-container"> 
            <div class="container-fluid section-highlight general-content exp-highlight">
                <br />
                <div id="thecity">
                <div class="row">
                    <!-- only on large screen -->
                    <div class="experience-container top-border hidden-xs hidden-sm">
                        <div class="experience-wrapper">
                            <div class="experience-tag">
                                <div class="experience-float-right">
                                    <h3 class="experience-headline-title">La ville</h3>
                                    <p class="experience-quote">
                                        Créative, Artistique, Sécuritaire, 
                                        <br />Abordable, Amusante, Vivante
                                        <br />
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="experience-arrow">
                                <img class="experience-right-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_2.png" alt="" />
                            </div>
                            <div class="experience-description">
                                <p>
                               Syn Studio est situé au coeur de Montréal, 2ème au classement des villes où il fait bon vivre par The Economist en 2015. Montréal est également une capitale mondiale artistique et culturelle reconnue par l'Organisation des Nations Unies pour l'éducation, la science et la culture comme l'une des villes mondiales pour le design.  &nbsp;
                            <br>
                            <br> C'est l'une des villes qui compte le plus grand nombre d'étudiants et l'une des plus accessibles financièrement en Amérique du Nord. Enfin, c'est l'un des pôles du divertissement qui attire de nouveaux studios et de nouveaux emplois dans la conception artistique. </p>
                            </div>
                        </div>
                    </div>
                    <!-- only on small to medium -->
                    <div class="experience-headline hidden-md hidden-lg">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-4 top-border col-left-border">
                            <ul class="experience-headline-list">
                                <li class="experience-headline-text">
                                    <h3 class="experience-headline-title">La ville</h3>
                                    <br />
                                    <p>
                                        Créative, Artistique, Sécuritaire, 
                                        <br />Abordable, Amusante, Vivante
                                        <br />
                                       
                                    </p>
                                </li>
                                <li class="text-center hidden-xs hidden-sm">
                                    <img class="shape-1-2" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_2.png" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 top-border-description">
                            <p class="experience-headline-description-right">
                          Syn Studio est situé au coeur de Montréal, 2ème au classement des villes où il fait bon vivre par The Economist en 2015. Montréal est également une capitale mondiale artistique et culturelle reconnue par l'Organisation des Nations Unies pour l'éducation, la science et la culture comme l'une des villes mondiales pour le design.  &nbsp;
                            <br>
                            <br> C'est l'une des villes qui compte le plus grand nombre d'étudiants et l'une des plus accessibles financièrement en Amérique du Nord. Enfin, c'est l'un des pôles du divertissement qui attire de nouveaux studios et de nouveaux emplois dans la conception artistique.  </p>
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                    <img class="slideExperience" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/slide_montrealcity.jpg" alt="the city" />
                </div>
                </div>
                <br />
                <br />
                <div id="thecommunity">
                <div class="row">
                    <!-- only on large screen -->
                    <div class="experience-container hidden-xs hidden-sm">
                        <div class="experience-wrapper">
                            <div class="experience-description-inverted">
                                <p>
                               La communauté Syn Studio établit un contact entre les étudiants et l'industrie à Montréal et au delà pour que vous puissiez construire des relations qui seront décisives dans votre succès. Nous organisons régulièrement des représentations artistiques avec nos élèves, des fêtes et des évènements avec les gens du secteur comme par exemple des sessions de commentaires de portfolio, des cours avec des artistes concepteur(trice)s de renommée internationale, des démonstrations gratuites, des discussions ou encore des ateliers thématiques de dessin d'après modèle.
                            <br />
                            <br />Bien que le but de cette école ne soit PAS de faire la fête, il vous faut vous faire des amis et créer des liens durables, rencontrer des camarades et des partenaires! Chez Syn Studio vous appartenez à une communauté d'artistes passionnés qui partagent et s'entraident pour grandir ensemble! C'est un monde très compétitif, c'est pourquoi nous partageons et coopérons pour pouvoir évoluer aussi vite que possible. </p>
                            </div>
                            <div class="experience-tag-inverted">
                                <h3 class="experience-headline-title" style="font-size: 40px !important;">La communauté</h3>
                                <p class="experience-quote">
                                    Qui rassemble les étudiants 
                                    <br /> et l'industrie
                                    <br />
                                </p>
                                
                            </div>
                            <div class="experience-arrow-inverted">
                                <img class="experience-right-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_2.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <!-- only on small to medium -->
                    <div class="experience-headline hidden-md hidden-lg">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-4 hidden-md hidden-lg">
                            <ul class="experience-headline-list">
                                <li class="experience-headline-text">
                                    <h3 class="experience-headline-title" style="font-size: 40px !important;">La communauté</h3>
                                    <br />
                                    <p>
                                        Qui rassemble les étudiants 
                                        <br />et l'industrie
                                        <br />
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p class="experience-headline-description-left">
                          La communauté Syn Studio établit un contact entre les étudiants et l'industrie à Montréal et au delà pour que vous puissiez construire des relations qui seront décisives dans votre succès. Nous organisons régulièrement des représentations artistiques avec nos élèves, des fêtes et des évènements avec les gens du secteur comme par exemple des sessions de commentaires de portfolio, des cours avec des artistes concepteur(trice)s de renommée internationale, des démonstrations gratuites, des discussions ou encore des ateliers thématiques de dessin d'après modèle.
                            <br />
                            <br />Bien que le but de cette école ne soit PAS de faire la fête, il vous faut vous faire des amis et créer des liens durables, rencontrer des camarades et des partenaires! Chez Syn Studio vous appartenez à une communauté d'artistes passionnés qui partagent et s'entraident pour grandir ensemble! C'est un monde très compétitif, c'est pourquoi nous partageons et coopérons pour pouvoir évoluer aussi vite que possible.  </p>
                        </div>
                        <div class="col-md-4 hidden-xs hidden-sm col-right-border">
                            <ul class="experience-headline-list">
                                <li class="text-center hidden-xs hidden-sm">
                                    <img class="shape-1-rev" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_rev_long.png" alt="">
                                </li>
                                <li class="experience-headline-text">
                                    <h3 class="experience-headline-title headline-text-right" style="font-size: 40px !important;">La communauté</h3>
                                    <br />
                                    <p class="headline-text-right">
                                        Qui rassemble les étudiants 
                                        <br />et l'industrie
                                        <br />
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                    <img class="slideExperience" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/slide_community.jpg" alt="the community" />
                </div>
                </div>
                <br />
                <br />
                <div id="theschool">
                <div class="row">
                    <!-- only on large screen -->
                    <div class="experience-container hidden-xs hidden-sm">
                        <div class="experience-wrapper">
                            <div class="experience-tag">
                                <div class="experience-float-right">
                                    <h3 class="experience-headline-title">L'école</h3>
                                    <p class="experience-quote">
                                          Atmosphère créative, 
                                    <br />Ambiance d'atelier d'artistes, 
                                    <br />les dernières technologies de 
                                    <br />Wacom
                                        <br />
                                    </p>
                                </div>
                            </div>
                            <div class="experience-arrow">
                                <img class="experience-right-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_2.png" alt="" />
                            </div>
                            <div class="experience-description">
                                <p>
                              Syn Studio est un endroit spécial. Lors de son lancement en 2007, l'école n'était qu'un atelier traditionnel de dessin et de peinture dans un loft du centre-ville. Elle était comme un oasis secret où les artistes concepteurs, les animateurs, les dessinateurs de bandes dessinées, les illustrateurs et les étudiants en beaux arts venaient s'exercer avec les professeurs. Depuis, l'école s'est aggrandie et à déménagé dans des locaux bien plus spacieux pour se concentrer plus sur la conception artistique et l'illustration digitale. Elle a cependant conservé l'ambiance d'un atelier avec les parquets, les hauts plafonds les grandes vitres et une bonne dose de charme. Ce n'est pas une salle d'ordinateurs (aka l'environnement de studio de production) comme dans d'autres écoles, c'est un lieu pour apprendre et créer. 
                            <br />
                            <br />Vous aurez la même pression et les mêmes délais que dans un vrai studio de production, mais vous serez dans un environnement bien plus chaleureux, plus heureux et plus artistique. C'est un lieu d'inspiration où vous vous sentirez libre d'explorer votre potentiel artistique et libre de créer comme bon vous semble. Les standards de l'école sont élevés : ils le sont tout autant que ceux de l'industrie. La charge de travail est conséquente et les délais sont à respecter. L'école cultive l'excellence et tout le monde est censé surmonter les défis et se concentrer sur le progrès pour devenir meilleur aussi bien en tant qu'artiste qu'en tant que personne. Nous vous prendrons la main pour vous guider à chaque étape de votre voyage vers la maîtrise artistique et personnelle. </p>
                            </div>
                        </div>
                    </div>
                    <!-- only on small to medium -->
                    <div class="experience-headline hidden-md hidden-lg">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-4">
                            <ul class="experience-headline-list">
                                <li class="experience-headline-text">
                                    <h3 class="experience-headline-title">L'école</h3>
                                    <br />
                                    <p>
                                        Atmosphère créative, 
                                        <br />Ambiance d'atelier d'artistes, 
                                        <br />les dernières technologies de 
                                        <br />Wacom
                                    </p>
                                </li>
                                <li class="text-center hidden-xs hidden-sm">
                                    <img class="shape-1-2-school" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_2_long.png" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-right-border">
                            <p class="experience-headline-description-right">
                            Syn Studio est un endroit spécial. Lors de son lancement en 2007, l'école n'était qu'un atelier traditionnel de dessin et de peinture dans un loft du centre-ville. Elle était comme un oasis secret où les artistes concepteurs, les animateurs, les dessinateurs de bandes dessinées, les illustrateurs et les étudiants en beaux arts venaient s'exercer avec les professeurs. Depuis, l'école s'est aggrandie et à déménagé dans des locaux bien plus spacieux pour se concentrer plus sur la conception artistique et l'illustration digitale. Elle a cependant conservé l'ambiance d'un atelier avec les parquets, les hauts plafonds les grandes vitres et une bonne dose de charme. Ce n'est pas une salle d'ordinateurs (aka l'environnement de studio de production) comme dans d'autres écoles, c'est un lieu pour apprendre et créer. 
                            <br />
                            <br />Vous aurez la même pression et les mêmes délais que dans un vrai studio de production, mais vous serez dans un environnement bien plus chaleureux, plus heureux et plus artistique. C'est un lieu d'inspiration où vous vous sentirez libre d'explorer votre potentiel artistique et libre de créer comme bon vous semble. Les standards de l'école sont élevés : ils le sont tout autant que ceux de l'industrie. La charge de travail est conséquente et les délais sont à respecter. L'école cultive l'excellence et tout le monde est censé surmonter les défis et se concentrer sur le progrès pour devenir meilleur aussi bien en tant qu'artiste qu'en tant que personne. Nous vous prendrons la main pour vous guider à chaque étape de votre voyage vers la maîtrise artistique et personnelle.  </p>
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                    <img class="slideExperience" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/slide_school.jpg" alt="the school" />
                </div>
                </div>
                <br />
                <br />
                <div id="thepeople">
                <div class="row">
                    <!-- only on large screen -->
                    <div class="experience-container hidden-xs hidden-sm">
                        <div class="experience-wrapper">
                            <div class="experience-description-inverted">
                                <p>
                                    compter dans les gens qui les développent une équipe principale de cinq artistes concepteur(trice)s ou plus sous la direction d'un designer de production et du directeur artistique. Chez Syn Studio, vous devrez, vous et votre équipe, vous battre dans les moments cruciaux pour respecter les délais imposés et rendre des concepts épiques qui définiront l'ambiance et le ressenti d'un produit de divertissement et qui aidera les artistes de la production à créer une connexion entre le public et l'intrigue. Vos professeurs vous guideront comme des directeurs artistiques et vos camarades de classe seront vos équipiers. Les liens que vous tisserez avec vos complices dureront toute une vie. Vous serez entourés de gens passionnés, compétents, positifs, énergiques et amicaux et qui parcourent le même chemin que vous. Alors venez vous joindre à tous ces esprits semblables sur la route du succès!
                                    <br />
                                </p>
                            </div>
                            <div class="experience-tag-inverted">
                                <h3 class="experience-headline-title">Les gens</h3>
                                <p class="experience-quote">
                                       Des gens passionnés et 
                                    <br /> attentionnés. Des pros de 
                                    <br /> l'industrie. Une équipe 
                                    <br /> amicale.
                                    <br />
                                    <br />
                                </p>
                         
                            </div>
                            <div class="experience-arrow-inverted">
                                <img class="experience-right-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_2.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <!-- only on small to medium -->
                    <div class="experience-headline hidden-md hidden-lg">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-4 hidden-md hidden-lg">
                            <ul class="experience-headline-list">
                                <li class="experience-headline-text">
                                    <h3 class="experience-headline-title">Les gens</h3>
                                    <br />
                                    <p>
                                           Des gens passionnés et 
                                    <br /> attentionnés. Des pros de 
                                    <br /> l'industrie. Une équipe 
                                    <br /> amicale.
                                        <br />
                              
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p class="experience-headline-description-left">
                                compter dans les gens qui les développent une équipe principale de cinq artistes concepteur(trice)s ou plus sous la direction d'un designer de production et du directeur artistique. Chez Syn Studio, vous devrez, vous et votre équipe, vous battre dans les moments cruciaux pour respecter les délais imposés et rendre des concepts épiques qui définiront l'ambiance et le ressenti d'un produit de divertissement et qui aidera les artistes de la production à créer une connexion entre le public et l'intrigue. Vos professeurs vous guideront comme des directeurs artistiques et vos camarades de classe seront vos équipiers. Les liens que vous tisserez avec vos complices dureront toute une vie. Vous serez entourés de gens passionnés, compétents, positifs, énergiques et amicaux et qui parcourent le même chemin que vous. Alors venez vous joindre à tous ces esprits semblables sur la route du succès!
                                <br />
                            </p>
                        </div>
                        <div class="col-md-4 hidden-xs hidden-sm col-right-border">
                            <ul class="experience-headline-list">
                                <li class="text-center hidden-xs hidden-sm">
                                    <img class="shape-1-rev" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_rev.png" alt="">
                                </li>
                                <li class="experience-headline-text">
                                    <h3 class="experience-headline-title headline-text-right">Les gens</h3>
                                    <br />
                                    <p class="headline-text-right">
                                           Des gens passionnés et 
                                    <br /> attentionnés. Des pros de 
                                    <br /> l'industrie. Une équipe 
                                    <br /> amicale.
                                        <br />
                                 
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                    <img class="slideExperience" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/slide_people.jpg" alt="the people" />
                </div>
                </div>
                <br />
                <br />
                <div id="thechange">
                <div class="row">
                    <!-- only on large screen -->
                    <div class="experience-container hidden-xs hidden-sm">
                        <div class="experience-wrapper">
                            <div class="experience-tag">
                                <div class="experience-float-right">
                                    <h3 class="experience-headline-title" style="font-size: 40px !important;">Comment Syn Studio<br /> va changer<br /> votre vie
                                    </h3>
                                    <p class="experience-quote">
                                        Des Aptitudes, de la 
                                    <br />Confiance, du Succès, du 
                                    <br />
                                        <br />
                                    </p>
                                
                                </div>
                            </div>
                            <div class="experience-arrow">
                                <img class="experience-right-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_2.png" alt="" />
                            </div>
                            <div class="experience-description">
                                <p>
                              Lorsque vous aurez décidé de tout faire pour réaliser votre rêve de devenir artiste concepteur(trice), rien ne pourra vous arrêter. Si vous vivez le concetion artistique, que vous respirez le concetion artistique, que vous rêvez le concetion artistique, alors Syn Studio n'est pas un choix, c'est votre destin. 
                            <br />
                            <br />Une fois dans la bonne ville, la bonne communauté, la bonne école et que vous tissez des liens avec les bonnes personnes, alors vous êtes sur la bonne voie. L'aventure artistique n'a pas de fin mais en chemin vous trouverez l'amitié, la paix intérieure, le bonheur et la sécurité. Vous serez en totale immersion et atteindrez un niveau de productivité, de créativité, de compétence et de maîtrise que vous n'aviez pas pensé possible d'atteindre en 18 mois. A la fin de cette formation, vous serez une personne différente : sûre d'elle-même, qui aua confiance en ses compétences et qui possèdera tous les outils, les alliés et les relations nécessaires pour réussir en tant qu'artiste concepteur(trice).   </p>
                            </div>
                        </div>
                    </div>
                    <!-- only on small to medium -->
                    <div class="experience-headline hidden-md hidden-lg">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-4">
                            <ul class="experience-headline-list">
                                <li class="experience-headline-text">
                                    <h3 class="experience-headline-title">Comment syn studio<br /> va changer<br /> votre vie
                                    </h3>
                                    <br />
                                    <p>
                                         Des Aptitudes, de la 
                                    <br />Confiance, du Succès, du 
                                    <br />
                                        <br />
                                  
                                    </p>
                                </li>
                                <li class="text-center hidden-xs hidden-sm">
                                    <img class="shape-1-2" src="<?php echo get_template_directory_uri(); ?>/images/shape_1_2_long.png" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-right-border">
                            <p class="experience-headline-description-right">
                           Lorsque vous aurez décidé de tout faire pour réaliser votre rêve de devenir artiste concepteur(trice), rien ne pourra vous arrêter. Si vous vivez le concetion artistique, que vous respirez le concetion artistique, que vous rêvez le concetion artistique, alors Syn Studio n'est pas un choix, c'est votre destin. 
                            <br />
                            <br />Une fois dans la bonne ville, la bonne communauté, la bonne école et que vous tissez des liens avec les bonnes personnes, alors vous êtes sur la bonne voie. L'aventure artistique n'a pas de fin mais en chemin vous trouverez l'amitié, la paix intérieure, le bonheur et la sécurité. Vous serez en totale immersion et atteindrez un niveau de productivité, de créativité, de compétence et de maîtrise que vous n'aviez pas pensé possible d'atteindre en 18 mois. A la fin de cette formation, vous serez une personne différente : sûre d'elle-même, qui aua confiance en ses compétences et qui possèdera tous les outils, les alliés et les relations nécessaires pour réussir en tant qu'artiste concepteur(trice). </p>
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                    <img class="slideExperience" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/slide_life.jpg" alt="the career" />
                </div>
                <br />
            </div>
            </div>
            <div class="container-fluid section-highlight" id="section-highlight-testimonials">
                <div class="row">
                    <div class="bx-wrapper-row3">
                        <ul class="bxslider-testimonials">
                            <li id="testimonials-background-1">
                                <div class="col-md-6">
                                    <div class="testimonials">
                                        <p>
                                          "Le temps que j'ai passé à Syn Studio m'a aidée à m'améliorer et devenir une artiste conceptrice dans l'industrie des jeux vidéo. A Syn Studio, vous recevez des connaissances techniques de la part d'artistes qui travaillent déjà sur le terrain. Si vos projets vous tiennent vraiment à coeur, alors c'est le bon endroit pour apprendre, se créer un réseau et travailler d'arrache pied sur votre portfolio avec d'autres gens qui sont aussi passionnés que vous." </p>
                                        <div class="testifyer">
                                            <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/EmilyBoivin_headshot.jpg" title="" alt="">
                                            <p class="name">Emylie Boivin</p>
                                            <p class="designation">Artiste conceptrice chez Frima</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="cold-md-6">
                                </div>
                            </li>
                            <li id="testimonials-background-2">
                                <div class="col-md-6">
                                    <div class="testimonials">
                                        <p class="words">"Je suis désormais un artiste concepteur chez Triotech Amusement. J'ai prit des cours et participé à des ateliers chez Syn Studio pendant 3 ans pour obtenir mon emploi actuel. Tous les professeurs sont très professionnels et responsables. J'ai vu Syn Studio gagner en réputation pour leur formation d'artistes professionnels dans les jeux vidéo, les films et les beaux arts. De plus en plus d'artistes sont liés à Syn Studio, c'est vraiment devenu un endroit incroyable pour y passer du temps, créeer des contacts et s'amuser. J'apprécie sincèrement tout ce que syn Studio à fait pour moi."</p>
                                        <div class="testifyer">
                                            <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/DengYjiaLiu_Headshot.jpg" title="" alt="">
                                            <p class="name">Dengyijia Liu</p>
                                            <p class="designation">Artiste concepteur chez Triotech Amusement</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="cold-md-6">
                                </div>
                            </li>
                            <li id="testimonials-background-3">
                                <div class="col-md-6">
                                    <div class="testimonials">
                                        <p class="words">
                                            "Pendant que j'étais à Syn Studio (où j'ai étudié) beaucoup de nos prpofesseurs étaient des professionnels qui travaillaient dans l'industrie des jeux vidéo ou des films ou en tant qu'illustrateurs comme par exemple Dhamindra Jeevan, Charles Vinh, Meinert Hansen ou encore Donglu Yu. Ils m'ont vraiment soutenu avec leurs avis sur mon travail. [...] Charles Vinh a été particulièrement important. Il est illustrateur, ici au Canada, et je lui dois beaucoup pour tout ce que j'ai appris sur la théorie des couleurs et la lumière. J'ai prit des cours de peinture traditionnelle avec lui et il m'a montré beaucoup de techniques qui ont été inestimables dans mon progrès."
                                            <br />
                                            <br />
                                            <a href='http://www.cgsociety.org/index.php/CGSFeatures/CGSFeatureSpecial/artist_profile_will_sweet' target="_blank">Citation tirée d'une interview de CGSociety</a>
                                        </p>
                                        <div class="testifyer">
                                            <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/WillSweet_headshot.jpg" title="" alt="">
                                            <p class="name">Will Sweet</p>
                                            <p class="designation">Artiste concepteur chez Behaviour Interactive</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </li>
                            <li id="testimonials-background-4">
                                <div class="col-md-6">
                                    <div class="testimonials">
                                        <p class="words">
                                        "Chez Syn Studio, attendez vous à vous retrouver dans un environnement décontracté et stimulant où vous pourrez recevoir des critiques personnalisées de la part de vos professeurs. J'ai beaucoup aimé l'atmosphère. Syn Studio possède une communauté très chaleureuse et amicale où vous vous sentirez libre d'exprimer votre créativité." </p>
                                        <div class="testifyer">
                                            <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/RoxanneRainville_headshot.jpg" title="" alt="">
                                            <p class="name">Roxanne Rainville</p>
                                            <p class="designation">Artiste conceptrice chez Behaviour Interactive</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </li>
                            <li id="testimonials-background-5">
                                <div class="col-md-6">
                                    <div class="testimonials">
                                        <p class="words">
                                      "Montréal est une ville qui regorge d'artistes aux talents et aux valeurs incroyables. Une des écoles qui est à l'origine de cela est Syn Studio : une école de grande qualité. J'y ai prit quelques cours et je peux affirmer qu'ils sont dédiés à la formation artistique et leurs principes fondamentaux sont excellents. De la conception artistique à la création de personnages, en passant par les bases, Syn Studio est une école qui s'assure que vous recevrez l'éducation artistique qui vous poussera vers une carrière prestigieuse."    </p>
                                        <div class="testifyer">
                                            <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/SeanSamuel_headshot.jpg" title="" alt="">
                                            <p class="name">Sean Samuels</p>
                                            <p class="designation">Matte Painter / Artiste concepteur chez Atomic Fiction</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </li>
                            <li id="testimonials-background-6">
                                <div class="col-md-6">
                                    <div class="testimonials">
                                        <p class="words">
                                         "Syn Studio m'a permis de développer et d'approfondir mon potentiel artistique. Les cours d'illustration digitale m'ont donné la confiance et l'expertise nécessaires pour intégrer la sphère professionnelle. Mon expérience m'a aussi permis de créer plein de nouveaux contacts avec des personnes qui font partie du milieu et qui me sont très chers. Je suis fier d'appartenir à la communauté Syn Studio et j'invite tous les intéressés à nous rejoindre!"  </p>
                                        <div class="testifyer">
                                            <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/JeanLoicFontaine_Headshot.jpg" title="" alt="">
                                            <p class="name">Jean-Loïc Fontaine</p>
                                            <p class="designation">Artiste concepteur chez Burrito Studio</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </li>
                            <li id="testimonials-background-7">
                                <div class="col-md-6">
                                    <div class="testimonials">
                                        <p class="words">
                                     "J'aimerai exprimer ma reconnaissance et mon appréciation envers Syn Studio pour avoir créer un espace de travail ou les artistes et professionnels peuvent s'épanouir. J'ai assisté a plusieurs de leurs cours durant les dernières années et appris beaucoup puisqu'ils ont une grande variété de classes a offrir. Être entouré d'artistes et de professeurs passionnés de leur travail fut très motivant pour moi. Cela, combiné a une formation de niveau professionnel m'a permis d'avancer plus que jamais en tant qu'artiste et m'a donné les connaissances requises pour me préparer a travailler dans l'industrie. Je recommanderais définitivement Syn Studio a quiconque désirant réussir en tant qu'artiste professionnel ou quiconque intéressé par les arts visuels en général."        <div class="testifyer">
                                            <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaExperience/SeanVo_Headshot.jpg" title="" alt="">
                                            <p class="name">Sean Vo</p>
                                            <p class="designation">Artiste concepteur/Illustrateur chez Aptitude X</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid section-highlight" id="section-highlight7">
                <div class="row">
                    <p>
                        <strong>Obtenir les informations essentielles<br /> concernant le processus d´application,<br /> les dates importantes et les frais de scolarité:</strong>     </p>
                    <br />
                    <a class="btn btn-primary btn-orange-theme" href="<?php bloginfo('url'); ?>/informations-sur-le-programme/" onClick="ga(‘send’, ‘event’, ‘CADP’, ‘click-button’, ‘Apprenez-Program’, 10);">APPRENEZ EN PLUS SUR NOTRE PROGRAMME <img class="white-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1.png" alt="Arrow" /></a>
                </div>
            </div>
        </div>
        <!-- end MAIN CONTENT -->
<?php } ?>

<?php get_footer('microsite'); ?>