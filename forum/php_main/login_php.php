<?php 
include("config.php");
$con = new Connect("forum");
$con->changetitle("login");
    // if(isset($_COOKIE['remembername'])){
    //     $username = $con->decryptCookie($_COOKIE['remembername']);
    //     $userpass = $con->decryptCookie($_COOKIE['rememberpass']);
    //      $sql ="SELECT count(*) as countuser  FROM `users` WHERE user_name = '".$username."' AND user_pass ='".$userpass."'  ";
    //        //$row = array();
    //         $row= $con->select($sql);
    //         if($row!=0){
    //             if($row[0]['countuser'] > 0){
    //                  $_SESSION['userpass']=$userpass;
    //                  $_SESSION['username']=$username;
    //                  header("location:categories.php");
    //             }
    //         }
    // }
    //submit 
    if(isset($_POST['signin'])){
        $uname = mysqli_real_escape_string($con->conn,$_POST['user_name']);
        $password = mysqli_real_escape_string($con->conn,$_POST['pass_word']);

        if($uname!= "" and $password!=""){
            $sql ="SELECT count(*) as countuser,user_name,user_pass  FROM `users` WHERE user_name = '".$uname."' AND user_pass ='".$password."'  ";
            $row= $con->select($sql);
            if($row!=0){
              if($row[0]['countuser']>0){
                    $user_pass=$row[0]['user_pass'];
                    $user_name=$row[0]['user_name'];
                    if(isset($_POST['remember-me'])){
                        $uname = $con->encryptCookie($user_name);
                        $upass = $con->encryptCookie($user_pass);
                        setcookie("remembername",$uname,time() + (86400 * 30));
                        setcookie("rememberpass",$upass,time() + (86400 * 30));
                    }

                    $_SESSION['userpass']=$user_pass;
                    $_SESSION['username']=$user_name;
                     echo'  <div class="row justify-content-center"><div class="col-md-4 text-center alert alert-danger">
                                    <a class="close font-weight-light" data-dismiss="alert" href="#">×</a>login succes!!!
                       </div>
                     </div>';
                    header("Location: categories.php");
                    exit;
              }else{
                echo'  <div class="row justify-content-center"><div class="col-md-4 text-center alert alert-danger">
                            <a class="close font-weight-light" data-dismiss="alert" href="#">×</a>invalid username or password !!!
                       </div>
                     </div>';
       }
            }


        }    
    }

 ?>