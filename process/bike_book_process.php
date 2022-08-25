<?php


include('../database/connection.php');
session_start();
$data = $_SESSION['book'];
foreach($data as $arr){
   $buyer_id = $arr['0'];
   $biker_id = $arr['1'];
   $status="pending";

$sql ="INSERT INTO `bike_buy`( `buyerid`,`status`,`bike_id`) 
    VALUES ('$buyer_id','$status','$biker_id')";
  
     if($conn->query($sql)){
        header('Location:order_bike_self.php?alertmsg=1');
       
     }else{
        echo $conn->error;
       echo "Error Occured";
     }
   }
    
?>

          