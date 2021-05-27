<?php
require 'includes/common.php';
if(isset($_POST['email'])) {
	$name = $_POST["userName"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	$toEmail = "admin@estore.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $message, $mailHeaders)) {
	    $message = "Message sent successfully";
            header('location: contact_us.php?message='.$message);
	   
	}
        else{
            header('location: contact_us.php');
        }
}