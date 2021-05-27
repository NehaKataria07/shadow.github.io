<?php

require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
    
}
$user_id = $_SESSION['id'];
$oldpass = $_POST['oldpass'];
$newpass = $_POST['newpass'];
$retype = $_POST['retype'];
if(strlen($newpass)<6){
    header('location: settings.php?error=password length must be atleast 6');
}else{
$oldpass = md5(mysqli_real_escape_string($con,$_POST['oldpass']));
$newpass = md5(mysqli_real_escape_string($con,$_POST['newpass']));
$retype = md5(mysqli_real_escape_string($con,$_POST['retype']));
if($newpass===$retype){
    $pass_change_query = "UPDATE users SET password='$newpass' WHERE id='$user_id'";
    $update_query = mysqli_query($con, $pass_change_query) or die(mysqli_error($con));
    header('location:settings.php?success=password updated successfully');  
}else{
  header('location: settings.php?error=password did not match');
}
}