<?php
require_once("../../includes/initialize.php");

if(!$session->is_logged_in()) {redirect_to("login.php");}

?>

<?php
	$galleries = Gallery::find_all();
?>


<?php include_layout_template('admin_header.php');?>

	<h2>Galleries</h2>
	<?php echo output_message($message); ?>
	<table class="bordered">
		<tr>
			<th>ID</th>
			<th>Gallery</th>
			<th>&nbsp;</th>
		</tr>
	<?php foreach($galleries as $gallery): ?>
		<tr>
			<td><?php echo $gallery->id; ?></td>
			<td><?php echo $gallery->name; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>

<?php include_layout_template('admin_footer.php');?>			
 