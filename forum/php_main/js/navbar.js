
$(".navbar-toggler").on("click",function(){
 $(".navmb").toggleClass("showed");
  
    return false;
});
$(".hide-login-btn").on("click",function(){
  $(".navmb").toggleClass("showed");
  
});



$(document).ready(function(){

  $(window).scroll(function(){
    if($(this).scrollTop() > 40){
      $("nav.navbar").addClass("bg-dark");
     	$(".nav-link").addClass("text-light");
    } else{
    	
       $("nav.navbar").removeClass("bg-dark");
      	$(".nav-link").removeClass("text-light");
    }
  });

});



