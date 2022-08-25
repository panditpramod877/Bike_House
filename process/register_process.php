<?php

include('../database/connection.php');
session_start();
$selfname=$_SESSION['name'];

 if(isset($_POST)){
   
   $name = $_POST['name'];
   $username = $_POST['username'];
   $password  = $_POST['password'];
    $email=$_POST['email'];
   $mobile =  $_POST['mobile'];
    $address=$_POST['address'];
  
   $gender =  $_POST['gender']; 

   $usertype = "rider";
    
$loginname=$_SESSION[$name];
   
    $sql ="INSERT INTO `information`( `name`, `username`, `password`, `email`, `mobile`, `address`, `gender`, `usertype`) 
    VALUES (' $name','$username','$password',' $email','$mobile','$address',' $gender','$usertype')";
   
     if($conn->query($sql)){
        header('Location:../register.php?alertmsg=1');
     }else{
        echo $conn->error;
       echo "Error Occured";
     }
    }
   

?>
