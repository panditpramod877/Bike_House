<?php
require '../include/admin_header.php';
session_start();
$user_id = $_SESSION['id'];
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
    <title>Bike Sells</title>
</head>
<body>
<form action="bike_sell_process.php" method="post">
  <div class="login" style="color:green; margin-top: 50px; text-align: center;" >
    <h1 >ADD BIKE TO SELL::</h1>

  </div>


  <?php

$alertmsg = isset($_GET['alertmsg'])?$_GET['alertmsg']:'';

if($alertmsg == 1){
echo "<script>alert('Successfully added bike')</script>";

}
?>


  <div class="name" style=" margin-top: 50px; margin-left:300px; " >
   <b style="font-size: large;">Bike Name::</b>
    <input type="text" placeholder="Enter Bike Name" name="bikename" size="70" ; style="height:30px; margin-left:40px;" required>
    </div>

    <div class="username" style=" margin-top: 15px; margin-left:300px; " >
   <b style="font-size: large;"> Company Name::</b>
    <input type="text" placeholder="Enter Comapany name" name="companyname" size="70" ; style="height:30px;" required>
    </div>

    <div class="password" style=" margin-top:15px; margin-left:300px; " >
   <b style="font-size: large;">Bike CC::</b>
    <input type="text" placeholder="Enter CC of Bike" name="bikecc" size="70" ; style="height:30px; margin-left:60px;" required>
    </div>

    <div class="email" style=" margin-top: 15px; margin-left:300px; " >
   <b style="font-size: large;"> Price::</b>
    <input type="number" placeholder="Enter Price of bike" name="price" min="1" oninput="validaty.valid||(value'');" size="70" ; style="height:30px; margin-left:90px;" required >
    </div>

    <div class="description" style=" margin-top: 15px; margin-left:300px; " >
   <b style="font-size: large;"> Bike Description::</b>
  <textarea name="description"  cols="53" rows="8" required></textarea></div>

    <div class="email" style=" margin-top: 15px; margin-left:300px; " >
   <b style="font-size: large;"> Bike Picture::</b>
   <input type="file" name="bikepicture"  id="fileToUpload" style="margin-left:0px; width: 264px; height:30px;" required>
   </div>

    

   
      
    
    <div class="register" style=" margin-top: 30px; margin-left:300px;  " >
  <input type="submit" name="register" value="Add Bike" style="width: 260px; height: 35px;  font-size: large;background-color: green; "> 
  <input type="reset" name="reset" value="Clear" style="width: 260px; height: 35px;  font-size: large;background-color: gray; ">  </div>

 
  
  
</form> 

</body>
</html>