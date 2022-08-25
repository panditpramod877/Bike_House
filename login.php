<?php
require 'include/header.php';  


session_start();
if(isset( $_SESSION['id'] ) && isset($_SESSION['name'])){
  if( $_SESSION['name']=="admin"){
    header("location:process/admin.php");
    
  }
  else {
    header("location:process/rider.php");
  }

}

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
<form action="process/login_process.php" method="post">
  <div class="login" style="color:green; margin-top: 50px; text-align: center;" >
    <h1 >LOGIN TO YOUR ACCOUNT::</h1>
  </div>
  
  <?php

$alertmsg = isset($_GET['alertmsg'])?$_GET['alertmsg']:'';

if($alertmsg == 1){
echo "<script>alert('Sorry, username or password does not match.')</script>";

}

?>
  

  <div class="username" style=" margin-top: 50px; margin-left:300px; " >
   <h2> Username::</h2>
    <input type="text" placeholder="Enter Username" name="uname" size="70" ; style="height:30px;" required>
    </div>

    <div class="pwd" style=" margin-top: 30px; margin-left:300px; " >
   <h2> Password::</h2>
    <input type="password" placeholder="Enter Pasword" name="pword" size="70" ; style="height:30px;" required>
    </div>
    <div class="pwd" style=" margin-top: 30px; margin-left:300px; " >
   <h2> Select User::</h2>
   <select name="usertype" style="width: 520px; height: 35px;" >
              <option value="admin">Admin</option>
              <option value="rider">Buyer</option>
            </select></div>
            <div class="login12" style=" margin-top: 10px; margin-left:300px; font-size:20px; " >
        Don't have an account <a href="register.php">Create now</a>
 
   </div>
    
    <div class="login1" style=" margin-top: 30px; margin-left:300px;  " >
  <input type="submit" name="Login" value="Login" style="width: 260px; height: 35px;  font-size: large;background-color: green; ">  </div>

  

  
  
</form> 
</body>
</html>
