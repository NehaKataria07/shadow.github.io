<!DOCTYPE html>
<html>
        
    <head>
        <title>footer</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">       
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">  
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
        <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/loginmodal.js"></script>
    </head>
  
    <body>
        <footer>
                <div class="container-fluid">
                <div class="row">
                    <div class ="col-md-3 col-md-offset-1 col-sm-5 col-sm-offset-1">
                        <h3>Information</h3>                        
                        <a href ="about_us.php" class="remove-link">About Us</a><br>
                        <a href ="contact_us.php" class="remove-link">Contact Us</a>
                        
                    </div>
                    <div class ="col-md-3 col-md-offset-1 col-sm-5 col-sm-offset-1">
                        <h3>My Account</h3>
                        <?php if(isset($_SESSION['id'])){ ?>
                        <a href="settings.php" class="remove-link">Settings</a><br>
                        <a href="logout.php" class="remove-link">Logout</a><br>                        
                        <?php } else { ?>
                        <a data-toggle="modal" href="#login" class="remove-link">Login</a><br>
                        <a href ="signup.php" class="remove-link">Sign up</a>
                        <?php } ?>
                    </div>
                    <div class ="col-md-3 col-md-offset-1 col-sm-5 col-sm-offset-1">
                        <h3>Contact Us</h3>                        
                        <p>Contact : +91-123-000000</p>
                    </div>
                </div>
                </div> 
        </footer>
        
    </body>
</html>