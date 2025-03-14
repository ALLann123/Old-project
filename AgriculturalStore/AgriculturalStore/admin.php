<?php
    if(!isset($_SESSION)) 
    {   
        
        session_start(); 
    } 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
        <style>      
body{
    /* The image used */
    background-image: url("images/grapes.jpg");
    height: 70%;

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
</style>
</head>
<body>
   <?php include 'navbar_admin.php'?>
   <br><br>
   <div class="container">
       <div class="row">
           <div class="page-header">
               <h1 style="text-align: center">Administrator Panel</h1>
           </div>
           <div class="col-md-2"></div>
           <div class="col-md-8">
  
               <p>Welcome to Online Agricultural Store System</p>
           </div>
           <div class="col-md-2"></div>
       </div>
   </div>
</body>
</html>