<?php

include('../database/connection.php');

 if(isset($_POST)){
   
   $name = $_POST['name'];
     $email=$_POST['email'];
   $mobile =  $_POST['mobile'];
    $address=$_POST['address'];
  
   $message =  $_POST['message']; 
$time=date("Y/m/d/l");
    

   
    $sql ="INSERT INTO `contact`(`name`, `email`, `mobile`, `address`, `message`,`time`) 
    VALUES ('$name','$email',' $mobile','$address','$message','$time')";
   
     if($conn->query($sql)){
        header('Location:../contact.php?alertmsg=1');
     }else{
        echo $conn->error;
       echo "Error Occured";
     }
    }
   

?>
