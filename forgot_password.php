<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Settings | E-store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" >
        <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/loginmadal.js"></script>
    </head>
    <body style="padding-top: 200px;">
        <?php
      include 'includes/header.php';
        ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-md-5 col-md-offset-3 col-sm-12" id="form-style">
                    <form action="forgot_script.php" method="POST">
                        <div class="form-group">
                            <h3>Enter your Email</h3>
                            <input type="email" name="email" class="form-control" required/>
                            <?php if(isset($_GET['error'])){ ?>
                            <p class="error"><?php echo $_GET['error']; } ?></p>
                          </div>
                        <input type="submit" value="Submit" class="btn btn-success"/>
                    </form>
                    <div>
                        <?php if(isset($_GET['success'])) { ?>
                        <p><?php echo $_GET['success']; } ?> </p>
                    </div>
                </div>
            </div>
        </div>
        <?php 
        include 'includes/footer.php';
        ?>
    </body>
</html>
