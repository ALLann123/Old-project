<?php
    $connection= mysqli_connect("localhost","root","","agriculturalstore");

    session_start();

    $sql= "SELECT * FROM `cereals`";
    $res=mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Cereals</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    
</head> 

<body  > 
  
   <div id="myDiv">
  
   <?php include 'navbar.php'; ?>
   <br><br><br>
   <div class="container">
      <?php
        if(mysqli_num_rows($res)>0){ ?>
    
      <div class="container">
         <div class="row">
             <div class="col-md-3"></div>
             <div class="col-md-6 foo">
                 <div class="page-header">
                    <h1 class="animated bounceIn" style="text-align: center;">Cereals List</h1>      
                  </div> 
                  <!--
                  <table class="table">
                    <thead>
                        <th>Cerealtype</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>ItemPhoto</th>
                        <th>Operation</th>
                        
                    </thead>  

                    <?php while($row=mysqli_fetch_assoc($res)) {  ?>
                    <tbody>
                        <tr>
                            <td><?php echo $row["Cerealtype"] ?> </td>
                             <td><?php echo $row ["Description"] ?></td>
                            <td> <?php echo $row["Price"] ?></td>
                            <td><?php echo $row ["ItemPhoto"] ?></td>
                         
                             <td><a class="btn btn-danger" href="deletecereal.php=<?php echo $row['driverid']; ?>">Delete</a></td>
                        </tr>
                    </tbody> 
                <?php } }?>
                </table>
            -->
             </div>
             <div class="col-md-3"></div>
         </div>
          
      </div>  
       
   </div>
    </div> 
    
 <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
      <div class="col-md-12">
  <div class="column" style="background-color:#aaa;">
    <h2>Millet</h2>
    <img src="images/Millet.jpg">
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <link rel="stylesheet" type="text/css" href="style.css">
    <h2>Wheat</h2>
     <img src="images/wheat.jpg">

    <p>Some text..</p>
  </div>
</div>
  <div class="column" style="background-color:#ccc;">
    <link rel="stylesheet" type="text/css" href="style.css">
    <h2>Rice</h2>
     <img src="images/Rice.jpg">
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#ddd;">
    <link rel="stylesheet" type="text/css" href="style.css">
    <h2>Maize</h2>
     <img src="images/Maize.jpg">
    <p>Some text..</p>
  </div>
</div>  

   
    
</body>
</html>