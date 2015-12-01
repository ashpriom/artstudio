<?php 

if(isset($_POST['semester_id'])){
	$semesterID = $_POST['semester_id'];
	$semester_name_en = $_POST['semester_name_en'];
	$semester_name_fr = $_POST['semester_name_fr'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];

	global $wpdb; // Declaring $wpdb as global to execute SQL query statements that return PHP objects.
	$semesters_update = $wpdb->update( 
		'syn1_syn_semester', 
		array( 
			'semester_name_en' => sanitize_text_field($semester_name_en),
			'semester_name_fr' => sanitize_text_field($semester_name_fr),
			'start_date' => sanitize_text_field($start_date),
			'end_date' => sanitize_text_field($end_date), 
		),
		array( 'semester_id' => $semesterID ), 
		array( 
			'%s',
			'%s',
			'%s',
			'%s',
		), 
		array( '%d' )
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio/semesters.php";
	wp_safe_redirect($location, $status=302);
}

?>