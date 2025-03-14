<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    

    $connection= mysqli_connect('localhost','root','','agriculturalstore');
    $msg= "" ;
    
    if(isset($_POST['submit'])){
        $VegetableType= $_POST['VegetableType'];
        $Quantity= $_POST['Quantity'];
        $Price= $_POST['Price'];
       
        
        
        //move_uploaded_file($_FILES['file']['tmp_name'],"picture/".$_FILES['file']['name']); 
        $res=false;
        $insert_query="INSERT INTO `vegetables`(`VegetableType`, `Quantity`, `Price`) VALUES ('$VegetableType','$Quantity','$Price')";
        
        $res= mysqli_query($connection,$insert_query);
            
        if($res==true){
            $msg= "<script language='javascript'>
                            Vegetable     swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
        }
        
    }
    
    //$msg="";

    
        
?>
<!DOCTYPE html>
<html>
<head>
    <title>New Vegetable</title>
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
<<?php include 'navbar_admin.php'; ?>
<br>
<div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center;">Add a vegetable </h1>
            <?php echo $msg; ?>
      </div> 
       <div class="col-md-3">
       </div>
        <div class="col-md-6 animated bounceIn"> 
                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                
                <div class="input-group">
                  <span class="input-group-addon"><b>VegetableType</b></span>
                  <input id="VegetableType" type="text" class="form-control" name="VegetableType" placeholder="VegetableType" required>
                </div>
                <br>
                 <div class="input-group">
                  <span class="input-group-addon"><b>Quantity</b></span>
                  <input id="Quantity" type="text" class="form-control" name="Quantity" placeholder="Quantity" required>
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Price</b></span>
                  <input id="Price" type="text" class="form-control" name="Price" placeholder="Price" required>
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><b>ItemPhoto</b></span>
                  <input id="ItemPhoto" type="file" class="form-control" name="ItemPhoto" placeholder="ItemPhoto" >
                </div>
                <div class="input-group">
                  <input type="submit" name="submit" class="btn btn-success">
                  
                </div>

                
</form>
</body>
</html>