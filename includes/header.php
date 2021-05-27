
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome | E-store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">       
        <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>
        <?php include 'loginmodal.php'; ?>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar" >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php if(isset($_SESSION['id'])){ ?>
                    <a  href="homepage.php" class="navbar-brand">E-Store</a>
                    <?php } else { ?>
                    <a  href="index.php" class="navbar-brand">E-Store</a>
                    <?php } ?>
                </div>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(isset($_SESSION['id'])){
                        ?>
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    <?php
                    }else{
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#login" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="about_us.php"><span class="glyphicon glyphicon-list-alt"></span> About Us</a></li>
                    <li><a href="contact_us.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
                    <?php
                    }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
        

    </body>
</html>
