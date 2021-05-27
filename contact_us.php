<?php 
include 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact us | E-store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
                <div class="col-md-12" id="contact">
                    <img src="img/tech.png" alt="technical" id="image">
                    <h1>LIVE SUPPORT</h1>                       
                    <h3>24 Hours | 7 days a week | 365 Days a year Live Technical Support</h3>                      
                    <p class="text-justify">E-Store has a strong professional background in providing remote technical support services to companies all around the world. Our tech specialists work with companies across different industries helping them deliver excellent customer experience.Our philosophy is based on effective communication and one-of-a-kind service. That’s why our highly-trained tech agents always stay abreast of the latest technology trends and innovations. </p>
                </div>
            </div>
           
           
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <h2>CONTACT US</h2>
                    <form  action="contact_script.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea rows="6" class="form-control" name="message" required></textarea>
                        </div>
                        <input type="submit" value="submit" class="btn btn-primary">
                    </form>
                    
                </div>
                <div class="col-md-4 col-sm-6">
                    <h2>COMPANY INFORMATION</h2>
                    <p>23 Park Avenue</p>
                    <p>USA</p>
                    <p>Phone: (00) 222 444 666</p>
                    <p>Fax: (00) 000 000 000</p>
                    <p>Email: info@estore.com</p>
                    <p>Follow on: facebook, twitter</p>
                </div>
            </div>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
