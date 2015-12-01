<?php

if(isset($_POST['semester_id']) && isset($_POST['class_semester_id'])){
	
	$semesterID = $_POST['semester_id'];
	$classSemesterID = $_POST['class_semester_id'];
	$studentID = $_POST['student_id'];

	global $wpdb;
	$classStudentInsert = $wpdb->insert( 
		'syn1_syn_enrollment',
		array(
			'class_semester_id' => sanitize_text_field($classSemesterID),
			'student_id' => sanitize_text_field($studentID),
		),
		array(
			'%d',
			'%d',
		) 
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio%2Fsemesters.php";
	wp_safe_redirect($location, $status=302);
}

else{ echo "Something is wrong. Please contact system admin. Thank you.";}

?>