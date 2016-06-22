<?php
require_once("../../includes/initialize.php");

if(!$session->is_logged_in()) {redirect_to("login.php");}
?>

<?php

    if(isset($_POST['submit'])) {
        
        $gallery = new Gallery();
        $gallery->name = $_POST['gallery_name'];
        $gallery->save();
    }

?>



<?php include_layout_template('admin_header.php');?>

    <h2>Create New Gallery</h2>

    <?php echo output_message($message); ?>
    

    <form action="new_gallery.php" method="POST">
        <p><input type="text" name="gallery_name" /></p>
        <input type="submit" name="submit" value="Create" /> 
    </form>

<?php include_layout_template('admin_footer.php');?>        