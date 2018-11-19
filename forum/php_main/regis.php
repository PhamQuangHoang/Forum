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


</head>
<body>
  
    
    
       
    <nav class="navbar navbar-expand-lg  ">
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
  
 <?php 

include("config.php");
$con = new Connect("forum");
$con->changetitle("Register");
    
    
?>
      <div class="content">
              <div class="container-fluid bg-light py-3">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mx-auto">
                            <div class="card card-body">
                                <h3 class="text-center mb-4">Sign-up</h3>
                              <form action="" method="post" accept-charset="utf-8">
                                  <div class="alert alert-danger">
                                    <a class="close font-weight-light" data-dismiss="alert" href="#">×</a><span>&nbsp;<?php 
                                    $errormsg = array();
                                        if(isset($_POST['regis'])){
                                            if(isset($_POST['username'])){
                                                 if(!ctype_alnum($_POST['username'])){
                                                    $errormsg[]='the username can only contain letters ';
                                                }
                                                if(strlen($_POST['username'])>20){
                                                    $errormsg[]='your username have more than 20 character';
                                                }
                                            }
                                            if(isset($_POST['password'])){
                                                if($_POST['password']!=$_POST['password_cf']){
                                                    $errormsg[]='the password does not math ';
                                                }
                                            }
                                            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                                                  $errormsg[]= $_POST['email'] ."is  not a valid email address";
                                                }

                                           if(!empty($errormsg)){
                                      
                                                foreach ($errormsg as $key => $value) {
                                                        echo "$value"; echo'</br>&nbsp;
                                                        ';     
                                                }
                                            }else{
                                                $sql = "INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_email`, `Date`, `user_lever`,`question`) VALUES (NULL, '".$_POST['username']."', '".md5($_POST['password'])."', '".$_POST['email']."', NOW(), 1 , '".$_POST['quest'].":".$_POST['answer']."' );";
                                               if($con->insert($sql)){
                                                echo 'New account has been added </br> you can login now ';
                                                echo'<a href="login.php">login</a>';
                                               }else {
                                                echo "regis fail";
                                               }
                                            }
                                       }

                                     ?></span>
                                </div>
                                <fieldset>
                                    <div class="form-group has-error">
                                        <input class="form-control input-lg" placeholder="E-mail Address" name="email" autocomplete="off" type="text">
                                    </div>
                                     <div class="form-group has-error">
                                        <input class="form-control input-lg" placeholder="User name" name="username" autocomplete="off" type="text">
                                    </div>
                                    <div class="form-group has-success">
                                        <input class="form-control input-lg" placeholder="Password" name="password" value="" type="password">
                                    </div>
                                    <div class="form-group has-success">
                                        <input class="form-control input-lg" placeholder="Confirm Password" name="password_cf" value="" type="password">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control input-lg" name="quest">
                                            <option selecterd="" value="color">color</option>
                                            <option selecterd="" value="pet">pet</option>
                                            <option selecterd="" value="song">song</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control input-lg" placeholder="Sequrity Answer" name="answer" value="" type="text">
                                    </div>
                                    <div class="checkbox">
                                        <label class="small">
                                            <input name="terms" class="" id="myCheck" onclick="checkAC();" type="checkbox"><span class="ml-1">I have read and agree to the <a href="#">terms of service</a></span>
                                        </label>
                                    </div>
                                    <input class="btn  btn-lg btn-primary btn-block" on_click="error_notice();" id="regisbtn" name="regis" value="Sign Me Up" type="submit" disabled>
                                </fieldset>  
                                
                              </form>
                            </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                function checkAC(){
                  // Get the checkbox
                      var checkBox = document.getElementById("myCheck");
                      // Get the output text
                      var btn_regis = document.getElementById("regisbtn");

                      // If the checkbox is checked, display the output text
                      if (checkBox.checked == true){
                         btn_regis.disabled = false;
                      } else {

                         btn_regis.disabled = true;
                      }
                }
                


            </script>
              


</div>


<?php  


    include("footer.php")
       

?>
    

