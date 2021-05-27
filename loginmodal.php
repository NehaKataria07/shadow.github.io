<!DOCTYPE html>
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
      <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">LOGIN
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></h3>
      </div>
      <div class="modal-body">
          <form action="login_submit.php" method="POST">
              <p>Don't have an account? <a href="signup.php">Register</a></p>
              <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="Email" required class="form-control">
                   </div>
                   <div class="form-group">
                      <input type="password" name="password" id="password"  class="form-control" required>
                    </div>
                   <button type="submit" id="submitbutton" class="btn btn-primary">Login</button>
          </form>
      </div>
      <div class="modal-footer">  
          <?php if(isset($_GET['error'])){ ?>
          <p class="error"><?php echo $_GET['error']; }?></p>
          <p class="text-left"><a href="forgot_password.php" class="text-left">Forgot password?</a></p>
      </div>
    </div>
  </div>   
    
</div>    
           
        
           
   
   </body>
</html>
