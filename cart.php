<?php 
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cart | E-store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" >
        <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
       <script type="text/javascript" src="js/loginmadal.js"></script>
       
    </head>
    <body>
     <div class="container-fluid" id="content">
       <?php
       include 'includes/header.php';
       ?>
      
        <div class="row">
            <div class="col-md-5 col-md-offset-3">
            <table class="table table-striped">
               
                <thead>  
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                                      
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    $total_price=0;
                    $user_id = $_SESSION['id'];
                    $query = "SELECT * FROM items i INNER JOIN user_items ui ON i.id=ui.item_id WHERE ui.user_id='$user_id'";
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        if(mysqli_num_rows($result)==0){
                             echo 'Add items to the cart first!';
                            
                        } else{
                            while ($row = mysqli_fetch_array($result)) {          
        
                        ?>
                    <tr>
                        <td><?php $id = $row['id'];echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><a href="cart-remove.php?id=<?php echo $id; ?>" class="remove_item_link"> Remove</a></td>
                    </tr>
                 <?php 
                    $total_price+=$row['price'];
                 } }?>
                    <tr>
                        <td></td>
                        <td>Total</td>
                        <td><?php echo "Rs. ".$total_price; ?></td>
                        <td><a href="success.php?id='.$row['id'].'" class="btn btn-primary">Confirm Order</a></td>
                    </tr>
                </tbody>                
            </table>
            </div>
        </div>
     </div>
        
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
