 <?php session_start();
     if(isset($_COOKIE['remembername'])){
        $username = $con->decryptCookie($_COOKIE['remembername']);
        $userpass = $con->decryptCookie($_COOKIE['rememberpass']);
         echo'<div class="user">
        <ul>
          <li class="name "><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsC6gDMivIfNGXqMF1y1cVs31Z-Lhct2rBpmmrWd-5oygqwE9GNg"  class="img-fluid rounded avata" alt="responsive image"><span class="d-none d-lg-inline-block ">'.$username.'</span></li>
          <li class="message"><i class="fas fa-envelope"></i></li>
          <li class="message"><a href="signout.php"><i class="fas fa-sign-out-alt"></i></a></li>
        </ul>
      </div>';

    } else if(!empty($_SESSION['username'])){
    $name = $_SESSION['username'];
        echo'<div class="user">
        <ul>
          <li class="name "><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsC6gDMivIfNGXqMF1y1cVs31Z-Lhct2rBpmmrWd-5oygqwE9GNg"  class="img-fluid rounded avata" alt="responsive image"><span class="d-none d-lg-inline-block ">'.$name.'</span></li>
          <li class="message"><i class="fas fa-envelope"></i></li>
          <li class="message"><a href="signout.php"><i class="fas fa-sign-out-alt"></i></a></li>
        </ul>
      </div>';
    }else {
      echo'  <div class="login-form"><a href="login.php" class="login-link text-center">Login / Sign up</a></div>';
    }

  
  ?>
