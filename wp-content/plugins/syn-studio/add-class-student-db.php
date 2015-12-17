<?php

	if(isset($_POST['semester_id']) && isset($_POST['class_semester_id'])){
		
		$semesterID = $_POST['semester_id'];
		echo $classSemesterID = $_POST['class_semester_id'];
		echo $studentID = $_POST['student_id'];

		global $wpdb;
		//echo $studentIDdb = $wpdb->get_var( "SELECT student_id FROM syn1_syn_enrollment WHERE class_semester_id = $classSemesterID ");
		//echo $classSemesterIDdb = $wpdb->get_var( "SELECT class_semester_id FROM syn1_syn_enrollment WHERE student_id = $studentID ");
		//if($studentID != $studentIDdb && $classSemesterID != $classSemesterIDdb){
		$studentExists = $wpdb->get_results("SELECT enrollment_date FROM syn1_syn_enrollment WHERE student_id = $studentID AND class_semester_id = $classSemesterID ");
		if (empty($studentExists)){
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
			//wp_safe_redirect($location, $status=302);
		}
			
		else {
			echo "<p class=\"lead bg-danger\">Student already enrolled in this course. Please go to the <a href=\"/wp-admin/admin.php?page=syn-studio/semesters.php\">Semesters Page</a>.<p>"; 
		}
	
	}

	else{
		echo "Something is wrong. Please contact system admin. Thank you.";
	}

?>