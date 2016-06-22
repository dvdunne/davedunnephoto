<?php
	require_once("../includes/initialize.php");
?>
<?php include_layout_template('header.php'); ?>

<?php
	
	$sql  = "SELECT * FROM photographs";
	$sql .= " WHERE gallery_id = 1"; //1 = Signs of Life gallery
	$sql .= " ORDER BY gallery_order ASC";
	$photos = Photograph::find_by_sql($sql);
?>

	<div class="gallery">
		<div class="gallery_outer">
        	<div class="gallery_inner" id="gallery_inner">
				<?php $offset = 0; ?>
				<?php foreach($photos as $photo): ?>
					<img src="<?php echo $photo->image_path(); ?>" alt="<?php echo $photo->caption?>" style="left: <?php echo($offset); ?>px;"  /></a>
					<?php $offset = $offset + $photo->width + 10; ?>
				<?php endforeach; ?>
			</div>
			<?php echo output_message($message); ?>
		</div>
		<div id="image_title">&nbsp;</div>
		<div class="gallery_navigation">
	    	<a href="#" id="gallery_prev">previous</a>
	        :
	        <a href="#" id="gallery_next">next</a>
		</div>
	</div>

 <script type="text/javascript">    
        <?php $offset = 0; ?>
        <?php echo("var offsets = [");
		foreach($photos as $photo){
			echo($offset.",");
			$offset = $offset + $photo->width + 10;
		}
		echo("];\n");
		?>
        navigate(offsets);
</script>
	

<?php include_layout_template('footer.php'); ?>
