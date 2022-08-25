<?php
require '../include/admin_header.php';
require '../database/connection.php';
$id1=$_GET['id'];

session_start();
$user_id = $_SESSION['id'];
$_SESSION['id1']=$id1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Update</title>
</head>
<body>
<form action="bike_update_process.php" method="post">
  <div class="login" style="color:green; margin-top: 50px; text-align: center;" >
    <h1 >UPDATE BIKE::</h1>

  </div>



  <?php
         $query= " SELECT * FROM `bike_sell` WHERE id='$id1' ";

        $result = $conn->query($query);
       if($result->num_rows>0){ ?>
       
      
           <?php while($row = $result->fetch_assoc()){ ?>
          <?php  $bikename= $row['bikename'];
            $companyname= $row['companyname'];
            $bikecc= $row['bikecc'];
            $bikeprice= $row['price'];
            $bikedescription= $row['bike_description'];
         
          ?>
            
            <?php  } ?>
           </table>
        <?php }else{ ?>
           <h3>No result found</h3>
        <?php }
      ?>

  <?php

$alertmsg = isset($_GET['alertmsg'])?$_GET['alertmsg']:'';

if($alertmsg == 1){
echo "<script>alert('Successfully edit bike')</script>";

}
?>


  <div class="name" style=" margin-top: 50px; margin-left:300px; " >
   <b style="font-size: large;">Bike Name::</b>
    <input type="text"  name="bikename" value="<?php echo "$bikename"   ?>" size="70" ; style="height:30px; margin-left:40px;" required>
    </div>

    <div class="username" style=" margin-top: 15px; margin-left:300px; " >
   <b style="font-size: large;"> Company Name::</b>
    <input type="text" name="companyname" value="<?php echo "$companyname"   ?>" size="70" ; style="height:30px;" required>
    </div>

    <div class="password" style=" margin-top:15px; margin-left:300px; " >
   <b style="font-size: large;">Bike CC::</b>
    <input type="text"  name="bikecc" value="<?php echo "$bikecc"   ?>" size="70" ; style="height:30px; margin-left:60px;" required>
    </div>

    <div class="email" style=" margin-top: 15px; margin-left:300px; " >
   <b style="font-size: large;"> Price::</b>
    <input type="text"  name="price" value="<?php echo "$bikeprice"   ?>" size="70" ; style="height:30px; margin-left:90px;" required>
    </div>

    <div class="description" style=" margin-top: 15px; margin-left:300px; " >
   <b style="font-size: large;"> Bike Description::</b>
   <input type="text"  name="description" value="<?php echo "$bikedescription"   ?>" size="70" ; style="height:70px;" required>
  
   

    

   
      
    
    <div class="register" style=" margin-top: 30px; margin-left:300px;  " >
  <input type="submit" name="register" value="Update Bike" style="width: 260px; height: 35px;  font-size: large;background-color: green; "> 
  <input type="reset" name="reset" value="Clear" style="width: 260px; height: 35px;  font-size: large;background-color: gray; ">  </div>

 
  
  
</form> 

</body>
</html>