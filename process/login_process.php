<?php
 if(isset($_POST)){
   $uname =  $_POST['uname'];
   $pass  = $_POST['pword'];
   $usertype=$_POST['usertype'];

   
   include('../database/connection.php');

  
   session_start();
   $_SESSION['user']=$uname;
   $_SESSION['usertype']=$usertype;
   
     $q3 = "SELECT * FROM `information` WHERE username='$uname' AND password='$pass' AND usertype='$usertype' " ; 
     $result3 =$conn->query($q3);
     $row = $result3 -> fetch_array(MYSQLI_ASSOC);
      $_SESSION['id'] = $row['id'];
      $_SESSION['name']=$row['name'];


      
      if($row){
        if($usertype == "rider"){
    
          header('Location:rider.php');
         } 
         
         else{
          header('Location:admin.php');
         }
        }
        else{
        header('Location:../login.php?alertmsg=1');
       
        }
      

      

      
      
    }
   ?>
 