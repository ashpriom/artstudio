<?php
$postID = get_the_ID();

//Concept Art & Design Workshop and Masterclass
if ($postID==6502) {
	get_header ("masterClass");
}
else {
	get_header();
}

?>

	<?php
        if ( have_posts() ) { the_post(); rewind_posts(); }
        if ( in_category(4) ) {
									 if ($postID==6502) {
											 include(TEMPLATEPATH . '/singleClassMaster.php');
										}
										else {
            include(TEMPLATEPATH . '/singleClassDetail.php');
										}
        }
        else {
										if ( in_category(1) ) {
            include(TEMPLATEPATH . '/singleNewsletter.php');
       		 }
       		 else {
												
												if ( in_category(8) ) {
													 include(TEMPLATEPATH . '/singlePodcast.php');
												}
												else {									
           		 include(TEMPLATEPATH . '/singleDefault.php');
												}
										}
        }
    ?>

<?php get_footer(); ?>