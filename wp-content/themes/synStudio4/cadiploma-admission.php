<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
/*
Template Name: Concept Art Diploma - Admission
 */

?>
<?php get_header('microsite'); ?>
<?php if (function_exists('pll_current_language')) { $currentLang = pll_current_language(slug); } ?>

<script type="text/javascript">
    function toggleDiv(divId){
      $("#"+divId).toggle();
      if($("#yestext3").is(':visible')){
        if($("#yestext2").is(':visible')){
          if($("#yestext1").is(':visible')){
            $("#congrats").toggle("1000");
          }
        }
      }
      if($("#yestext6").is(':visible')){
        if($("#yestext5").is(':visible')){
          if($("#yestext4").is(':visible')){
            $("#congrats").toggle("1000");
          }
        }
      }
    }
</script>

<script type="text/javascript">
    /*jQuery(document).ready(function(){
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
    if(typeof console === "undefined"){
        console = {log: function(){ }};
    }

    jQuery(document).ready(function (){
        var top = $('#headeroo').offset().top - parseFloat($('#headeroo').css('marginTop').replace(/auto/, 100));
        $(window).scroll(function (event){
            var y = $(this).scrollTop();
        if (y >= top) {
          $('#headeroo').addClass('fixed');
        } else {
          $('#headeroo').removeClass('fixed');
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
    <!-- HEADER -->
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
    <div class="header-container" id="section-header-ca-synstudio-admission">
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
        <h1 class="header-title shadow-text white-text"><small class="white-text">Program</small><br />Details</h1>
    </div> <!-- end HEADER -->
    
    <!--<div id="headeroo">  MAIN CONTENT 
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
                        <li><a href="#" class="scroll-link" data-id="requirements">Basic Admission Requirements</a></li>
                        <li><a href="#" class="scroll-link" data-id="overview">Program Overview</a></li>
                        <li><a href="#" class="scroll-link" data-id="structure">Program Structure</a></li>
                        <li><a href="#" class="scroll-link" data-id="features">Program Features</a></li>
                        <li><a href="#" class="scroll-link" data-id="dates">Admission dates and tuition</a></li>
                        <li><a href="#" class="scroll-link" data-id="apply">Application Form</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    </div>-->
    <div class="main-content-container">
        <div id="requirements">
        <div class="container-fluid section-highlight" id="section-highlight-intro">
            <div class="row">
                <div class="col-md-6">
                    <h2>Basic admission requirement<br /><small>Pre application interview</small></h2>
                </div>
                <div class="col-md-6">
                    <div class="qagroup">
                        <div class="admissionqa">
                            <div class="thequestion">
                                <p class="text-139">1. Do you already have some training (or self-teaching) in the fundamentals of realistic drawing and painting (including digital painting) and could you potentially show us a portfolio that demonstrates your skill level?</p>
                                <div id="notext1" style="display:none;">
                                    <p class="text-140">Sorry. This is an elite program that requires that you possess a minimum level of skill before applying. You need to learn fundamentals of drawing, painting and digital painting. There are many schools where you can learn fundamental skills and prepare a portfolio to apply for our Concept Art Diploma Program. We offer ahigh quality preparation course at a very reasonable price. You can find out more info about our prep program <a href='http://synstudio.ca/full-time-intensive/'>HERE</a>.</p>
                                </div>
                                <div id="yestext1" style="display:none;">
                                    <p class="text-140" style="color:lightgreen; font-size:3.5em;">✔</p>
                                </div>
                            </div>
                            <div class="theanswer">
                                <div class="rounded-rectangle-1-holder">
                                    <a class="btn btn-primary btn-orange-theme" href="javascript:toggleDiv('yestext1');" style="padding: 5px 10px;">Yes</a>
                                </div>
                                <div class="rounded-rectangle-1-holder">
                                    <a class="btn btn-primary btn-orange-theme" href="javascript:toggleDiv('notext1');" style="padding: 5px 10px;">No</a>
                                </div>
                            </div>
                        </div>
                        <div class="admissionqa">
                            <div class="thequestion">
                                <p class="text-139">2. Are you passionate, focused, mature and improvement oriented? Will you have been out of high school for at least one year before starting the program and could you potentially demonstrate this with the appropriate documentation and a letter of motivation?</p>
                                <div id="notext2" style="display:none;">
                                    <p class="text-140">We are sorry. This is a high-level program and we can only accept candidates who are ready. Please come back when you meet the criteria mentioned above.</p>
                                </div>
                                <div id="yestext2" style="display:none;">
                                    <p class="text-140" style="color:green; font-size:3.5em;">✔</p>
                                </div>
                            </div>
                            <div class="theanswer">
                                <div class="rounded-rectangle-1-holder">
                                    <a class="btn btn-primary btn-orange-theme" href="javascript:toggleDiv('yestext2');" style="padding: 5px 10px;">Yes</a>
                                </div>
                                <div class="rounded-rectangle-1-holder">
                                    <a class="btn btn-primary btn-orange-theme" href="javascript:toggleDiv('notext2');" style="padding: 5px 10px;">No</a>
                                </div>
                            </div>
                        </div>
                        <div class="admissionqa">
                            <div class="thequestion">
                                <p class="text-139">3. Do you have at least an intermediate level of spoken English and could you potentially demonstrate this during an in-person meeting or Skype interview?</p>
                                <div id="notext3" style="display:none;">
                                    <p class="text-140">We are sorry. Please improve your spoken English level (there are a number of courses and programs for that) and come back to us when you are ready.</p>
                                </div>
                                <div id="yestext3" style="display:none;">
                                    <p class="text-140" style="color:green; font-size:3.5em;">✔</p>
                                </div>
                            </div>
                            <div class="theanswer">
                                <div class="rounded-rectangle-1-holder">
                                    <a class="btn btn-primary btn-orange-theme" href="javascript:toggleDiv('yestext3');" style="padding: 5px 10px;">Yes</a>
                                </div>
                                <div class="rounded-rectangle-1-holder">
                                    <a class="btn btn-primary btn-orange-theme" href="javascript:toggleDiv('notext3');" style="padding: 5px 10px;">No</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="congrats container-fluid section-highlight" id="congrats" style="display:none;">
            <div class="wrapper-16">
                <p class="congratulations">Congratulations!</p>
            </div>
            <p class="text-6">You meet the basic requirements to apply for the Concept Art diploma program! See the program overview below:</p>
        </div>
                    
        <div id="overview">
        <div class="container-fluid section-highlight" id="section-highlight-program-overview">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="white-text">Program Overview</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid section-highlight general-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="overviewtable">
                        <div class="admissionprocesstable">
                            <table>
                                <tr class="grey-table-row">
                                    <td>School Name:</td>
                                    <td>Syn Studio</td>
                                </tr>
                                <tr>
                                    <td>Program Name and Code:</td>
                                    <td>Concept Art (NTL.1A)</td>
                                </tr>
                                <tr class="grey-table-row">
                                    <td>Language of Instruction:</td>
                                    <td>English</td>
                                </tr>
                                <tr>
                                    <td>Diploma Type:*</td>
                                    <td>Attestation of College Studies:</td>
                                </tr>
                                <tr class="grey-table-row">
                                    <td>
                                        Accrediting Body:
                                    </td>
                                    <td>
                                        The Ministry of Education, Higher Education and Research of Quebec
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Program Length:
                                    </td>
                                    <td>
                                        18 months - 6 semesters (10 weeks each) - 1200 hours of class time
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="italicpara">
                            *Student Loans available for Canadians (contact us by filling out the form below for more details)
                            <br />
                            <br /> Student visas: All foreign students must obtain a study permit from Immigration Canada to take the program.
                            <br /> Contact our advisers by filling out the form below for more information.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div id="structure">
        <div class="container-fluid section-highlight program-div">
            <div class="row">
                <h1>Program Structure</h1>
            </div>
            <br/>
            
            <!-- Term 1 -->
                <div class="row">
                    <div class="class-structure-box">
                        <div class="col-md-12 structure-orange-background">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="structure-term-box">
                                        <h3 class="structure-term-header">Term 1</h3>
                                        <p class="structure-hour-header">Hours: 215</p>
                                    </div>
                                </div>
                                <!--end of col-md-3-->
                                <div class="col-md-9 structure-nopadding">
                                    <ul class="structure-list">
                                        <li class="structure-class-box class-box-shade1">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-01</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-beige">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Intro to Concept Art</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade2">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-02</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-yellow">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Sketching for production</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>80h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade3">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-03</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-tea">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Visual Reference Library</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade4">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-04</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-tea">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Digital Image Manipulation</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--end of col-md-9-->
                            </div>
                        </div>
                        <!--end of col-md-12-->
                    </div>
                </div>
                <br />
                <!-- Term 2 -->
                <div class="row">
                    <div class="class-structure-box">
                        <div class="col-md-12 structure-orange-background">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="structure-term-box">
                                        <h3 class="structure-term-header">Term 2</h3>
                                        <p class="structure-hour-header">Hours: 205</p>
                                    </div>
                                </div>
                                <!--end of col-md-3-->
                                <div class="col-md-9 structure-nopadding">
                                    <ul class="structure-list">
                                        <li class="structure-class-box class-box-shade1">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-05</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-beige">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Image Integration</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade2">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-02</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-yellow">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Sketching for production</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>40h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade3">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-06</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-brown">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Anatomy Study</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>75h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade4">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-07</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-darkpurple">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Visual Communication</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--end of col-md-9-->
                            </div>
                        </div>
                        <!--end of col-md-12-->
                    </div>
                </div>
                <br />
                <!-- Term 3 -->
                <div class="row">
                    <div class="class-structure-box">
                        <div class="col-md-12 structure-orange-background">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="structure-term-box">
                                        <h3 class="structure-term-header">Term 3</h3>
                                        <p class="structure-hour-header">Hours: 210</p>
                                    </div>
                                </div>
                                <!--end of col-md-3-->
                                <div class="col-md-9 structure-nopadding">
                                    <ul class="structure-list">
                                        <li class="structure-class-box class-box-shade1">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-08</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-fushia">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Gesture, Expression and Personality</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>30h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade2">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-09</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-green">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Illustrating Characters in their environments</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>30h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade3">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-06</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-brown">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Anatomy Study</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>30h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade4">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-07</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-darkpurple">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Visual Communication</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade5">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-10</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-beige">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Originality in Design</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>75h</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--end of col-md-9-->
                            </div>
                        </div>
                        <!--end of col-md-12-->
                    </div>
                </div>
                <br />
                <!-- Term 4 -->
                <div class="row">
                    <div class="class-structure-box">
                        <div class="col-md-12 structure-orange-background">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="structure-term-box">
                                        <h3 class="structure-term-header">Term 4</h3>
                                        <p class="structure-hour-header">Hours: 195</p>
                                    </div>
                                </div>
                                <!--end of col-md-3-->
                                <div class="col-md-9 structure-nopadding">
                                    <ul class="structure-list">
                                        <li class="structure-class-box class-box-shade1">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-08</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-fushia">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Gesture, Expression and Personality</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>30h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade2">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-09</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-green">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Illustrating Characters in their environments</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>60h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade3">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-11</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-orange">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Prop and Vehicle Design</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>60h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade4">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-12</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-lime">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Environment Design</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--end of col-md-9-->
                            </div>
                        </div>
                        <!--end of col-md-12-->
                    </div>
                </div>
                <br />
                <!-- Term 5 -->
                <div class="row">
                    <div class="class-structure-box">
                        <div class="col-md-12 structure-orange-background">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="structure-term-box">
                                        <h3 class="structure-term-header">Term 5</h3>
                                        <p class="structure-hour-header">Hours: 195</p>
                                    </div>
                                </div>
                                <!--end of col-md-3-->
                                <div class="col-md-9 structure-nopadding">
                                    <ul class="structure-list">
                                        <li class="structure-class-box class-box-shade1">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-13</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-purple">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Character Design</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>60h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade2">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-14</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-red">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Creature Design</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>60h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade3">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-11</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-orange">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Prop and Vehicle Design</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade4">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-12</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-lime">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Environment Design</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>30h</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--end of col-md-9-->
                            </div>
                        </div>
                        <!--end of col-md-12-->
                    </div>
                </div>
                <br />
                <!-- Term 6 -->
                <div class="row">
                    <div class="class-structure-box">
                        <div class="col-md-12 structure-orange-background">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="structure-term-box">
                                        <h3 class="structure-term-header">Term 6</h3>
                                        <p class="structure-hour-header">Hours: 180</p>
                                    </div>
                                </div>
                                <!--end of col-md-3-->
                                <div class="col-md-9 structure-nopadding">
                                    <ul class="structure-list">
                                        <li class="structure-class-box class-box-shade1">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-13</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-purple">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Character Design</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade2">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-14</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-red">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Creature Design</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade3">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-15</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-beige">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Assuring Your Success in the Industry</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade4">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-12</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-lime">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Environment Design</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--end of col-md-9-->
                            </div>
                        </div>
                        <!--end of col-md-12-->
                    </div>
                </div>


            <div class="row">
                <div class="col-md-12">
                    <p class="italicpara">
                        <br />
                        <br /> Note: Detailed course descriptions can be found in the student information package that you
                        <br /> can request after completing the form below.
                    </p>
                </div>
            </div>
            <br />
            <br />
        </div>
        </div>
        
        <div id="features">
        <div class="container-fluid section-highlight program-div">
            <div class="row row-80percent">
                <h1>Program Features</h1>
                <br />
                <br />
                <div class="col-md-4">
                    <div class="featurecol">
                        <p class="featuretitle"><strong>• Elite vocational training with relevant industry professionals</strong></p>
                        <br />
                        <p>This is why you came here. To let those who have already succeeded show you the way.</p>
                        <br />
                        <br />
                        <br />
                        <p class="featuretitle"><strong>• Free Syn Studio regular art and social events</strong></p>
                        <br />
                        <p><strong>Open studio life drawing, field trips, end of semester student art shows and parties, art demos and student movie nights</strong></p>
                        <br />
                        <p>Learn and improve while forging bonds with other passionate artists on the same path.</p>
                        <br />
                        <br />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featurecol">
                        <p class="featuretitle"><strong>• Regular 1-on-1 coaching sessions with real masters</strong></p>
                        <br />
                        <p>Everyone who made it to the top had help along the way. Most had master level coaching.</p>
                        <br />
                        <br />
                        <br />
                        <p class="featuretitle"><strong>• Attend industry events organized by Syn Studio (free for students in this program)</strong></p>
                        <br />
                        <p><strong>Game and film studio tours/visits, masterclasses, demos and workshops with world-famous concept artists that we fly in from abroad, Industry parties and more.</strong></p>
                        <br />
                        <p>Meet, learn from and make connections with the top people in the industry.</p>
                        <br />
                        <br />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featurecol">
                        <p class="featuretitle"><strong>• Access to Syn Studio facilities outside of class hours:</strong></p>
                        <br />
                        <p>School library
                            <br />Student lounge
                            <br />Personal storage locker
                            <br />The Traditional Art Studio
                            <br />The Mixed-Media Design Studio
                            <br>The Wacom Digital Design Studio</p>
                        <br />
                        <p>The beautiful Syn Studio environment could be your everyday reality. A place to call home. A community and family that takes care of you.</p>
                        <br />
                        <br />
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <div id="dates">
        <div class="container-fluid section-highlight program-div">
            <div class="row">
                <h1>Admission Process, Dates & Tuition</h1>
                <br />
                <br />
                <div class="col-md-12">
                    <div class="overviewtable2 hidden-xs">
                        <div class="admissionprocesstable">
                            <table>
                                <thead>
                                    <tr>
                                        <th>STEP:</th>
                                        <th>ACTION OR EVENT:</th>
                                        <th>DEADLINE OR DATE:</th>
                                        <th>FEES/TUITION DUE:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="grey-table-row">
                                        <td>1</td>
                                        <td>Submit for the Initial Portfolio/Application Review (receive feedback from a professional concept artist and the chance to reapply free of charge if your portfolio doesn’t pass the review)</td>
                                        <td>December 8th, 2015</td>
                                        <td class="orange-table-row">$50 CAN</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>General Portfolio/Application Review (this is where our team determines which candidates get an interview)</td>
                                        <td>March 2nd, 2016</td>
                                        <td class="orange-table-row">FREE for those who submitted to the intial portfolio review ($50 otherwise)</td>
                                    </tr>
                                    <tr class="grey-table-row">
                                        <td>3</td>
                                        <td>Admissions interview (the in-person or skype interview that determines if we accept you into our elite concept art training program)</td>
                                        <td>March/April 2016</td>
                                        <td class="orange-table-row">FREE</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="text-align:center; background:darkslategray; color:white;">
                                            RESULTS ANNOUNCED (now you know if you made it)
                                        </td>
                                    </tr>
                                    <tr class="grey-table-row">
                                        <td>4</td>
                                        <td>Send us your student contract and registration fee to finalize your registration.</td>
                                        <td>May 6th, 2016</td>
                                        <td class="orange-table-row">$50 CAN</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>New Student Orientation and Start of Session 1</td>
                                        <td>Oct. 3rd, 2016</td>
                                        <td class="orange-table-row">$4982.50 CAN</td>
                                    </tr>
                                    <tr class="grey-table-row">
                                        <td>6</td>
                                        <td>Start of Session 2</td>
                                        <td>Jan 16th, 2017</td>
                                        <td class="orange-table-row">$4982.50 CAN</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Start of Session 3</td>
                                        <td>April 10th, 2017</td>
                                        <td class="orange-table-row">$4982.50 CAN</td>
                                    </tr>
                                    <tr class="grey-table-row">
                                        <td>8</td>
                                        <td>Start of Session 4</td>
                                        <td>July 10th, 2017</td>
                                        <td class="orange-table-row">$4982.50 CAN</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Start of Session 5</td>
                                        <td>Oct. 2nd, 2017</td>
                                        <td class="orange-table-row">$4982.50 CAN</td>
                                    </tr>
                                    <tr class="grey-table-row">
                                        <td>10</td>
                                        <td>Start of Session 6</td>
                                        <td>Jan. 15, 2018</td>
                                        <td class="orange-table-row">$4982.50 CAN</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Graduation ceremony</td>
                                        <td>April 2018</td>
                                        <td class="orange-table-row">FREE</td>
                                    </tr>
                                    <tr class="grey-table-row">
                                        <td></td>
                                        <td></td>
                                        <td>Total tuition and fees:</td>
                                        <td class="orange-table-row">$29,995*</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="hidden-md hidden-lg">
                        <br />
                            <p class="italicpara">*Certain conditions apply</p>
                            <br />
                            <a class="orange-text" href="<?php echo get_template_directory_uri(); ?>/docs/synstudio-admission-process-details.pdf" target="_blank">Click here to see admission process and tuition details.</a>
                    </div>
                    <div class="hidden-xs hidden-sm">
                        <p class="longnote"><strong class="text-style-8"></strong>*Student loans of up to $20,000 available for Canadians (fill out the form below for more information)</p>
                        <p class="longnote"><strong class="text-style-8">Note</strong>&nbsp;: For $29,995 You are joining an elite training program and receiving the highest VALUE concept art education on the planet! The tuition alone for the next most affordable top concept art program (in Asia) is nearly $45,000 CAN per year (including fees but not taxes – also note that our program is 18 months.)</p>
                        <p class="longnote"><strong class="text-style-8">Other top concept art programs (mainly found in schools near Los Angeles) have tuition exceeding $200,000 CAN!</strong></p>
                        <p class="longnote">Add this to the fact that Montreal is a MUCH more affordable (and better) city to live and the fact that our class sizes are smaller (maximum 20) while theirs are 25-30, and you'll save tens of thousands of dollars and get a much higher value education studying at Syn Studio!</p>
                        <p class="longnote">Your $50 application fee (due when you submit your portfolio and application) will gurantee that we give your portfolio a thorough evaluation. Even if you do not pass the porftolio review, you will still receive valuable feedback on your artwork from a senior level concept artist and recommendations for how to improve and what to do next and you’ll be able to reapply for the next application/portfolio review free of charge!</p>
                        <p class="longnote"><strong class="text-style-8">**Please keep in mind that this is a SMALL, elite program and only one intake of 20 STUDENTS max per year will be accepted. Our team will only review a limited number of portfolios/applications and reservations for an application/portfolio review will be accepted on a FIRST COME FIRST SERVE basis.</strong></p>
                        <p class="longnote">If you are serious about becoming a professional level concept artist then make sure you fill out the form below to reserve your spot for the next application/portfolio review. It’s ABSOLUTELY FREE to reserve your spot and you will receive a free copy of the application guide by email and the email and phone of one of our advisers you can contact if you have questions.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <div id="apply">
        <div class="container-fluid section-highlight general-content row-60percent program-div">
            <h1>Admission Application Form</h1>
            <br />
            <br />
                          <!-- Begin MailChimp Signup Form -->
          <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
          <style type="text/css">
            #mc_embed_signup{clear:left; font:14px Gotham,Arial,sans-serif; }
        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
          </style>
      <div id="mc_embed_signup" class="form11">
      <form action="//synstudio.us2.list-manage.com/subscribe/post?u=23c298529438530e62af0db46&amp;id=e8c037fe10" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
        <p class="longnote" style="width:100%; text-align:center;color:black !important;font-size: 1.2em;">Sign up now to reserve your spot for the next portfolio review and receive your free application guide!</p>
        <br />
      <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
      <div class="mc-field-group">
        <label for="mce-FNAME">Enter your first name </label>
        <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
      </div>
      <div class="mc-field-group">
        <label for="mce-EMAIL">Enter your email address  <span class="asterisk">*</span>
      </label>
        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
      </div>
      <div class="mc-field-group">
        <label for="mce-MMERGE2">Select your preferred start date: </label>
        <select name="MMERGE2" class="" id="mce-MMERGE2">
        <option value=""></option>
        <option value="October 2016">October 2016</option>
      <option value="October 2017">October 2017</option>

        </select>
      </div>
      <div class="mc-field-group">
        <label for="mce-MMERGE3">Select your status: </label>
        <select name="MMERGE3" class="" id="mce-MMERGE3">
        <option value=""></option>
        <option value="Canadian citizen">Canadian citizen</option>
      <option value="Canadian permanent resident">Canadian permanent resident</option>
      <option value="Foreign student">Foreign student</option>

        </select>
      </div>
      <div class="mc-field-group input-group">
          <ul><li><input type="checkbox" value="1" name="group[9225][1]" id="mce-group[9225]-9225-0" CHECKED><label for="mce-group[9225]-9225-0">I would like to receive free updates from Syn Studio about the world of Concept Art, including masterclasses, podcasts and interviews with world-famous artists, blog articles, free tutorials, etc.. Your information will always be kept safe and secure and won't be shared with others.</label></li>
      </ul>
      </div>
        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;"><input type="text" name="b_23c298529438530e62af0db46_e8c037fe10" tabindex="-1" value=""></div>
          <div class="clear" style="width:100%;text-align:center;"><input type="submit" value="Reserve Your Spot Now" name="subscribe" id="mc-embedded-subscribe" class="button orange reserve" onClick="ga(‘send’, ‘event’, ‘CADP’, ‘click-button’, ‘Reserve-Now’, 10);"></div>
          </div>
      </form>
      </div>
      <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='MMERGE2';ftypes[2]='dropdown';fnames[3]='MMERGE3';ftypes[3]='dropdown';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
      <!--End mc_embed_signup-->


            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
        </div>

        <div class="container-fluid section-highlight general-content program-div quotesection">
            <div class="row">
                <div class="col-md-12">
                    <p class="longnote">
                        Some people take action while others just watch on the sidelines. It's time to decide who you are. Don't miss out on this amazing opportunity to achieve your dream of being a professional concept artist. Take action now instead of letting yourself wonder "what might have been"...
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="vinci">
                        <p class="longnote">"I have been impressed with the urgency of doing. Knowing is not enough; we must apply. Being willing is not enough; we must do."</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAdmission/ellipse_5.png" alt=""> - Leonardo Da Vinci
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="brucelee">
                        <p class="longnote">"If you love life, don’t waste time, for time is what life is made up of."</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAdmission/ellipse_5_copy.png" alt=""> - Bruce Lee
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="clear:both;padding:30px 10px;">
                        <p class="longnote">
                            ***Reservations for the next portfolio review are made on a first come first serve basis. It’s absolutely free to reserve your spot and receive your application guide. So remember to reserve your spot NOW by filling out the form above.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end MAIN CONTENT -->


    <?php } else{ ?>

    <!-- HEADER -->
    <div class="off-canvas-menu-wrap">
        <a class="close-button" id="close-button" href="#">Close Menu</a>
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
    <div class="header-container" id="section-header-ca-synstudio-admission">
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
        <h1 class="header-title shadow-text white-text"><small class="white-text">Détails sur<br /> le programme</small></h1>
    </div>
    <!-- end HEADER -->
    <!-- MAIN CONTENT  
    <div id="headeroo">
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
                        <li><a href="#" class="scroll-link" data-id="requirements">Critères basiques d'admission</a></li>
                        <li><a href="#" class="scroll-link" data-id="overview">Aperçu</a></li>
                        <li><a href="#" class="scroll-link" data-id="structure">Structure</a></li>
                        <li><a href="#" class="scroll-link" data-id="features">Particularités</a></li>
                        <li><a href="#" class="scroll-link" data-id="dates">Dates d'admission et frais</a></li>
                        <li><a href="#" class="scroll-link" data-id="apply">Formulaire de candidature</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    </div>-->
    
    <div class="main-content-container">
        <div id="requirements">
        <div class="container-fluid section-highlight" id="section-highlight-intro">
            <div class="row">
                <div class="col-md-6">
                    <h2>Critères basiques d'admission<br /><small>Questionnaire de pré-candidature</small></h2>
                </div>
                <div class="col-md-6">
                    <div class="qagroup">
                        <div class="admissionqa">
                            <div class="thequestion">
                                <p class="text-139">1. Avez vous déjà bénéficié d'une formation (ou en autodidacte) sur les bases du dessin et de la peinture réaliste (en incluant la peinture digitale) et seriez vous capable de nous présenter un portfolio qui montrerait votre niveau de compétence?</p>
                                <div id="notext1" style="display:none;">
                                    <p class="text-140">Nous sommes désolés. Ceci est un programe de haut niveau qui recquiert un minimum de compétence savant de pouvoir candidater. Vous devez apprendre les bases du dessin, de la peinture et du peinture numérique. Plusieurs écoles existent où vous pourrez apprendre les fondamentaux et préparer un portfolio pour pouvoir somuettre votre candidature pour notre Diplôme en Conception Artistique. Nous proposons un cours de préparation de qualité pour un prix abordable. Pour plus d'informations, <a href="http://synstudio.ca/temps-plein-intensif/">rendez vous ICI</a></p>
                                </div>
                                <div id="yestext1" style="display:none;">
                                    <p class="text-140" style="color:lightgreen; font-size:3.5em;">✔</p>
                                </div>
                            </div>
                            <div class="theanswer">
                                <div class="rounded-rectangle-1-holder">
                                    <a class="btn btn-primary btn-orange-theme" href="javascript:toggleDiv('yestext1');" style="padding: 5px 10px;">Oui</a>
                                </div>
                                <div class="rounded-rectangle-1-holder">
                                    <a class="btn btn-primary btn-orange-theme" href="javascript:toggleDiv('notext1');" style="padding: 5px 10px;">Non</a>
                                </div>
                            </div>
                        </div>
                        <div class="admissionqa">
                            <div class="thequestion">
                                <p class="text-139">2. Êtes-vous passionné(e), concentré(e), mûr(e) et orienté(e) vers le progrès? Aurez vous terminé l'école secondaire depuis au moins un an au début du programme et pourriez vous le prouver avec des documents et une lettre de motivation?</p>
                                <div id="notext2" style="display:none;">
                                    <p class="text-140">Nous sommes désolés. Ceci est un programme dehaut niveau et nous ne pouvons accepter que les candidats qui sont prêts. Veuillez revenir lorsque vous remplirez les critères cités ci-dessus.</p>
                                </div>
                                <div id="yestext2" style="display:none;">
                                    <p class="text-140" style="color:lightgreen; font-size:3.5em;">✔</p>
                                </div>
                            </div>
                            <div class="theanswer">
                                <div class="rounded-rectangle-1-holder">
                                    <a class="btn btn-primary btn-orange-theme" href="javascript:toggleDiv('yestext2');" style="padding: 5px 10px;">Oui</a>
                                </div>
                                <div class="rounded-rectangle-1-holder">
                                    <a class="btn btn-primary btn-orange-theme" href="javascript:toggleDiv('notext2');" style="padding: 5px 10px;">Non</a>
                                </div>
                            </div>
                        </div>
                        <div class="admissionqa">
                            <div class="thequestion">
                                <p class="text-139">3. Votre niveau d'anglais parlé est-il au moins intermédiraire et pourriez vous le prouver lors d'un entretien physique ou un entretien sur Skype?</p>
                                <div id="notext3" style="display:none;">
                                    <p class="text-140">Nous sommes désolés. Veuillez améliorer votre niveau d'anglais parlé (il existe un certain nombres de cours et de programmes pour cela) et revenir vers nous quand vous serez prêt(e).</p>
                                </div>
                                <div id="yestext3" style="display:none;">
                                    <p class="text-140" style="color:lightgreen; font-size:3.5em;">✔</p>
                                </div>
                            </div>
                            <div class="theanswer">
                                <div class="rounded-rectangle-1-holder">
                                    <a class="btn btn-primary btn-orange-theme" href="javascript:toggleDiv('yestext3');" style="padding: 5px 10px;">Oui</a>
                                </div>
                                <div class="rounded-rectangle-1-holder">
                                    <a class="btn btn-primary btn-orange-theme" href="javascript:toggleDiv('notext3');" style="padding: 5px 10px;">Non</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>

        <div class="congrats container-fluid section-highlight" id="congrats" style="display:none;">
            <div class="wrapper-16">
                <p class="congratulations">Félicitations!</p>
            </div>
            <p class="text-6">Vous répondez aux critères basiques pour pouvoir présenter votre candidature pour le programme de Syn Studiol ! Retrouvez un aperçu de ce programme ci-dessous :</p>
        </div>

        <div id="overview">
        <div class="container-fluid section-highlight" id="section-highlight-program-overview">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="white-text">Aperçu du programme</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid section-highlight general-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="overviewtable">
                        <div class="admissionprocesstable">
                            <table>
                                <tr class="grey-table-row">
                                    <td>Nom de l'école:</td>
                                    <td>Syn Studio</td>
                                </tr>
                                <tr>
                                    <td>Nom du programme:</td>
                                    <td>Conception Artistique (NTL.1A)</td>
                                </tr>
                                <tr class="grey-table-row">
                                    <td>Langue de la formation:</td>
                                    <td>Anglais</td>
                                </tr>
                                <tr>
                                    <td>Type de diplôme*:</td>
                                    <td>Attestation d'études collégiales</td>
                                </tr>
                                <tr class="grey-table-row">
                                    <td>Organisme d'accréditaion:</td>
                                    <td>Le ministère de l'Éducation, de l'Enseignement supérieur et de la Recherche</td>
                                </tr>
                                <tr>
                                    <td>Durée du programme:</td>
                                    <td>18 mois - 6 semestres (de 10 semaines chacun) - 1200 heures de cours</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="italicpara">
                            *Des bourses d'études sont disponibles pour les élèves de nationalité canadienne (remplir les formulaires ci-dessous pour nous contacter et obtenir plus d'informations)
                            <br />
                            <br />*Visas étudiants: Tous les étudiants étrangers doivent obtenir un visa étudiant délivré par l'Immigration canadienne pour pouvoir participer au programme (remplir le formulaire ci-dessous pour plus d'informations et contacter nos conseillers)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <div id="structure">
        <div class="container-fluid section-highlight program-div">
            <div class="row">
                <h1>Structure du programme</h1>
            </div>

            <!-- Term 1 -->
                <div class="row">
                    <div class="class-structure-box">
                        <div class="col-md-12 structure-orange-background">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="structure-term-box">
                                        <h3 class="structure-term-header">Session 1</h3>
                                        <p class="structure-hour-header">Heures: 215</p>
                                    </div>
                                </div>
                                <!--end of col-md-3-->
                                <div class="col-md-9 structure-nopadding">
                                    <ul class="structure-list">
                                        <li class="structure-class-box class-box-shade1">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-01</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-beige">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Introduction à la conception artistique</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade2">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-02</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-yellow">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Dessiner en contexte de production</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>80h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade3">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-03</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-tea">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Acquisition d'images</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade4">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-04</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-tea">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Traitement d'images numériques</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--end of col-md-9-->
                            </div>
                        </div>
                        <!--end of col-md-12-->
                    </div>
                </div>
                <br />
                <!-- Session 2 -->
                <div class="row">
                    <div class="class-structure-box">
                        <div class="col-md-12 structure-orange-background">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="structure-term-box">
                                        <h3 class="structure-term-header">Session 2</h3>
                                        <p class="structure-hour-header">Heures: 205</p>
                                    </div>
                                </div>
                                <!--end of col-md-3-->
                                <div class="col-md-9 structure-nopadding">
                                    <ul class="structure-list">
                                        <li class="structure-class-box class-box-shade1">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-05</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-beige">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Intégration d'images</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade2">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-02</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-yellow">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Dessiner en contexte de production</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>40h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade3">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-06</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-brown">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Étude anatomique</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>75h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade4">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-07</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-darkpurple">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Communication visuelle</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--end of col-md-9-->
                            </div>
                        </div>
                        <!--end of col-md-12-->
                    </div>
                </div>
                <br />
                <!-- Session 3 -->
                <div class="row">
                    <div class="class-structure-box">
                        <div class="col-md-12 structure-orange-background">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="structure-term-box">
                                        <h3 class="structure-term-header">Session 3</h3>
                                        <p class="structure-hour-header">Heures: 210</p>
                                    </div>
                                </div>
                                <!--end of col-md-3-->
                                <div class="col-md-9 structure-nopadding">
                                    <ul class="structure-list">
                                        <li class="structure-class-box class-box-shade1">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-08</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-fushia">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Gestuelle, expression et personnalité</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>30h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade2">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-09</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-green">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Illustrer des personnages dans leur environnement</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>30h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade3">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-06</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-brown">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Étude anatomique</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>30h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade4">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-07</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-darkpurple">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Communication visuelle</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade5">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-10</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-beige">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Originalité et créativité</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>75h</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--end of col-md-9-->
                            </div>
                        </div>
                        <!--end of col-md-12-->
                    </div>
                </div>
                <br />
                <!-- Session 4 -->
                <div class="row">
                    <div class="class-structure-box">
                        <div class="col-md-12 structure-orange-background">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="structure-term-box">
                                        <h3 class="structure-term-header">Session 4</h3>
                                        <p class="structure-hour-header">Heures: 195</p>
                                    </div>
                                </div>
                                <!--end of col-md-3-->
                                <div class="col-md-9 structure-nopadding">
                                    <ul class="structure-list">
                                        <li class="structure-class-box class-box-shade1">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-08</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-fushia">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Gestuelle, expression et personnalité</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>30h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade2">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-09</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-green">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Dessiner un personnage et son environnement</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>60h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade3">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-11</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-orange">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Conception d'objets mobiles ou non</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>60h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade4">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-12</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-lime">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Conception d'environnements</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--end of col-md-9-->
                            </div>
                        </div>
                        <!--end of col-md-12-->
                    </div>
                </div>
                <br />
                <!-- Session 5 -->
                <div class="row">
                    <div class="class-structure-box">
                        <div class="col-md-12 structure-orange-background">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="structure-term-box">
                                        <h3 class="structure-term-header">Session 5</h3>
                                        <p class="structure-hour-header">Heures: 195</p>
                                    </div>
                                </div>
                                <!--end of col-md-3-->
                                <div class="col-md-9 structure-nopadding">
                                    <ul class="structure-list">
                                        <li class="structure-class-box class-box-shade1">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-13</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-purple">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Conception de personnages humanoïdes</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>60h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade2">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-14</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-red">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Conception de personnages non-humanoïdes</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>60h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade3">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-11</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-orange">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Conception d'objets mobiles ou non</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade4">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-12</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-lime">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Conception d'environnements</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>30h</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--end of col-md-9-->
                            </div>
                        </div>
                        <!--end of col-md-12-->
                    </div>
                </div>
                <br />
                <!-- Session 6 -->
                <div class="row">
                    <div class="class-structure-box">
                        <div class="col-md-12 structure-orange-background">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="structure-term-box">
                                        <h3 class="structure-term-header">Session 6</h3>
                                        <p class="structure-hour-header">Heures: 180</p>
                                    </div>
                                </div>
                                <!--end of col-md-3-->
                                <div class="col-md-9 structure-nopadding">
                                    <ul class="structure-list">
                                        <li class="structure-class-box class-box-shade1">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-13</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-purple">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Conception de personnages humanoïdes</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade2">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-14</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-red">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Conception de personnages non-humanoïdes</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade3">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-15</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-beige">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Assurer son intégration au marché du travail</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="structure-class-box class-box-shade4">
                                            <div>
                                                <div class="structure-class-title">
                                                    <p>574-SYN-12</p>
                                                </div>
                                                <div class="structure-color-bar color-bar-lime">
                                                </div>
                                                <div class="structure-class-name">
                                                    <p>Conception d'environnements</p>
                                                </div>
                                                <div class="structure-class-hour">
                                                    <p>45h</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--end of col-md-9-->
                            </div>
                        </div>
                        <!--end of col-md-12-->
                    </div>
                </div>                
            <div class="row">
                <div class="col-md-12">
                    <p class="italicpara">
                        <br />
                        <br /> Note: les decriptions détaillées des cours se trouvent dans l'enveloppe d'informations que vous pouvez réclamer après avoir rempli le formulaire ci-dessous
                    </p>
                </div>
            </div>
            <br />
            <br />
        </div>
        </div>

        <div id="features">
        <div class="container-fluid section-highlight program-div">
            <div class="row row-80percent">
                <h1>Particularités du programme</h1>
                <br />
                <br />
                <div class="col-md-4">
                    <div class="featurecol">
                        <p class="featuretitle"><strong>• Formation dehaut niveau avec des professionnels</strong></p>
                        <br />
                        <p>C'est pour cela que vous êtes ici. Pour que ceux qui ont déjà réussi vous ouvrent la voie.</p>
                        <br />
                        <br />
                        <br />
                        <p class="featuretitle"><strong>• Évènements artistique et sociaux gratuits de Syn Studio</strong></p>
                        <br />
                        <p><strong>Études de modèles vivants ouverts à tous, excursions, fêtes de fin de semestre, démonstrations artistiques et soirées cinéma.</strong></p>
                        <br />
                        <p>Apprenez et améliorez vous tout en créant des liens avec d'autres artistes passionnés qui suivent la même voie</p>
                        <br />
                        <br />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featurecol">
                        <p class="featuretitle"><strong>• Séances de coaching individuelles et régulières avec des maîtres</strong></p>
                        <br />
                        <p>Tous ceux qui ont atteint le sommet ont reçu de l'aide lors de l'ascencion. La plupart d'entre eux ont été entraîné par des maîtres.</p>
                        <br />
                        <br />
                        <br />
                        <p class="featuretitle"><strong>• Assister à des évènements organisés par Syn Studio (gratuits pour les étudiants qui suivent ce programme)</strong></p>
                        <br />
                        <p>Visites de studios de cinéma et de jeux vidéo, démonstrations et ateliers avec des artistes concepteur(trice)s de renommée mondiale qui viennent parfois de l'étranger, fêtes entre personnes du secteur et plus encore.
                        Rencontrez les professionnels du secteur, apprenez avec eux et nouez des liens</p>
                        <br />
                        <br />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featurecol">
                        <p class="featuretitle"><strong>• Accès aux équipements Syn Studio hors desheures de cours:</strong></p>
                        <br />
                        <p>School library
                            <br />Foyer étudiant
                            <br />Casiers personnels
                            <br />Le studio d'art traditionnel
                            <br />Le studio de design pour technique mixtes
                            <br />Le studio de design digital Wacom</p>
                        <br />
                        <p>Le bel environnement de Syn Studio pourrait faire partie de votre quotidien, un endroit où vous vous sentirez chez vous, une communauté qui serait comme une famille qui s'occupe de vous.</p>
                        <br />
                        <br />
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <div id="dates">
        <div class="container-fluid section-highlight program-div">
            <div class="row">
                <h1>Processus d'admission, dates et tarifs</h1>
                <br />
                <br />
                <div class="col-md-12">
                    <div class="overviewtable2 hidden-xs">
                        <div class="admissionprocesstable">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Étape:</th>
                                        <th>PROGRAM LIST:</th>
                                        <th>Date limite:</th>
                                        <th>Frais à payer (Dollars canadiens):</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="grey-table-row">
                                        <td>1</td>
                                        <td>Soumission du Portofolio Iinitial/ examen de votre candidature (recevez une critique d'un artiste conceptuel professionnel et la chance de renvoyer gratuitement une candidature si votre portofolio ne passe pas cette étape)</td>
                                        <td>8 décembre 2015</td>
                                        <td class="orange-table-row">$50</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Portofolio général/ analyse (c'est là que nos équipes décident qui passera à la prochaine étape)</td>
                                        <td>2 mars 2016</td>
                                        <td class="orange-table-row">GRATUIT pour ceux qui ont déjà envoyé un portfolio pour candidature ($50 pour les autres)</td>
                                    </tr>
                                    <tr class="grey-table-row">
                                        <td>3</td>
                                        <td>Entretiens (entretien individuel ou sur Skype déterminant pour savoir si vous êtes accepté dans notre programme d'entraînement d'élite)</td>
                                        <td>Mars/Avril 2016</td>
                                        <td class="orange-table-row">GRATUIT</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="text-align:center; background:darkslategray; color:white;">
                                            ANNONCE DES RÉSULTATS (c'est là que vous savez si vous avez réussi)
                                        </td>
                                    </tr>
                                    <tr class="grey-table-row">
                                        <td>4</td>
                                        <td>Envoi du contrat et des frais d'inscription pour finaliser l'inscription.</td>
                                        <td>6 mai 2016</td>
                                        <td class="orange-table-row">$50</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Journée d'orientation pour les nouveaux élèves début de la session 1</td>
                                        <td>3 octobre 2016</td>
                                        <td class="orange-table-row">$4982.50</td>
                                    </tr>
                                    <tr class="grey-table-row">
                                        <td>6</td>
                                        <td>Début de la session 2</td>
                                        <td>16 janvier, 2017</td>
                                        <td class="orange-table-row">$4982.50</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Début de la session 3</td>
                                        <td>10 avril, 2017</td>
                                        <td class="orange-table-row">$4982.50</td>
                                    </tr>
                                    <tr class="grey-table-row">
                                        <td>8</td>
                                        <td>Début de la session 4</td>
                                        <td>10 juillet 2017</td>
                                        <td class="orange-table-row">$4982.50</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Début de la session 5</td>
                                        <td>2 octobre 2017</td>
                                        <td class="orange-table-row">$4982.50</td>
                                    </tr>
                                    <tr class="grey-table-row">
                                        <td>10</td>
                                        <td>Début de la session 6</td>
                                        <td>15 janvier 2018</td>
                                        <td class="orange-table-row">$4982.50</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Cérémonie de remise des diplômes</td>
                                        <td>Avril 2018</td>
                                        <td class="orange-table-row">GRATUIT</td>
                                    </tr>
                                    <tr class="grey-table-row">
                                        <td></td>
                                        <td></td>
                                        <td>Total à payer:</td>
                                        <td class="orange-table-row">$29,995*</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="hidden-md hidden-lg">
                        <br />
                            <p class="italicpara">*Certaines conditions peuvent s'appliquer</p>
                            <br />
                            <a class="orange-text" href="<?php echo get_template_directory_uri(); ?>/docs/synstudio-admission-process-details-fr.pdf" target="_blank">Cliquer ici pour voir la procédure et les frais d'admission en détails.</a>
                    </div>
                    <div class="hidden-xs hidden-sm">
                        <p class="longnote"><strong class="text-style-8"></strong>*Des bourses d'études allant jusqu'à $20 000 dollars canadiens sont disponibles pour les étudiants canadiens (remplir le formulaire ci-dessous pour plus d'informations)</p>
                        <p class="longnote"><strong class="text-style-8">Note</strong>: Pour $29995 dollars canadiens, vous rejoignez un programme d'entraînement dehaut niveau et recevez l'éducation en art conceptuel la plus éstimée de la planète! Le programme similaire le plus abordable après celui-ci se trouve en Asie et est de près de $45 000 dollars canadiens par an (taxes non incluses – veuillez noter que notre programme dure 18 mois)</p>
                        <p class="longnote"><strong class="text-style-8">D'autres programmes artistiques dehaut niveau (principalement vers Los Angeles) ont des frais à l'année qui dépassent les $200 000 dollars canadiens!</strong></p>
                        <p class="longnote">Ajoutez à tout cela que Montréal est une ville BIEN PLUS abordable et dans laquelle on vit mieux. Les effectifs de nos classes sont également plus réduits (20 élèves maximum) tandis que les leurs sont de 25 à 30 élèves. Avec Syn Studio, vous économiserez des dizaines de milliers de dollars pour recevoir une éducation de meilleure qualité!</p>
                        <p class="longnote">Les frais de $50 dollars canadiens (correspondant à l'envoi de votre portofolio et à votre candidature) sont la garantie que votre portfolio fera l'objet d'une analyse poussée. Même si vous n'êtes pas retenu après cette étape, vous recevrez quand même des commentaires précieux sur votre travail de la part d'artistes conceptuels confirmés ainsi que des conseils pour vous permettre de vous améliorer, après quoi vous pourrez à nouveau soumettre votre portofolio pour examen, et ce, gratuitement!</p>
                        <p class="longnote"><strong class="text-style-8">**Veuillez garder à l'esprit que c'est un programme à PETIT effectif et que suelement 20 ÉLEVES par an seront sélectionnés. Notre équipe ne pourra examiner qu'un nombre limité de portfolios et de candidatures. Ces candidatures et portofolios seront acceptés selon la règle du PREMIER ARRIVÉ PREMIER SERVI.</strong></p>
                        <p class="longnote">Si vous voulez sérieusement devenir un artiste conceptuel professionnel, assurez vous de remplir le formulaire ci-dessous pour réserver votre place pour les prochains examens de portfolio. C'est ENTIÈREMENT GRATUIT et vous recevrez un guide de candidature gratuit par e-mail ainsi que l'adresse e-mail et le numéro de téléphone d'un de nos conseillers que vous pourrez contacter pour d'éventuelles questions.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <div id="apply">
        <div class="container-fluid section-highlight general-content row-60percent">
            <h1>Formulaire de candidature</h1>
            <br />
            <br />
                  <!-- Begin MailChimp Signup Form -->
      <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
      <style type="text/css">
        #mc_embed_signup{clear:left; font:14px Helvetica,Arial,sans-serif; }
        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
        We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
      </style>
<div id="mc_embed_signup" class="form11">
<form action="//synstudio.us2.list-manage.com/subscribe/post?u=23c298529438530e62af0db46&amp;id=f0a74fd57f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="indicates-required"><span class="asterisk">*</span>VEUILLEZ NOTER QUE nous créerons un formulaire d'inscription – veuillez garder la place nécessaire**</div>
<div class="mc-field-group">
  <label for="mce-FNAME">Entrez votre prénom </label>
  <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
  <label for="mce-EMAIL">Entrez votre adresse email  <span class="asterisk">*</span>
</label>
  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
  <label for="mce-MMERGE2">Séléctionnez la date de début </label>
  <select name="MMERGE2" class="" id="mce-MMERGE2">
  <option value=""></option>
  <option value="Octobre 2016">Octobre 2016</option>
<option value="Octobre 2017">Octobre 2017</option>

  </select>
</div>
<div class="mc-field-group">
  <label for="mce-MMERGE3">Séléctionnez votre statut </label>
  <select name="MMERGE3" class="" id="mce-MMERGE3">
  <option value=""></option>
  <option value="Citoyen canadien">Citoyen canadien</option>
<option value="Résident permanent du Canada">Résident permanent du Canada</option>
<option value="Étudiant(e) étranger(e)">Étudiant(e) étranger(e)</option>

  </select>
</div>
<div class="mc-field-group input-group">
    <ul><li><input type="checkbox" value="1" name="group[9233][1]" id="mce-group[9233]-9233-0" CHECKED><label for="mce-group[9233]-9233-0">Je veux recevoir des informations gratuites de la part de Syn Studio  à propos de l'univers de de la conception artistique (cours, émissions et interviews d'artistes de renommée mondiale, artciles, tutoriels ratuits, etc).</label></li>
</ul>
</div>
  <div id="mce-responses" class="clear">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_23c298529438530e62af0db46_f0a74fd57f" tabindex="-1" value=""></div>
    <div class="clear" style="width:100%;text-align:center;"><input type="submit" value="Reservez votre place des maintenant" name="subscribe" id="mc-embedded-subscribe" class="button orange reserve" onClick="ga(‘send’, ‘event’, ‘CADP’, ‘click-button’, ‘Reservez-Maintenant’, 10);"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='MMERGE2';ftypes[2]='dropdown';fnames[3]='MMERGE3';ftypes[3]='dropdown';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
        </div>
        
        <div class="container-fluid section-highlight general-content program-div quotesection">
            <div class="row">
                <div class="col-md-12">
                    <p class="longnote">
                       Certaines personnes agissent tandis que d'autres ne font que regarder sur la ligne de touche. Il est temps de décider qui vous êtes. Agissez maintenant ou prenez le risque de devoir dire au revoir à votre rêve de devenir artiste professionnel, d'avoir un travail que vous détestez et de toujours vous demander "et si..."
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="vinci">
                        <p class="longnote">"J'ai toujours été impressionné par l'urgence d'agir. Savoir n'est pas suffisant - nous devons appliquer. Être prêt n'est pas assez – nous devons agir."</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAdmission/ellipse_5.png" alt=""> - Leonardo Da Vinci
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="brucelee">
                        <p class="longnote">"Si tu aimes vraiment la vie, ne perds pas ton temps; car le temps est la composante de la vie."</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaAdmission/ellipse_5_copy.png" alt=""> - Bruce Lee
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="clear:both;padding:30px 10px;">
                        <p class="longnote">
                            ***Les réservations pour les examens de portfolio fonctionnent selon la règle du premier arrivé premier servi. Réserver sa place et recevoir le guide est totalement gratuit. Remplissez le formulaire ci-dessus et inscrivez vous DÈS MAINTENANT.
                            <br /><br />****Pour toute question, veuillez remplir le formulaire ci-dessus et vous recevrez l'adresse e-mail et le numéro de téléphone de l'un de nos conseillers qui pourra vous venir en aide :)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end MAIN CONTENT -->

    <?php } ?>

<?php get_footer('microsite'); ?>