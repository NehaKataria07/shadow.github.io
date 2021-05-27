<?php 
include 'includes/common.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Success | E-store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" >
        <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/loginmadal.js"></script>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                <h4 align="center">Thank You for ordering from E-Store. The order shall be delivered to you shortly.</h4>
                <hr><p align="center">To continue Shopping <a href="homepage.php">Click here</a></p>
            </div>
        </div>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
<?php
$user_id = $_SESSION['id'];
$query = "SELECT * FROM user_items";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
while($row = mysqli_fetch_array($result)){    
    $change_query = "UPDATE user_items SET status='Confirmed' WHERE user_id = '$user_id'";    
    $result = mysqli_query($con, $change_query) or die(mysqli_error($con));
}
?>
