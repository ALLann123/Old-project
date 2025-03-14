<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $connection= mysqli_connect('localhost','root','','agriculturalstore');


    $username= $_SESSION['username'];
    //echo $username;
    
    $query= "SELECT  `first_name`, `last_name`, `email` FROM `user` WHERE username='$username'";
    $result= mysqli_query($connection,$query);
    
    $row= mysqli_fetch_assoc($result);
    //$name= $row['first_name']." ". $row['last_name'];
   // echo $name;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <?php include 'navbar.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1 style="text-align:center;">Order</h1>
                 <?php //echo $msg; ?>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form class="animated bounce" action="buyaction.php" method="post">
                   
                    <div class="input-group">
                      <span class="input-group-addon"><b>Name</b></span>
                      <input id="name" type="text" class="form-control" name="name" value="<?php echo $row['first_name']." ". $row['last_name']; ?>"  required>
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Item</b></span> &nbsp;
                      <label><input type="radio" name="type" value="Cereal">Cereal</label> &nbsp;
                      <label><input type="radio" name="type" value="Vegetable">Vegetable</label>
					  <label><input type="radio" name="type" value="Fruits and Nuts">Fruits and Nuts</label> &nbsp;
                      <label><input type="radio" name="type" value="Legumes">Legumes</label>
                    </div>
                    <br>                    <div class="input-group">
                      <span class="input-group-addon"><b>Date of Purchase</b></span>
                      <input id="req_date" type="text" class="form-control" name="req_date" placeholder="Day of purchase" required>
                      <input type="text" name="req_time" id="req_time" class="form-control"/>
                      
                    </div>
                    
                    <script>
                      $( function() {
                        $( "#req_date" ).datepicker();
                        $("#req_time").wickedpicker();
                        
                      } ); 
                        
                        
                        
                    </script> 
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Date of Delivery</b></span>
                      <input id="return_date" type="text" class="form-control" name="return_date" placeholder="Day of Delivery" required>
                      <input type="text" name="return_time" id="return_time" class="form-control"/>
                    </div>
                    
                    <script>
                      $( function() {
                        $( "#return_date" ).datepicker();
                        $( "#return_time" ).wickedpicker();
                      } );
                    </script>
 
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Email</b></span>
                      <input id="email" type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Mobile</b></span>
                      <input id="mobile" type="text" class="form-control" name="mobile" placeholder="Mobile No" required>
                    </div>
                    <br>
                    
                    <input type="hidden" name="username" value="<?php echo $username; ?>">
                    
                    <div class="input-group">
                        <input type="submit" name="submit" class="btn btn-success">
                    </div>
                     
                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
</script>  
</body>
</html>