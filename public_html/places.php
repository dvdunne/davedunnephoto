<?php
	require_once("../includes/init.php");
?>
<?php include_layout_template('header.php'); ?>
	<div class="gallery">
		<div class="gallery_outer">
        	<div class="gallery_inner" id="gallery_inner">
				<img src="gallery/places/places-1.jpg" alt="The Mercado de Triana in Seville, Spain." style="left: 0px;" >
				<img src="gallery/places/places-2.jpg" alt="Ventanna Con Gato. Madrid, Spain." style="left: 743px;" >
				<img src="gallery/places/places-3.jpg" alt="Venice, Italy." style="left: 1125px;" >
				<img src="gallery/places/places-4.jpg" alt="Making Dumplings. Hsinchu, Taiwan." style="left: 1868px;" >
				<img src="gallery/places/places-5.jpg" alt="A market selling spices in Jerusalem, Israel." style="left: 2611px;" >
				<img src="gallery/places/places-6.jpg" alt="Plaza de Toros. Seville, Spain." style="left: 3354px;" >
				<img src="gallery/places/places-7.jpg" alt="Barajas Airport, Madrid, Spain." style="left: 4097px;" >
				<img src="gallery/places/places-8.jpg" alt="Chillies. Budapest, Hungary." style="left: 5085px;" >
				<img src="gallery/places/places-9.jpg" alt="Hsinchu, Taiwan." style="left: 5463px;" >
				<img src="gallery/places/places-10.jpg" alt="A man weaving at the Namsangol Traditional Folk Village in Seoul, South Korea." style="left: 6206px;" >
				<img src="gallery/places/places-11.jpg" alt="'For the price, even if it's bad it's good' - Papayas in a small farmer&apos;s market in Honokawai on Maui, Hawaii" style="left: 6949px;" >
				<img src="gallery/places/places-12.jpg" alt="Point Cabrillo Lighthouse, California, USA." style="left: 7692px;" >
				<img src="gallery/places/places-13.jpg" alt="Bi-bim-bap. Seoul, South Korea" style="left: 8069px;" >
				<img src="gallery/places/places-14.jpg" alt="Szentendre, Hungary." style="left: 8904px;" >
				<img src="gallery/places/places-15.jpg" alt="The Frauenkirche (Church of Our Lady) in Dresden, Germany." style="left: 9289px;" >
				<img src="gallery/places/places-16.jpg" alt="The Episcopal Church in Mau, Hawaii." style="left: 10032px;" >
			</div>
		</div>
		<div id="image_title">&nbsp;</div>
		<div class="gallery_navigation">
	    	<a href="#" id="gallery_prev">previous</a>
	        :
	        <a href="#" id="gallery_next">next</a>
		</div>
	</div>

 <script type="text/javascript">
        var offsets = [0, 743, 1125, 1868, 2611, 3354, 4097, 5085, 5463, 6206, 6949, 7692, 8069, 8904, 9289, 10032];
        navigate(offsets);
      
	</script>
	

<?php include_layout_template('footer.php'); ?>
