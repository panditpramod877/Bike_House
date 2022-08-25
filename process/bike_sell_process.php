<?php
require '../database/connection.php';
session_start();
$user_id = $_SESSION['id'];

if(isset($_POST)){
   
    $bikename = $_POST['bikename'];
    $comapnyname = $_POST['companyname'];
    $bikecc  = $_POST['bikecc'];
     $price=$_POST['price'];
     $bpic =  $_POST['bikepicture'];
     $bikedescription=$_POST['description'];
  
    
     $sql ="INSERT INTO `bike_sell`(`bikename`, `companyname`, `bikecc`, `price`,`bikepicture`, `admin_id`,`bike_description`)
      VALUES (' $bikename ','$comapnyname',' $bikecc','$price','$bpic','$user_id','$bikedescription')";
    
      if($conn->query($sql)){
         header('Location:sell_bike.php?alertmsg=1');
      }else{
         echo $conn->error;
        echo "Error Occured";
      }
     }
    
 

?>