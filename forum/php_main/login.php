<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="title"></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/search.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  

</head>
<body>
  
    
    
      
    <nav class="navbar navbar-expand-lg    ">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler " type="button" >
          <span class="navbar-toggler-icon bt"><i class="fas fa-bars nav-link " style="font-size: 30px;"></i></span>
        </button>


        <div class="collapse navbar-collapse" >
          <ul class="navbar-nav w-100 justify-content-end">
            <li class="nav-item active">
              <a class="nav-link link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="#">Forum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="#">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="#">Contact</a>
            </li>


          </ul>
          </div>
      <div class="navmb">
            <div class="hide-login-btn"><i class="fas fa-times"></i>
            </div>
         <ul class="navbar-navmb">
            <li class="navmbli ">
              <a class="ads" href="#">Home</a>
                <hr>
            </li>

            <li class="navmbli">
              <a class="ads" href="#">Forum</a>
                <hr>
            </li>
            <li class="navmbli">
              <a class="ads" href="#">about</a>
                <hr>
            </li>
            <li class="navmbli">
              <a class="ads" href="#">Contact</a>
            </li>
          </ul>     

       </div>
  </nav>
  
 <?php  session_start();
    include("login_php.php");
?>
    <div class="container">
        <div class="card card-container ">
            <img id="profile-img" class="profile-img-card" src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" action="">
                <span id="reauth-email" class="reauth-email"></span>
                <div class="user-input"><input type="text" id="inputEmail" name="user_name" class="form-control" placeholder="Email address"
                 value="<?php
                  if(isset($_COOKIE['remembername'])) {
                    echo $con->decryptCookie($_COOKIE['remembername']);
                  }


                ?>" required autofocus></div>


                <div class="password-input"><input type="password" id="inputPassword" name="pass_word" class="form-control" placeholder="Password"
                   value="<?php
                  if(isset($_COOKIE['rememberpass'])) {
                    echo $con->decryptCookie($_COOKIE['rememberpass']);
                  }

                ?>"
                 required></div>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" name="remember-me" value="remember-me"  <?php
                  if(isset($_COOKIE['remembername'])) {
                    echo "checked";
                  }
                     ?> 
                  > Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" name="signin" type="submit">Sign in</button>
            </form>
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
            <a href="regis.php" class="forgot-password">
                Do not have accounts Regis here !!!
            </a>
        </div>
    </div>



<?php  


    include("footer.php")
       

?>
    
