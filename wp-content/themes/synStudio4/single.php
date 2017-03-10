<?php
/*
	Load different templates based on the type of class we offer. Every page load request goes through this file to load php templates.
*/

$postID = get_the_ID();

// activate header-masterClass.php, header-masterClass2.php and so on.
if ($postID==14658 || $postID==14659){ get_header("masterClass"); }
else{ get_header(); }

if(have_posts()){ the_post(); rewind_posts();}

if(in_category(4) || in_category(48)){ // This is for all posts under "classes (cours)" category
	if (in_category(11) || in_category(116)){include(TEMPLATEPATH . '/masterclass.php'); }
	elseif($postID==8397 || $postID==11019){include(TEMPLATEPATH . '/singleIntenseClassDetail.php'); } // this is template for full time intensive
	else{include(TEMPLATEPATH . '/singleClassDetail.php'); } // all regular classes
}
elseif(in_category(8) || in_category(92)){
	include(TEMPLATEPATH . '/singlePodcast.php'); 
}
elseif(in_category(29) || in_category(95)){
	include(TEMPLATEPATH . '/singleInterview.php'); 
}
elseif(in_category(1) || in_category(40)){
	include(TEMPLATEPATH . '/pageWithNewsletter.php');
}
else{
	include(TEMPLATEPATH . '/singleDefault.php');
}

get_footer();

?>