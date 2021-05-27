<?php 
include 'includes/common.php';
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
    <body>
        <?php
      include 'includes/header.php';
        ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
            <h3>Change Password</h3>
            <form action="setting_script.php" method="POST">
                <div class="form-group">
                    <input type="password" name="oldpass" class="form-control" placeholder="Old Password" required/>
                </div>
                <div class="form-group">
                    <input type="password" name="newpass" class="form-control" placeholder="New Password" required/>
                </div>
                <div class="form-group">
                    <input type="password" name="retype" class="form-control" placeholder="Re-type New Password" required/>
                </div>
                <div><?php if(isset($_GET['error'])){ ?>
                <p class="error"><?php echo $_GET['error'];} ?></p>
                </div>
                <input type="submit" value="Change" class="btn btn-primary">
                
            </form>
            <div><?php if(isset($_GET['success'])){ ?>
                <p class="successmsg"><?php echo $_GET['success'];} ?></p>
                </div>
        </div>
            </div>
        </div>
        
        <?php
      include 'includes/footer.php';
        ?>
    </body>
</html>
