<?php 
include 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sign Up | E-store</title>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <img src="img/signup.jpg" alt="" class="img-responsive" style="padding:0px 20px 0px 20px;;">
                </div>
                <div class="col-md-offset-1 col-md-5 col-sm-6">
                    <h2>SIGN UP</h2>
                    <form action="signup_script.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                            
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" required>                            
                        </div>
                        <?php if(isset($_GET['error1'])){ ?>
                             <p class="error"><?php echo $_GET['error1']; }?></p>
                        <?php if(isset($_GET['error2'])){ ?>
                             <p class="error"><?php echo $_GET['error2']; }?></p>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact" name="contact" required>                           
                            
                        </div>
                        <?php if(isset($_GET['error3'])){ ?>
                             <p class="error"><?php echo $_GET['error3']; }?></p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="City" name="city" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" name="address" required>
                        </div>
                        
                        <input type="submit" value="submit" class="btn btn-primary" style="float: right;">
                        
                    </form>
                </div>
            </div>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
          
    </body>
</html>
