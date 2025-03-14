<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','agriculturalstore'); 

   $sql="DELETE FROM `vegetables` WHERE VegetableType='$id'";
    echo $sql;
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: vegetables.php");
   }
   
?>
