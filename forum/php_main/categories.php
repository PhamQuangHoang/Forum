<?php 
include("config.php");
$con = new Connect("forum");
$con->changetitle("categories");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>categories</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/search.css">
  <link rel="stylesheet" type="text/css" href="css/cat.css">

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
          <div class="hide-login-btn"><i class="fas fa-times"></i></div>
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
  
          <div class="search mr-4">
            <div class="search__wrapper">
              <input type="text" name="" placeholder="Search ..." class="search__field">
              <button type="submit" class="fa fa-search search__icon"></button>
            </div>
          </div>
   <?php include("check_user_php.php"); ?>
 
<section class="content">
  <div class="container rs" >
        <h1 align="center ">Forum</h1>
        <div class="clear"></div>
            
     <div class="row right">
            <?php 
          $sql = "SELECT `cat_id`, `cat_ name`, `cat_des`,`cat_img` FROM `categories` WHERE 1";
           $row= $con->select($sql);
            if($row!=0){
              for($i = 0 ;$i<sizeof($row);$i++){
               echo'  <div class="col-xs-12 col-md-6 cat-view">
                   <div class="card mb-6">
                     <div class="cat-img text-center"><img class="img-fluid cat-img"  src="'.$row[$i]['cat_img'].'"  alt="Responsive image"></div>
                      <div class="card-body text-center bd">
                        <div class="fourty"></div>
                         <h5 class="card-title ">'.$row[$i]['cat_ name'].'</h5>
                          <div class="twenty"></div>
                            <ul class="pagination justify-content-center">
                              <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">100 view</a>
                              </li>
                              <div class="vl"></div>
                              <li class="page-item disabled">
                                <a class="page-link" href="#">100post</a>
                              </li>
                            </ul>
                             
                         <div class="card-text"><p class="card-text d-none d-lg-block">'.$row[$i]['cat_des'].'</p></div>
                         <div class="viewcat"><a href="#" class="btn btn-primary btn-sm  viewcat">View Categories</a></div>
                      </div>
                   </div>
                </div>';
               
      
              }
              
            }


       ?>

     </div>       
     
  </div>
</section>

   <footer>
     
   </footer>

<script>
$(function(){
    $('div.cat-view').hover(function(){
        $('viewcat').toggleClass("d-none");
    },function(){
        $(this).css('display','inline-block');
});
});
</script>


 <section id="footer" class="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          
          <h5>Quick links</h5>
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
      
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
          <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
        </div>
        </hr>
      </div>  
    </div>
  </section>




  <script type="text/javascript" src="js/navbar.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html> 