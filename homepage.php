<?php 
include 'includes/common.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Home Page | E-store</title>
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
        <div class="container" id="hello">
            <?php if(isset($_SESSION['email'])){ ?>
            <h3><span class="glyphicon glyphicon-user"></span><?php echo " Hello, ".$_SESSION['email'] ;?></h3>
                <?php } ?>
        </div>
        <div class="container-fluid">
            <div class="row item-list">                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">                       
                        <img src ="img/1.jpg" alt=""> 
                        <div class="caption">
                            <h3 class="text-center">Mi 10i 5G </h3>                           
                        <p>Pacific Sunrise, 6GB RAM, 128GB Storage - 108MP Quad Camera | Rs. 29000</p>
                        <a href="cart-add.php?id=1" name="add" class="btn btn-block btn-primary">Add to cart</a>   
                        </div>
                                                       
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">                       
                        <img src ="img/4.jpg" alt=""> 
                        <div class="caption">
                            <h3 class="text-center">Nokia 3.2</h3>                           
                        <p>Black, 4GB RAM, 128GB Storage - 32MP Quad Camera | Rs. 8900</p>
                        <a href="cart-add.php?id=2" name="add" class="btn btn-block btn-primary">Add to cart</a>    
                        </div>
                                                       
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">                       
                        <img src ="img/2.jpg" alt=""> 
                        <div class="caption">
                            <h3 class="text-center">One Plus </h3>                           
                        <p>Black, 12GB RAM, 512GB Storage - 108MP Quad Camera | Rs.50000</p>
                        <a href="cart-add.php?id=3" name="add" class="btn btn-block btn-primary">Add to cart</a>     
                        </div>
                                                       
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">                       
                        <img src ="img/3.jpg" alt=""> 
                        <div class="caption">
                            <h3 class="text-center">Oppo A15s</h3>                           
                        <p>Matte Blue, 4GB RAM, 128GB Storage - 32MP Dual Camera | Rs. 8499</p>
                        <a href="cart-add.php?id=4" name="add" class="btn btn-block btn-primary">Add to cart</a>  
                        </div>
                                                       
                    </div>
                    </div>
                </div>
            
            <div class="row item-list">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">                       
                        <img src ="img/5.jpg" alt=""> 
                        <div class="caption">
                            <h3 class="text-center">Samsung M12</h3>                           
                        <p>Ocean blue, 4GB RAM, 64GB Storage - 48MP Quad Camera | Rs. 10999</p>
                       <a href="cart-add.php?id=5" name="add" class="btn btn-block btn-primary">Add to cart</a>  
                        </div>
                                                       
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">                       
                        <img src ="img/6.jpg" alt=""> 
                        <div class="caption">
                            <h3 class="text-center">Vivo U1</h3>                           
                        <p>Black, 3GB RAM, 64GB Storage - 16MP Quad Camera | Rs. 9900</p>
                       <a href="cart-add.php?id=6" name="add" class="btn btn-block btn-primary">Add to cart</a>  
                        </div>
                                                       
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">                       
                        <img src ="img/7.jpg" alt=""> 
                        <div class="caption">
                            <h3 class="text-center">Samsung Note 10 Lite</h3>                           
                        <p>Pearl White, 8GB RAM, 128GB Storage - 64MP Quad Camera | Rs.27990</p>
                        <a href="cart-add.php?id=7" name="add" class="btn btn-block btn-primary">Add to cart</a>  
                        </div>
                                                       
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">                       
                        <img src ="img/8.jpg" alt=""> 
                        <div class="caption">
                            <h3 class="text-center">Realme Narzo</h3>                           
                        <p>Green, 6GB RAM, 128GB Storage - 64MP Dual Camera | Rs. 19900</p>
                       <a href="cart-add.php?id=8" name="add" class="btn btn-block btn-primary">Add to cart</a>  
                        </div>
                                                       
                    </div>
                    </div>
                </div>
            <div class="row item-list">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">                       
                        <img src ="img/9.jpg" alt=""> 
                        <div class="caption">
                            <h3 class="text-center">Lava A9</h3>                           
                        <p>Ivory White Dual sim | Rs. 1580</p>
                       <a href="cart-add.php?id=9" name="add" class="btn btn-block btn-primary">Add to cart</a>  
                        </div>
                                                       
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">                       
                        <img src ="img/10.jpg" alt=""> 
                        <div class="caption">
                            <h3 class="text-center">Nokia 2720 Flip</h3>                           
                        <p>Black, 4GB RAM,Dual sim | Rs. 8900</p>
                       <a href="cart-add.php?id=10" name="add" class="btn btn-block btn-primary">Add to cart</a>  
                        </div>
                                                       
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">                       
                        <img src ="img/11.jpg" alt=""> 
                        <div class="caption">
                            <h3 class="text-center">Lava Flip</h3>                           
                        <p>Lava Flip blue, Dual Sim | Rs.1683</p>
                      <a href="cart-add.php?id=11" name="add" class="btn btn-block btn-primary">Add to cart</a>  
                        </div>
                                                       
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">                       
                        <img src ="img/12.jpg" alt=""> 
                        <div class="caption">
                            <h3 class="text-center">Micromax x186</h3>                           
                        <p>Maroon, Dual sim | Rs. 1149</p>
                        <a href="cart-add.php?id=12" name="add" class="btn btn-block btn-primary">Add to cart</a>  
                        </div>
                                                       
                    </div>
                    </div>
                </div>
            
            </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
