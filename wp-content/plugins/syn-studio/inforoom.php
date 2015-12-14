<!DOCTYPE html>
<html lang="en">

<body>
	<div class="container-fluid">
		<div class="center-block"><h1><b>Syn Studio Information System</b></h1><div>

		<?php
			echo "<div id=\"inforoom\" class=\"inforoom-menu\">";
				echo "<p class=\"lead\">Welcome to the Information Room. Here you can manage information about Syn Studio.</p>";
				echo "<ul>";
					echo "<li><h2><a href=\"admin.php?page=syn-studio/semesters.php\" target=\"_BLANK\">Semesters</a></h2></li>";
					echo "<li><h2><a href=\"admin.php?page=syn-studio/classrooms.php\" target=\"_BLANK\">Classrooms</a></h2></li>";
					echo "<li><h2><a href=\"admin.php?page=syn-studio/students.php\" target=\"_BLANK\">Students</a></h2></li>";
				echo "</ul>";
			echo "</div>";
		?>
	</div>
</body>
</html>