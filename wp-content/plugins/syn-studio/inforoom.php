<!DOCTYPE html>
<html lang="en">
	<body>
		<div class="container-fluid">
			<div class="center-block"><h1><b>Syn Studio Information System</b></h1></div>
			<div id="inforoom" class="inforoom-menu">
				<p class=\"lead\">Welcome to the Information Room. Here you can manage information about Syn Studio.</p>
				<ul>
					<?php
					echo "<li><h2><a href=\"admin.php?page=syn-studio/semesters.php\" target=\"_BLANK\">Semesters</a></h2></li>";
					echo "<li><h2><a href=\"admin.php?page=syn-studio/classrooms.php\" target=\"_BLANK\">Classrooms</a></h2></li>";
					echo "<li><h2><a href=\"admin.php?page=syn-studio/students.php\" target=\"_BLANK\">Students</a></h2></li>";
					?>
				</ul>
			</div>
	
			<div>
				<link rel="stylesheet" href="<?php bloginfo('url'); _e(''); ?>/wp-content/plugins/syn-studio/calendar/lib/css/SimpleCalendar.css" />
				<?php
					function myplugin_scripts() {
    					wp_register_style( 'foo-styles',  plugin_dir_url( __FILE__ ) . 'lib/css/SimpleCalendar.css' );
    					wp_enqueue_style( 'foo-styles' );
					}
					add_action( 'wp_enqueue_scripts', 'myplugin_scripts' );
					error_reporting(E_ALL ^ E_WARNING);
					require_once('calendar/lib/donatj/SimpleCalendar.php');
					$calendar = new donatj\SimpleCalendar();
					$calendar->setStartOfWeek('Sunday');
					$calendar->addDailyHtml( 'Sample Event', 'today', 'tomorrow' );
					$calendar->show(true);
				?>
			</div>
		</div>
	</body>
</html>