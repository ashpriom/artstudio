<?php
/**
 * @package WordPress
 * @subpackage SynStudio_Theme
 */

/*
Template Name: Digital Classes
 */

get_header(); 
if (function_exists('pll_current_language')) { $currentLang = pll_current_language('slug'); }
?>

<!-- content: start -->
<div id="content" class="classes-byCategory">
  	
  	<!-- column 1: start -->
	<?php while ( have_posts() ) : the_post(); ?>
    <?php echo "<h1>"; the_title(); echo "</h1>"; ?>
		
	<!-- classes : start -->
	<?php  
	if($currentLang=="en"){ $cats = get_categories('child_of=4'); }
	else{ $cats = get_categories('child_of=48'); } 
    foreach ($cats as $cat) :
        $this_category = get_category($cat);
        $args = array('category__in' => array($cat->term_id),'order' => 'ASC');
        $my_query = new WP_Query($args); 
        if ($my_query->have_posts()) :
            if ($cat->name=="Digital" || $cat->name=="Numérique") { 
              	if ($this_category->category_parent != 0) { 
                	while ($my_query->have_posts()) : $my_query->the_post(); /*general loop output; for instance: */ 
                	$postID = get_the_ID();?>
                	<div class="info-box1Wrapper">
                		<div class="info-box1" id="class-<?php echo $postID;?>">
                			<?php 
                  			if (function_exists('pll_current_language')) { $currentLang = pll_current_language('slug'); }
                  			if (function_exists('pll_get_post')){ $translationID = pll_get_post($postID,'en'); } 
                  			if($currentLang=="en"){ $class_offered = get_post_meta($postID, 'class_offered', true); }
                  			else{ $class_offered = get_post_meta($translationID, 'class_offered', true); }
                  			if($class_offered == "0"){ ?>
                			
                			<script type="text/javascript">
	                  			jQuery(document).ready(function(){
		                    		jQuery("#class-<?php echo $postID;?>").append("<a href='<?php the_permalink(); ?>'><div class='no-class-overlay'><?php if($currentLang=="en"){echo "Class Not Offered for this semester";} else{ echo "Ce cours n&#39;est pas offert cette session.";} ?></div></a>");
		                    		jQuery("#class-<?php echo $postID; ?> .no-class-overlay").hide();
		                      		jQuery("#class-<?php echo $postID; ?>").mouseover(function(){
		                        		jQuery("#class-<?php echo $postID;?> .no-class-overlay").show();
		                      		}).mouseout(function(){
		                          		jQuery("#class-<?php echo $postID; ?> .no-class-overlay").hide();
		                        	});
	                  			});    
	                		</script>
	                		
	                		<?php } ?>
                  			
                  			<div id="class-category" class="box-class">
                    			<a class="class-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    			<div class="thumbnail">
                      				<?php
                        				if($currentLang=="en"){ $attachment_id = get_post_meta($postID, 'thumbnail', true); }
                        				else{ $attachment_id = get_post_meta($translationID, 'thumbnail', true); }
                      				?>
                      				<a class='class-title' href="<?php the_permalink(); ?>">
                        				<?php echo wp_get_attachment_image($attachment_id, 'small'); ?>
                      				</a>
                    			</div>
                    		
                    			<div class="right">
                      				<div class="level">
	                        			<h4>
                          <?php 
                            if($currentLang=="en"){
                              $thelevel = get_post_meta($postID, 'the_level', true);
                              if($thelevel == "1"){ ?> Level <span class="Website-Body-Text-C0">•</span><span class="Website-Body-Text-C1">•••</span><?php }
                              if($thelevel == "2"){ ?> Level <span class="Website-Body-Text-C0">••</span><span class="Website-Body-Text-C1">••</span><?php }
                              if($thelevel == "3"){ ?> Level <span class="Website-Body-Text-C0">•••</span><span class="Website-Body-Text-C1">•</span><?php }
                              if($thelevel == "4"){ ?> Level <span class="Website-Body-Text-C0">••••</span><span class="Website-Body-Text-C1"></span><?php }
                              if($thelevel == "Advanced"){ ?> Level <span class="Website-Body-Text-C0">Advanced</span><span class="Website-Body-Text-C1"></span><?php }
                              if($thelevel == "General"){ ?> Level <span class="Website-Body-Text-C0">General</span><span class="Website-Body-Text-C1"></span><?php }
                              if($thelevel == "Special"){ ?> Level <span class="Website-Body-Text-C0">Special</span><span class="Website-Body-Text-C1"></span><?php }  
                            }
                            else{
                              $thelevel = get_post_meta($translationID, 'the_level', true);
                              if($thelevel == "1"){ ?> NIVEAU <span class="Website-Body-Text-C0">•</span><span class="Website-Body-Text-C1">•••</span><?php }
                              if($thelevel == "2"){ ?> NIVEAU <span class="Website-Body-Text-C0">••</span><span class="Website-Body-Text-C1">••</span><?php }
                              if($thelevel == "3"){ ?> NIVEAU <span class="Website-Body-Text-C0">•••</span><span class="Website-Body-Text-C1">•</span><?php }
                              if($thelevel == "4"){ ?> NIVEAU <span class="Website-Body-Text-C0">••••</span><span class="Website-Body-Text-C1"></span><?php }
                              if($thelevel == "Advanced"){ ?> NIVEAU <span class="Website-Body-Text-C0">Avancé</span><span class="Website-Body-Text-C1"></span><?php }
                              if($thelevel == "General"){ ?> NIVEAU <span class="Website-Body-Text-C0">GÉNÉRAL</span><span class="Website-Body-Text-C1"></span><?php }
                              if($thelevel == "Special"){ ?> NIVEAU <span class="Website-Body-Text-C0">SPÉCIAL</span><span class="Website-Body-Text-C1"></span><?php }  
                            }
                          ?>
	                        			</h4>
	                      			</div>
                      				<div class="short-desc-category"><p><?php echo get_post_meta($postID, 'class_info_' . $currentLang, true);?></p></div>
                      				<div class="cta">
                        				<a class="btn-learnMore" href="<?php the_permalink(); ?>">
                          					<?php if($currentLang=="en"){?> Learn More <?php } else{ ?> Plus d'info <?php } ?>
                        				</a>
                      				</div>
                    			</div>
                  			</div>
              			</div>
              		</div>
                	<?php //echo "</div>";
                	endwhile; 
              	} 
            } ?>

            <?php else : 
                echo 'No Posts for '.$cat->name;                
        endif; 
    endforeach; ?> <!-- classes : end -->
	
	<?php endwhile; // end of the loop. ?>
  	<!-- column 1: end -->
  
  	<!-- column 2: start -->
   	<?php if ($currentLang == "en") { ?>
		<div id='newsletter-box' class='info-box10Wrapper'>
			<div class='info-box10'>	
				<h2>Learn More…</h2>
				<p>
					Stay informed about <b>Syn Studio life-drawing sessions</b>, new art classes and workshops with <b>top local and international artists and instructors</b>, free student art shows with wine and cheese, free portfolio reviews and other important local art events. <br />
					Also, get the latest news about about all of our great industry artist podcasts, interviews, tutorials, articles, videos and other material created just for you: the artist. <br />
					Just enter your first name and email in the fields to the right and then click on the big orange "subscribe" button to join the ever growing number of artists in our community.
				</p>
		 
			 	<div class='mailform2'>
					<form action="//synstudio.us2.list-manage.com/subscribe/post?u=23c298529438530e62af0db46&amp;id=623da952bd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div class='mailtextboxes'>
							<div class='mailtextboxes-first'>
								<input type="text" placeholder="First Name" value="" name="FNAME" class="" id="mce-FNAME">
							</div>
							<div class='mailtextboxes-last'>
								<input type="email" required="" placeholder="Email Address" id="mce-EMAIL" class="email" name="EMAIL" value="">
							</div>
						
							<div class='mailtextboxes-checkboxes'>
								<input type="checkbox" value="1" name="group[9193][1]" id="mce-group[9193]-9193-0" checked="true"><label for="mce-group[9193]-9193-0">Syn Studio podcasts, videos, tutorials, interviews and articles.</label><br />
								<input type="checkbox" value="2" name="group[9193][2]" id="mce-group[9193]-9193-1" checked="true"><label for="mce-group[9193]-9193-1">Syn Studio life drawing, workshops, classes, parties and news.</label>
								
							</div>
							<input type="submit" id="mc-embedded-subscribe" name="subscribe" value="Subscribe" onclick="_gaq.push(['_trackEvent', 'Newsletter EN', 'Join Our Newsletter', 'Subscribe']);" >
						</div>
					</form>
			 	</div>
			</div>
		</div>
	
    <?php }	else { ?>
		
	<div id='newsletter-box' class='info-box10Wrapper-fr'>
		<div class='info-box10'>	
			<h2>Bien plus encore..</h2>
			<p>
				Restez informés à propos des <b>sessions de modèles vivants</b>, des nouveaux cours ainsi que des ateliers avec Syn Studio avec <b>les meilleurs artistes et instructeurs locaux et internationaux</b>.Participez à des événements gratuits pour les étudiants, des critiques de portfolios gratuites ainsi que d'autres événements locaux de la scène artistique montréalaise.<br />
				Mais en plus, soyez au courant de nos derniers podcasts exclusifs, entrevues, tutoriaux, articles, vidéos ainsi que d'autres matériels créés pour vous, les artistes.<br />
				Il vous suffit juste d'entrer votre prénom et votre courriel en bas à droite puis cliquez sur le bouton "s'inscrire" pour rejoindre les milliers d'artistes que forment déjà notre communauté !
			</p>
		 
			<div class='mailform2'>
				<div id="mc_embed_signup"> <!-- Begin MailChimp Signup Form -->
            						<form action="//synstudio.us2.list-manage.com/subscribe/post?u=23c298529438530e62af0db46&amp;id=f3d0db5d90" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              							<div id="mc_embed_signup_scroll">
                							<div class="mc-field-group">
                								<input type="text" value="" name="FNAME" placeholder="Prénom" class="" id="mce-FNAME">
              								</div>
              								<div class="mc-field-group">
                								<input type="email" value="" name="EMAIL" placeholder="Adresse e-mail" class="required email" id="mce-EMAIL">
            								</div>
								            <div class="mc-field-group input-group">
								                <ul>
								                	<li><input type="checkbox" value="1" checked="true" name="group[9197][1]" id="mce-group[9197]-9197-0"><label for="mce-group[9197]-9197-0">Podcasts, vidéos, tutoriaux, entrevues et articles de Syn Studio</label></li>
								            		<li><input type="checkbox" value="2" checked="true" name="group[9197][2]" id="mce-group[9197]-9197-1"><label for="mce-group[9197]-9197-1">Sessions de modèles vivants, ateliers, cours, événements spéciaux et nouvelles de Syn Studio</label></li>
								            	</ul>
								            </div>
								            <div id="mce-responses" class="clear">
								                <div class="response" id="mce-error-response" style="display:none"></div>
								                <div class="response" id="mce-success-response" style="display:none"></div>
								            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								            <div style="position: absolute; left: -5000px;"><input type="text" name="b_23c298529438530e62af0db46_f3d0db5d90" tabindex="-1" value=""></div>
								            <div class="clear"><input type="submit" value="Abonnez-vous" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
								        </div>
								    </form>
								</div><!--End mc_embed_signup-->
			</div>
		</div>
	</div>
	
	<?php } ?>
   	<!-- column 2: end -->
  
</div> <!-- content: end -->

<?php get_footer(); ?>