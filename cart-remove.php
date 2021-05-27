<?php
require 'includes/common.php';
if (isset($_GET['id'])) {
    $item_id = $_GET['id']; 
    $user_id = $_SESSION['id'];    
     
    $query = "DELETE FROM user_items WHERE id='$item_id' AND user_id='$user_id' ";
    mysqli_query($con, $query) or die(mysqli_error($con));    
    header("location:cart.php");
}
