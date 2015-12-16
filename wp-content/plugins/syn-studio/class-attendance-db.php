<?php 

if(isset($_POST['student_id_array']) && isset($_POST['class_instance_id'])){
	
	$classInstanceID = $_POST['class_instance_id'];
	$studentIDArray = explode(',',$_POST['student_id_array']);
	//$studentIDArray = implode(',',$studentIDArray);
	print_r($studentIDArray);
	$attendanceArray = $_POST['attendance_array'];
	//$attendanceArray = implode(',',$attendanceArray);
	print_r($attendanceArray);

	$studentAttendances = array_combine($studentIDArray, $attendanceArray);
	print_r($studentAttendances);

	global $wpdb;

	foreach($studentAttendances as $studentAttendance){
		$semester_class_insert = $wpdb->insert( 
			'syn1_syn_attendance', 
			array(
				'student_id' => array_search($studentAttendance, $studentAttendances),
				'classinstance_id' => sanitize_text_field($classInstanceID),
				'attendance' => sanitize_text_field($studentAttendance),
			),
			array(
				'%d',
				'%d',
				'%d',
			)
		);
	}

	$wpdb->print_error();
}

else{ 
	echo "The semester ID is not with your session anymore. 
	Please go to the <a href=\"/wp-admin/admin.php?page=syn-studio/semesters.php\">Semesters Page</a> and
	click \"classes\" for a semester.";
}

?>