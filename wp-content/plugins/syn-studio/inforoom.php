<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="<?php plugins_url( '/css/bootstrap.min.css', dirname(__FILE__) ) ?>" rel="stylesheet">
	<script src="<?php plugins_url(); ?>/syn-studio/js/bootstrap.min.js"></script>
</head>

<body>
	<div><h1><b>Syn Studio Information System</b></h1><div>

	<?php
		echo "<div id=\"inforoom\" class=\"inforoom-menu\">";
			echo "<p>Welcome to the Information Room. Here you can manage information about Syn Studio.</p>";
			echo "<ul>";
				echo "<li><h2><a href=\"admin.php?page=syn-studio/semesters.php\" target=\"_BLANK\">Semesters</a></h2></li>";
				echo "<li><h2><a href=\"admin.php?page=syn-studio/classrooms.php\" target=\"_BLANK\">Classrooms</a></h2></li>";
				echo "<li><h2><a href=\"admin.php?page=syn-studio/students.php\" target=\"_BLANK\">Students</a></h2></li>";
			echo "</ul>";
		echo "</div>";
	?>

</body>
</html>