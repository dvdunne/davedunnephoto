<?php
	require_once("../includes/initialize.php");
?>

<?php include_layout_template('header.php'); ?>

<div id="contact_form">
	<form method="post" action="send_mail.php">
		<label for="name">Name: </label>
		<input type="text" id="name" name="name" value="" placeholder="John Doe" autofocus="autofocus" />
		<label for="email">Email: </label>
		<input type="email" id="email" name="email" value="" placeholder="john_doe@example.net" />
		<label for="message">Message: </label>
		<textarea id="message" name="message" placeholder="Enter message here..."></textarea>
		<input type="submit" value="Submit" id="submit-button" />
	</form>
</div>

<?php include_layout_template('footer.php'); ?>
