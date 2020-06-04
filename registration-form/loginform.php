<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- START LOGIN FORM -->
    <div class="login">
      <h2 class="text-center">
        S<span>amara</span>
        <img src="images/imageicon.jpg">
      </h2>
      <div class="container">
        <div class="row">
          <div class="imageform col-md-6">
            <img src="images/imagelogin.jpeg" alt="imageform" class="pull-right img-responsiveidth" >
          </div>
          <div class="contentform col-md-6 col-xs-12">
            <form>
              <h4>welcome back, continue your successful brand.</h4>
              <div class="form-group">
                 <input type="email"    placeholder="Email" name="email" class="form-control emails" >
                 <i class="fa fa-check-circle"></i>
                 <span class="alerts">* Email not valid.</span>
               </div>
               <div class="form-group">
                  <input type="password" placeholder="Password" name="password" class="form-control" >
                  <span class="alerts pull-right"> Forget password?</span>
               </div>
              <input type="submit"    value="Login" class="btn btn-success" >
              <p class="pull-right">Need an account | <a href="signupform.php"> Sign up</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END LOGIN FORM -->
    <script src="js/jquery.js"></script>
    <script src="js/pwstrength-bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
<?php
