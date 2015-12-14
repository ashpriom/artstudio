<?php 

if(isset($_POST['student_id_array'])){
	
	$studentIDArray = $_POST['student_id_array'];
	print_r($studentIDArray);
	
	global $wpdb;
	$semester_class_insert = $wpdb->insert( 
		'syn1_syn_class_semester', 
		array(
			'class_id' => sanitize_text_field($classID),
			'semester_id' => sanitize_text_field($semesterID),
			'teacher_id' => sanitize_text_field($teacherID),
			'class_semester_name_en' => sanitize_text_field($classSemesterNameEn),
			'class_semester_name_fr' => sanitize_text_field($classSemesterNameFr),
		),
		array(
			'%d',
			'%d',
			'%d',
			'%s',
			'%s',
		)
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio%2Fsemesters.php";
	//wp_safe_redirect($location, $status=302);
}

else{
	echo "Ermm...the semester ID is not with your session anymore. Please go to the <a href=\"/wp-admin/admin.php?page=syn-studio/semesters.php\">Semesters Page</a> and click \"classes\" for a semester.";
}

?>