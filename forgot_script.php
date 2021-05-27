<?php
require 'includes/common.php';

$email = $_POST['email'];
$email = mysqli_real_escape_string($con,$_POST['email']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";
  
  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num == 0) {    
    header('location: forgot_password.php?error=Email does not Exist');
  } else if (!preg_match($regex_email, $email)) {  
    header('location: forgot_password.php?error=Not a valid Email Id');  
  } else {
      $password_temp = password_generate(7);  
      $password =  md5($password_temp);
      $query = "UPDATE users SET password='$password' WHERE email='$email'";
      $result = mysqli_query($con, $query) or mysqli_error($con);          
      
        $subject = "Reset Password";
        $txt = "The password has been reset. Your password is : $password_temp";
        $headers = "From: noreply@estore.com";         
        mail($email,$subject,$txt,$headers);
        header('location: resetpassword.php');
        
        
  }
  
 function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  