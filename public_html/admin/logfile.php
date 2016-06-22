<?php
require_once("../../includes/initialize.php");

if(!$session->is_logged_in()) {redirect_to("login.php");}
?>

<?php
if (isset($_GET['clear'])) {
	if ($_GET['clear'] == 'true'){
		$log_file = SITE_ROOT.DS."logs".DS."logfile.txt";
		file_put_contents($log_file, '');  
		log_action('Logs Cleared', "by User ID {$session->user_id}");
	    redirect_to('logfile.php');
	}
}
?>

<?php include_layout_template('admin_header.php');?>
<h2>Logfile</h2>
<?php

$content = "";
$log_file = SITE_ROOT.DS."logs".DS."logfile.txt";
	if (file_exists($log_file)) {
		if ($handle = fopen($log_file, 'r')) {
			while(!feof($handle)) {
			$content .= fgets($handle);
			}
			fclose($handle);

			echo nl2br($content);

		} else {
			echo output_message("Error: Unable to open log file for reading.");
		}
	} else {
		echo output_message("Error: log file does not exist");
	}
?>
<p>
<a href="logfile.php?clear=true">Clear log file</a>
</p>

<?php include_layout_template('admin_footer.php');?>			
 