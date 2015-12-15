<?php 

if(isset($_POST['student_id_array'])){
	
	$studentIDArray = explode(',',$_POST['student_id_array']);
	$studentIDArray = implode(',',$studentIDArray);
	print_r($studentIDArray);
	$attendanceArray = $_POST['attendance']);
	//$attendanceArray = implode(',',$attendanceArray);
	print_r($attendanceArray);
	echo $attendanceArray;

	global $wpdb;
	$semester_class_insert = $wpdb->insert( 
		'syn1_syn_attendance', 
		array(
			'student_id' => sanitize_text_field($classID),
			'classinstance_id' => sanitize_text_field($semesterID),
			'attendance' => sanitize_text_field($teacherID),
		),
		array(
			'%d',
			'%d',
			'%d',
		)
	);

	$wpdb->print_error();
	//$location = "admin.php?page=syn-studio%2Fsemesters.php";
	//wp_safe_redirect($location, $status=302);
}

else{
	echo "The semester ID is not with your session anymore. Please go to the <a href=\"/wp-admin/admin.php?page=syn-studio/semesters.php\">Semesters Page</a> and click \"classes\" for a semester.";
}

?>