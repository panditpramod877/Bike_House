<?php
require '../database/connection.php';


if(isset($_POST)){
$bikere=$_POST['bikename'];
$companyre=$_POST['companyname'];
$ccre=$_POST['bikecc'];
$pricere=$_POST['price'];
$desre=$_POST['description'];




session_start();
$user_id = $_SESSION['id'];
$id1=$_SESSION['id1'];

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
   

  <?php

$query="UPDATE `bike_sell` SET 

`bikename`='$bikere',
`companyname`='$companyre',
`bikecc`='$ccre',
`price`='$pricere',
`bike_description`='$desre' WHERE id='$id1'";

	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
    header('Location:edit_bike.php');



?>

  </div>
<?php }
?>