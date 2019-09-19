<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LOGIN PAGE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    
    
    <body>
        <section>
            <img src="https://res.cloudinary.com/dge5lnpa8/image/upload/v1568648586/output-onlinejpgtools_copy_nejdse.png" class="animated bounce infinite mx-auto d-block img-fluid" alt="earth logo">
        </section>
        
        <form action="login.php" class="needs-validation" novalidate autocomplete="on" method="post">
            <?php include('errors.php'); ?>
          <div class="form-group">
            <div style="max-width:400px;margin:auto"> 
                    <div class="input-icons"> 
                        <i class="fa fa-user icon fa-2x"></i> 
                        <input class="input-field" type="text" name="username" placeholder="Username" minlength=4 required> 
                        <i class="fa fa-eye-slash icon fa-2x"></i> 
                        <input class="input-field" type="password" name="password" placeholder="Password"  minlength=6 required>  
                        <input id="button" class="input-field" type="submit" value="SIGN IN" name = "login_user"> 
                        <p>Don't have an account? 
                        <a href="register.php"   >SIGN UP</a>
                        </p>
                    </div> 
                </div>
            </div>
        </form>
    </body>
</html>