<?php
require 'include/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
     body{
      background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
       
     }
   </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Us</title>
</head>
<body>


<form action="process/contactus_process.php" method="post">
  <div class="login" style="color:green; margin-top: 50px; text-align: center;" >
    <h1 >CONTACT US::</h1>
  </div>
  <?php

$alertmsg = isset($_GET['alertmsg'])?$_GET['alertmsg']:'';

if($alertmsg == 1){
echo "<script>alert('Successfully sent message to admin section')</script>";

}
?>

  <div class="name" style=" margin-top: 50px; margin-left:300px; " >
   <b style="font-size: large;"> Name::</b>
    <input type="text" placeholder="Enter Name" name="name" size="70" ; style="height:30px; margin-left:30px;" required>
    </div>

   
    <div class="email" style=" margin-top: 15px; margin-left:300px; " >
   <b style="font-size: large;"> Email::</b>
    <input type="email" placeholder="Enter Email" name="email" size="70" ; style="height:30px; margin-left:30px;" required>
    </div>

    <div class="mobile" style=" margin-top: 15px; margin-left:300px; " >
   <b style="font-size: large;"> Mobile::</b>
    <input type="text" placeholder="Enter Mobile number" name="mobile" size="70" ; style="height:30px; margin-left:20px;" required>
    </div>

    <div class="address" style=" margin-top: 15px; margin-left:300px; " >
   <b style="font-size: large;"> Address::</b>
    <input type="text" placeholder="Enter Address" name="address" size="70" ; style="height:30px; margin-left:15px;" required>
    </div>

    <div class="message" style=" margin-top: 15px; margin-left:300px; " >
   <b style="font-size: large;"> Message::</b>
   <textarea name="message" rows="10" cols="40" style="width:520px; margin-left:12px;" require></textarea>
   </div>

    
    
    <div class="register" style=" margin-top: 30px; margin-left:400px;  " >
  <input type="submit" name="submit" value="Submit" style="width: 260px; height: 35px;  font-size: large;background-color: green; "> 
  <input type="reset" name="reset" value="Clear" style="width: 260px; height: 35px;  font-size: large;background-color: gray; ">  </div>

 
  
  
</form> 




    
</body>
</html>