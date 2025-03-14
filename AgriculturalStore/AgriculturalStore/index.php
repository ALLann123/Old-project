<?php 
    $connection=mysqli_connect("localhost","root","","agriculturalstore");

    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Online Agricultural Store System</title>
    <style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    

 
</head> 
<style>
    
.parallax {
    /* The image used */
    background-image: url("images/pawpaw.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 700px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
    .parallax1{
    /* The image used */
	    background-image: url("images/grapes2.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 700px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    } 
    .parallax2{
    /* The image used */
    background-image: url("images/apples.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 700px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    } 
    
    .navbar-fixed-top.scrolled {
       background-color: ghostwhite;
      transition: background-color 200ms linear;
    }

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onLoad="myFunction()"> 
    </div>     <div class="parallax foo">
       <?php include 'navbar.php';?>
    
        <div class="hero-text" style="font-size:50px text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: black;">
           
            <h1 class="animated rubberBand" >Online Agricultural Store System</h1>
            <p>A management system where you can easily manage Agricultural Items</p>
            
            <?php if(isset($_SESSION['username'])==true) { ?>
            <a class="btn btn-success" style="text-align: center" href="buy.php">Order an item</a>
            
            <?php } else{  ?>
            <a class="btn btn-success" style="text-align: center" href="login.php">Login To Order an Item</a> 
            <?php } ?>
            
          </div>
    </div>                 
          <div class="row">
              <div class="col-md-6 foo">
                <img src="images/Ovacado.jpg" class="img-responsive" >  
              </div>
              </div>
          </div>       
        </div>
        
        <br>
        <div class="page-header">
            <h1 style="text-align: center">Cereals</h1> 
			<img src="images/cereal.jpg" class="img-responsive" >     
        </div>
        <div class="parallax1"></div>
        <div id="driver" class="container">
          
          <div class="row">
              <div class="col-md-12">
                  <p style="font-size: 20px;">The ovacado fruits adds benefits to the body.Hence recommended </p>
                  
              </div>
          </div>
               
        </div>
        
        
        <div id="Legumes" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Legumes </h1>      
          </div> 
          <div class="parallax2"></div>
              <div class="col-md-6"> 
              </div>
              <div class="col-md-6 foo1">
                  <p style="font-size:20px;text-align:center;"><b>The Best Online Agricultural Services</b></p>
              </div>
              
          </div>       
        </div>
        
        
          
          <p></p>      
                
        </div>  
        
        <footer style="background-color: #2f2f2f;
          color: #fff; padding-top: 70px;
          padding-bottom: 70px;" class="container-fluid text-center">
                <h1 style="text-align:center">All rights reserved</h1> 
        </footer>
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".parallax");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
    </script>    
  
  
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
    
</body>
</html>