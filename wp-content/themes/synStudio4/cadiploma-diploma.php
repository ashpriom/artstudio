<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */
/*
Template Name: Concept Art Diploma - Concept Art Diploma Page
 */

?>
<?php get_header('microsite'); ?>
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

        <div class="header-container" id="section-header-ca-diploma">
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
            <?php if($currentLang == "en"){ ?>
            <h1 class="header-title shadow-text-dark orange-text"><small class="white-text">Concept Art</small><br />Diploma Program</h1>
            <?php } else { ?>
            <h1 class="header-title shadow-text-dark orange-text"><small class="white-text">Diplôme en</small><br />Conception Artistique</h1>
            <?php } ?>

        </div>
        <p class="header-credit">Art: Dave Fraser</p>
        
        <!-- MAIN CONTENT -->
        <div class="main-content-container">
            <div class="container-fluid section-highlight" id="section-highlight-intro">
                <div class="row">
                    <div class="section-intro-text">
                        <p>
                        <?php if($currentLang == "en"){ ?>
                        If you qualify for this <strong>elite 18 month training program</strong>, you will receive all
                        <br /> the tools, techniques, training, skills and strategies required to build
                        <br /> a <strong>killer concept</strong> art portfolio and <strong>get hired</strong> as a concept artist
                        <br /> in the <strong>entertainment industry</strong>.
                        <br />
                        <br /> This is a <strong>very intensive training</strong> where you will <strong>develop your design</strong> and
                        <br />
                        <strong>illustration skills </strong>while working in an <strong> industry environment,</strong> under the
                        <br /> direct supervision of <strong>an instructor</strong> who will act as your <strong>art director</strong>.
                        <?php } else{ ?>
                        Si vous avez toutes les qualifications requises pour participer à ce <strong style="color:black;">programme d'entraînement élite de 18 mois</strong>, vous recevrez les outils, 
                        les techniques, l'entraînement, les compétences et les stratégies dont vous aurez besoin pour créer un <strong style="color:black;">superbe portfolio</strong>
                        <strong style="color:black;"> afin de vous faire embaucher</strong> dans le secteur.<br><br>Pendant cet <strong style="color:black;">entraînement intensif</strong>, 
                        vous <strong style="color:black;">développerez vos compétences en conception et en illustration</strong> tout en travaillant dans un <strong style="color:black;">environnement 
                        professionnel</strong>, sous la supervision de <strong style="color:black;">votre instructeur</strong> qui jouera le rôle de <strong style="color:black;">directeur artistique.</strong>
                        <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid section-highlight" id="section-highlight-teaser">
                <br />
                <div class="row row-75percent">
                    <div class="col-sm-5">
                        <img class="teaser-icons" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaDiploma/forma_1_3.png" alt="Calendar">
                        <br />
                        <br />
                        <br />
                        <p class="shadow-text-grey"><?php if($currentLang == "en"){ ?>PROGRAM LENGTH<?php } else{ ?>Durée du programme<?php } ?></p>
                        <p class="shadow-text-dark"><?php if($currentLang == "en"){ ?>18 Months<?php } else{ ?>18 mois<?php } ?></p>
                        <br />
                    </div>
                    <div class="col-sm-2">
                        <div class="line-separator-white hidden-xs"></div>
                    </div>
                    <div class="col-sm-5">
                        <img class="teaser-icons" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaDiploma/forma_1_4.png" alt="Clock">
                        <br />
                        <br />
                        <br />
                        <p class="shadow-text-dark"><?php if($currentLang == "en"){ ?>TIME SPENT WITH INSTRUCTORS<?php } else{ ?>Temps passé en classe avec votre instructeur<?php } ?></p>
                        <p class="shadow-text-dark"><?php if($currentLang == "en"){ ?>1200 Hours<?php } else{ ?>1200 Heures<?php } ?></p>
                        <br />
                    </div>
                </div>
            </div>

            <div class="container-fluid section-highlight general-content">
                <?php if($currentLang == "en"){ ?><h1 class="orange-text"><small class="">An education in</small><br />Concept Art</h1><?php } else{ ?><h1 class="orange-text"><small class="">Formation en</small><br />Conception Artistique</h1><?php } ?>
                <br />
                <div class="row row-75percent">
                    <div class="col-sm-4">
                        <img class="ed-ca-img" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaDiploma/design_ashuman.jpg" alt="">
                        <?php if($currentLang == "en"){ ?><h4>Design Fundamentals</h4><?php } else{ ?><h4>Les bases du design</h4><?php } ?>
                    </div>
                    <div class="col-sm-4">
                        <img class="ed-ca-img" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaDiploma/digital_oilrig.jpg" alt="">
                        <?php if($currentLang == "en"){ ?> <h4>Digital Techniques</h4><?php } else{ ?> <h4>Compétences Techniques</h4><?php } ?>
                    </div>
                    <div class="col-sm-4">
                        <img class="ed-ca-img" src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaDiploma/industry_workshop.jpg" alt="">
                        <?php if($currentLang == "en"){ ?><h4>Industry Experience</h4><?php } else{ ?><h4>Expériences professionnelle</h4><?php } ?>
                    </div>
                </div>
                <br />
                <br />
            </div>


            <?php if($currentLang == "en"){ ?>
            <div class="container-fluid section-highlight" id="section-highlight-program">
            <h2 class="orange-text">The program is divided into 6 terms</h2>
            <br />
            <div class="row row-75percent">
                <div class="col-md-4">
                    <div class="term-bx">
                        <p class="termnumber orange-text">1</p>
                        <p class="word-term">Term</p>
                        <div class="termline1"></div>
                        <p class="term-description">Learn the fundamentals of sketching for production, universal principles of image making, essential concept art pipelines and techniques for digital image manipulation and managing your visual reference library.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="term-bx">
                        <p class="termnumber orange-text">2</p>
                        <p class="word-term">Term</p>
                        <div class="termline1"></div>
                        <p class="term-description">Become proficient at visually communicating your designs and integrating photographic elements into your work-flow. Understand human and animal anatomy in-depth so you can create convincing creatures and characters.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="term-bx">
                        <p class="termnumber orange-text">3</p>
                        <p class="word-term">Term</p>
                        <div class="termline1"></div>
                        <p class="term-description">Learn how to represent gesture, expression and personality in your creatures and characters, as well as how to convincingly illustrate characters within their environments. Become proficient at generating creative solutions to a variety of design challenges.</p>
                    </div>
                </div>
            </div>
            <div class="row row-75percent">
                <div class="col-md-4">
                    <div class="term-bx">
                        <p class="termnumber orange-text">4</p>
                        <p class="word-term">Term</p>
                        <div class="termline1"></div>
                        <p class="term-description">Acquire advanced illustration techniques and take your design skills to the next level while working on vehicle, prop and environment concept art under the guidance of your instructor, who will act as your art director.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="term-bx">
                        <p class="termnumber orange-text">5</p>
                        <p class="word-term">Term</p>
                        <div class="termline1"></div>
                        <p class="term-description">Learn how to design iconic creatures and characters as you gain several powerful, cutting-edge concept design pipelines, incorporating advanced Photoshop techniques and 3D into your work-flow.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="term-bx">
                        <p class="termnumber orange-text">6</p>
                        <p class="word-term">Term</p>
                        <div class="termline1"></div>
                        <p class="term-description">Assemble a killer concept art portfolio, learn to target it to get the job you want and gain a series of strategies, tactics and skills for breaking into the industry and ensuring your success as a professional concept artist.</p>
                    </div>
                </div>
            </div>
            <br />
            <br />
            </div>
            <?php } else{ ?>
            <div class="container-fluid section-highlight" id="section-highlight-program">
            <h2 class="orange-text">Le programme se divise en 6 sessions :</h2>
            <br />
            <div class="row row-75percent">
                <div class="col-md-4">
                    <div class="term-bx">
                        <p class="termnumber orange-text">1</p>
                        <p class="word-term">SESSION</p>
                        <div class="termline1"></div>
                        <p class="term-description">Apprendre les bases du croquis de production, les principes universels de la création d'images, les astuces essentielles de la conception artistique et les techniques de manipulation d'images digitales ainsi que de gestion de votre répertoire de références visuelles.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="term-bx">
                        <p class="termnumber orange-text">2</p>
                        <p class="word-term">SESSION</p>
                        <div class="termline1"></div>
                        <p class="term-description">Devenir efficace dans la manière dont vous communiquez visuellement avec vos créations, et intégrer des éléments photographiques dans votre travail. Comprendre en profondeur l'anatomie humaine et animale afin de créer des personnages et des créatures convaincants.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="term-bx">
                        <p class="termnumber orange-text">3</p>
                        <p class="word-term">SESSION</p>
                        <div class="termline1"></div>
                        <p class="term-description">Apprendre à représenter le mouvement, l'expression et la personnalité de vos personnages et créatures et apprendre à les placer dans leur environnement de manière convaincante. Devenir efficace pour générer des solutions créatives pour diffèrent thèmes de conception.</p>
                    </div>
                </div>
            </div>
            <div class="row row-75percent">
                <div class="col-md-4">
                    <div class="term-bx">
                        <p class="termnumber orange-text">4</p>
                        <p class="word-term">SESSION</p>
                        <div class="termline1"></div>
                        <p class="term-description">Acquérir des techniques d'illustration avancées et améliorer vos compétences artistiques tout en créant des designs de véhicules, d’objets et d’environnements. Lors de la session, vous serez guidé par votre instructeur qui jouera le rôle de ton directeur artistique.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="term-bx">
                        <p class="termnumber orange-text">5</p>
                        <p class="word-term">SESSION</p>
                        <div class="termline1"></div>
                        <p class="term-description">Apprendre à créer des créatures et des personnages emblématiques tout en gagnant des astuces de création de concept puissantes et efficaces. Incorporer dans votre travail des techniques avancées de Photoshop et d'illustrations en 3D.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="term-bx">
                        <p class="termnumber orange-text">6</p>
                        <p class="word-term">SESSION</p>
                        <div class="termline1"></div>
                        <p class="term-description">Monter un superbe portfolio et apprendre à le créer de manière à cibler le poste que vous voulez obtenir. Découvrir une série de stratégies et de tactiques pour persévérer dans l’industrie et assurer votre succès en tant qu'artiste conceptuel professionnel.</p>
                    </div>
                </div>
            </div>
            <br />
            <br />
            </div>
            <?php } ?>
            <?php if($currentLang == "en"){ ?>
            <div class="container-fluid section-highlight" id="section-highlight-careers">
            <h2 class="orange-text"><small>Careers in</small><br />Concept Art</h2>
            <br />
            <div class="section-intro-text">
                <p>
                    After graduating with a cutting-edge skill set, industry connections and a killer portfolio,
                    <br /> you will have the following concept art career paths open to you:
                </p>
            </div>
            <br />
            <div class="row row-80percent">
                <div class="col-md-4">
                    <div class="term-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/01_Character_Designer.jpg" alt="">
                        <p class="small-art-credit text-right">Art : Remko Troost</p>
                        <h3 class="orange-text">Character Designer</h3>
                        <br />
                        <p class="term-description">Design iconic characters for the next generation of games, movies and TV shows that engage your audience and connect them emotionally to the story.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="term-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/02_Environment_Designer.jpg" alt="">
                        <p class="small-art-credit text-right">Art : Christian Robert De Massy</p>
                        <h3 class="orange-text">Environment Designer</h3>
                        <br />
                        <p class="term-description">Become proficient at visually communicating your designs and integrating photographic elements into your work-flow. Understand human and animal anatomy in-depth so you can create convincing creatures and characters.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="term-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaDiploma/03_Props.jpg" alt="">
                        <p class="small-art-credit text-right">Art : Charles Vinh</p>
                        <h3 class="orange-text">Prop and Vehicle Designer</h3>
                        <br />
                        <p class="term-description">Design the technology from which a fictional universe is built. From spaceships and futuristic gadgets to war chariots and magical artifacts, you build worlds that enthral and inspire!</p>
                    </div>
                </div>
            </div>
            <div class="row row-80percent">
                <div class="col-md-4">
                    <div class="term-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/04_Creature_Design.jpg" alt="">
                        <p class="small-art-credit text-right">Art : Xin Ran Liu</p>
                        <h3 class="orange-text">Creature Designer</h3>
                        <br />
                        <p class="term-description">Design captivating creatures that terrify or delight audiences as you connect with their deep subconscious fears and desires, and explore what it means to be human.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="term-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaDiploma/05_Generalist.jpg" alt="">
                        <p class="small-art-credit text-right">Art : Daniel Kvasznicza</p>
                        <h3 class="orange-text">Concept Art Generalist</h3>
                        <br />
                        <p class="term-description">Work on a variety concepts so you can design the look and feel of many interconnected parts of a fictional world to support the story and art direction.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="term-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaDiploma/06_Others.jpg" alt="">
                        <p class="small-art-credit text-right">Art : Charles Vinh</p>
                        <h3 class="orange-text">Other careers</h3>
                        <br />
                        <ul class="term-description-list">
                            <li><p class="term-description">Art Director</p></li>
                            <li><p class="term-description">Colour Key artist</p></li>
                            <li><p class="term-description">Costume and set design</p></li>
                            <li><p class="term-description">Matte painting</p></li>
                            <li><p class="term-description">Commercial and cover Illustration</p></li>
                            <li><p class="term-description">Storyboard art</p></li>
                            <li><p class="term-description">Architectural pre-visualization</p></li>
                            <li><p class="term-description">Graphic design</p></li>
                            <li><p class="term-description">Game asset art</p></li>
                            <li><p class="term-description">Texture art</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br />
            <br />
            </div>
            <?php } else{ ?>
            <div class="container-fluid section-highlight" id="section-highlight-careers">
            <h2 class="orange-text"><small>Carrières dans</small><br />la conception artistique</h2>
            <br />
            <div class="section-intro-text">
                <p>
                    Après avoir obtenu votre diplôme, après avoir acquéri des compétences de pointes et créé un réseau ainsi qu'un portofolio,<br /> plusieurs voies s'offrent à vous pour faire carrière dans la conception artistique :
                </p>
            </div>
            <br />
            <div class="row row-80percent">
                <div class="col-md-4">
                    <div class="term-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/01_Character_Designer.jpg" alt="">
                        <p class="small-art-credit text-right">Art : Remko Troost</p>
                        <h3 class="orange-text">Concepteur de personnages</h3>
                        <br />
                        <p class="term-description">Créez les personnages emblématiques de la prochaine génération de jeux vidéo, de films et de séries qui créeront un lien émotionnel avec le public.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="term-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/02_Environment_Designer.jpg" alt="">
                        <p class="small-art-credit text-right">Art : Christian Robert De Massy</p>
                        <h3 class="orange-text">Concepteur d'environnements</h3>
                        <br />
                        <p class="term-description">Créer des environnements riches et captivants qui projettent une atmosphère et une ambiance qui mènera les spectateurs au plus profond de l'histoire. Utiliser des techniques de photo manipulation et les intégrer dans votre méthodologie de travail.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="term-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaDiploma/03_Props.jpg" alt="">
                        <p class="small-art-credit text-right">Art : Charles Vinh</p>
                        <h3 class="orange-text">Concepteur d'objèts et de véhicules</h3>
                        <br />
                        <p class="term-description">Créez la technologie d’un univers fictionnel que vous devez construire. Tout en incluant des vaisseaux spatiaux, gadgets futuristes, véhicules de guerre et artefacts magiques. Vous aurez comme tache d’inventer des mondes qui passionnent et inspirent! </p>
                    </div>
                </div>
            </div>
            <div class="row row-80percent">
                <div class="col-md-4">
                    <div class="term-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/04_Creature_Design.jpg" alt="">
                        <p class="small-art-credit text-right">Art : Xin Ran Liu</p>
                        <h3 class="orange-text">Concepteur de créatures</h3>
                        <br />
                        <p class="term-description">Créez des créatures captivantes qui évoque la terreur ou apaisent les spectateurs tout en établissant un lien avec leur peurs ou leurs désirs les plus inconscients. Explorez ce que cela signifie que d'être humain.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="term-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaDiploma/05_Generalist.jpg" alt="">
                        <p class="small-art-credit text-right">Art : Daniel Kvasznicza</p>
                        <h3 class="orange-text">Artiste concepteur (trice) généraliste</h3>
                        <br />
                        <p class="term-description">Travaillez sur une grande variété de concepts dans le but de designer l’aspect visuel et l’essence de plusieurs éléments interconnectés dans un univers fictionnel. Cela afin d’orienter la direction artistique et l’histoire.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="term-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/cadiplomaDiploma/06_Others.jpg" alt="">
                        <p class="small-art-credit text-right">Art : Charles Vinh</p>
                        <h3 class="orange-text">Autres carrières</h3>
                        <br />
                        <ul class="term-description-list">
                            <li><p class="term-description">Directeur artistique</p></li>
                            <li><p class="term-description">Colour Key artist</p></li>
                            <li><p class="term-description">Création de costume et de décors</p></li>
                            <li><p class="term-description">Matte painting</p></li>
                            <li><p class="term-description">Illustrations de publicités et de couvertures</p></li>
                            <li><p class="term-description">Storyboard art</p></li>
                            <li><p class="term-description">Prévisualisation architecturale</p></li>
                            <li><p class="term-description">Design graphique</p></li>
                            <li><p class="term-description">Création d'assets pour jeux vidéo</p></li>
                            <li><p class="term-description">Artiste de textureArt Director</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br />
            <br />
        </div>

        <?php } ?>
        
        <?php if($currentLang == "en"){ ?>
            <div class="container-fluid section-highlight" id="section-highlight7">
                <div class="row">
                    <p><strong>But...is our school a good fit for you?</strong></p>
                    <br />
                    <a class="btn btn-primary btn-orange-theme" href="<?php bloginfo('url'); ?>/about-synstudio/" onClick="ga(‘send’, ‘event’, ‘CADP’, ‘click-button’, ‘Learn-About-School’, 10);">Learn about our school <img class="white-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1.png" alt="Arrow" /></a>
                </div>
            </div>
            <?php } else{ ?>
            <div class="container-fluid section-highlight" id="section-highlight7">
                <div class="row">
                    <p><strong>Est-ce que notre école est une voie à entreprendre pour vous? </strong></p>
                    <br />
                    <a class="btn btn-primary btn-orange-theme" href="<?php bloginfo('url'); ?>/a-propos-de-syn-studio/" onClick="ga(‘send’, ‘event’, ‘CADP’, ‘click-button’, ‘Apprenez-Ecole’, 10);">APPRENEZ EN PLUS SUR NOTRE ÉCOLE <img class="white-arrow" src="<?php echo get_template_directory_uri(); ?>/images/shape_1.png" alt="Arrow" /></a>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- end MAIN CONTENT -->

<?php get_footer('microsite'); ?>