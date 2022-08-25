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
    <title>Login</title>
</head>
<body>
<form action="process/register_process.php" method="post">
  <div class="login" style="color:green; margin-top: 50px; text-align: center;" >
    <h1 >Register Here To LOGIN::</h1>

  </div>

  <?php

$alertmsg = isset($_GET['alertmsg'])?$_GET['alertmsg']:'';

if($alertmsg == 1){
echo "<script>alert('Successfully registered your account')</script>";

}
?>

  <div class="name" style=" margin-top: 50px; margin-left:300px; " >
   <b style="font-size: large;"> Name::</b>
    <input type="text" placeholder="Enter Name" name="name" size="70" ; style="height:30px; margin-left:30px;" required>
    </div>

    <div class="username" style=" margin-top: 15px; margin-left:300px; " >
   <b style="font-size: large;"> Username::</b>
    <input type="text" placeholder="Enter Username" name="username" size="70" ; style="height:30px;" required>
    </div>

    <div class="password" style=" margin-top:15px; margin-left:300px; " >
   <b style="font-size: large;"> Password::</b>
    <input type="password" placeholder="Enter Password" name="password" size="70" ; style="height:30px;" required>
    </div>

    <div class="email" style=" margin-top: 15px; margin-left:300px; " >
   <b style="font-size: large;"> Email::</b>
    <input type="email" placeholder="Enter Email" name="email" size="70" ; style="height:30px; margin-left:30px;" required>
    </div>

    <div class="mobile" style=" margin-top: 15px; margin-left:300px; " >
   <b style="font-size: large;"> Mobile::</b>
   <input type="text" name="mobile" size=70; placeholder="Enter conatact number"  maxlength="10"; minlength="9"; style="margin-left:25px; height:30px;" required>
       </div>

    <div class="address" style=" margin-top: 15px; margin-left:300px; " >
   <b style="font-size: large;"> Address::</b>
    <input type="text" placeholder="Enter Address" name="address" size="70" ; style="height:30px; margin-left:15px;" required>
    </div>

    <div class="gender" style=" margin-top: 15px; margin-left:300px; " >
   <b style="font-size: large;"> Gender::</b>
    <input type="radio" name="gender" value="Male" style="margin-left:15px;"><span class = "gender" >Male</span>
        <input type="radio" name="gender" value="female" style="margin-left:45px;" ><span class = "gender" >Female</span>
        <input type="radio" name="gender" value="others" style="margin-left: 45px;"><span class = "gender" >Others</span>
        </div>

        <div class="login12" style=" margin-top: 10px; margin-left:300px; font-size:20px; " >
        Log in an account:: <a href="login.php">LOG IN </a>
 
   </div>
    
    <div class="register" style=" margin-top: 30px; margin-left:300px;  " >
  <input type="submit" name="register" value="Register" style="width: 260px; height: 35px;  font-size: large;background-color: green; "> 
  <input type="reset" name="reset" value="Clear" style="width: 260px; height: 35px;  font-size: large;background-color: gray; ">  </div>

 
  
  
</form> 
</body>
</html>