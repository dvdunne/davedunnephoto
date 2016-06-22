<?php
	require_once("../includes/initialize.php");
?>
<?php include_layout_template('header.php'); ?>

	<div class="gallery">
		<div class="gallery_outer">
        	<div class="gallery_inner" id="gallery_inner">
				<a href="signsoflife.php"><img src="gallery/front/signs-of-life.jpg" alt="Signs Of Life" style="left: 0px;" ></a>
				<a href="signsoflife2.php"><img src="gallery/front/signs-of-life-2.jpg" alt="Signs Of Life 2" style="left: 888px;" ></a>
			</div>
		</div>
		<div id="image_title">&nbsp;</div>
		<div class="gallery_navigation">
	    	<a href="" id="gallery_prev">previous</a>
	        :
	        <a href="" id="gallery_next">next</a>
	        &nbsp;
		</div>
	</div>

 <script type="text/javascript">
        var offsets = [0, 888];
        navigateFront(offsets);
      
	</script>
	
	
<?php include_layout_template('footer.php'); ?>
