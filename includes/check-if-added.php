<?php
function check_if_added_to_cart($item_id){
    $con = mysqli_connect("localhost", "root", "admin", "estore");
    $user_id = $_SESSION['id'];
   $query = "SELECT * FROM user_items WHERE item_id = $item_id AND user_id = '$user_id' AND status='Added to cart'";
   $check_result = mysqli_query($con, $query);
   if(mysqli_num_rows($check_result)>=1){
       return 1;
   }
    else{
        return 0;
    }
       
}



