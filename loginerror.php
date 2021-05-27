<?php
require 'includes/common.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" >
        <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
      
       
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container" id="content">
            <?php if(isset($_GET['error'])){ ?>
            <h3><?php echo $_GET['error']; } ?></h3>
            <a href="index.php" class="remove-link">Back to Home <span class="glyphicon glyphicon-arrow-right"></span></a>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
    
</html>
