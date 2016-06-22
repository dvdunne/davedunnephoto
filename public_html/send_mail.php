<?php
	require_once("../includes/initialize.php");
    require_once("../includes/PHPMailer/PHPMailerAutoload.php");

?>

<?php include_layout_template('header.php'); ?>
<?php

    $mail = new PHPMailer;


    //Sanitize email 
    $_POST['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);  
    $_POST['message'] = filter_var($_POST['message'], FILTER_SANITIZE_STRING); 

    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = MAIL_SERVER;
    $mail->SMTPAuth = true;
    $mail->Port = MAIL_PORT;
    $mail->Username = MAIL_USER;
    $mail->Password = MAIL_KEY;
    $mail->SMTPSecure = 'ssl';
    $mail->From = $_POST['email'];
    $mail->FromName = $_POST['name'];
    $mail->addAddress(MAIL_TO);


    $mail->WordWrap = 50;
    $mail->Subject = "Email from davedunnephoto.com";
    $mail->Body = $_POST['message'];



    if(!$mail->send()) {
        echo '<article><p>Message could not be sent.</p>';
        echo '<p>Mailer Error: ' . $mail->ErrorInfo.'</p>';
        echo '<p>Please <a href="contact.php">try again</a>.</p></article>';
    } else {
        header('location: thanks.php?res=success');
    }

?>

<?php include_layout_template('footer.php'); ?>

