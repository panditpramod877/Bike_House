<?php
    include("../database/connection.php");
    include("../include/rider_header.php");
    
    session_start();
    $buyer_id=$_SESSION['id'];  
    
    $bikeid = $_GET['bikeId'];
    
    $query = "SELECT * from bike_sell where id=$bikeid";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $amount= $row['price'];
    $totalAmt = $amount;

   



   if(!isset($_SESSION['book'])){
       $newData = array($buyer_id,$bikeid);
       $book = array();
       array_push($book,$newData);
       $_SESSION['book'] = $book;
      //  print_r($_SESSION['book']);

   }else{
       $book = $_SESSION['book'];
       $newData = array($buyer_id,$bikeid);
       array_push($book,$newData);
       $_SESSION['book'] = $book;
      //  print_r($_SESSION['book']);
   }



?>

<html?>
  <head>
    <title>Booking Page</title>
    <link rel="stylesheet" href="../css/bookpage.css">
    <link rel="stylesheet" href="../css/myheader.css">
    <style>
        .hd{
      font-size: 26px;
      margin-top: 78px;
      text-transform: uppercase;
      color: black;
      margin-left: 66px;
      display: flex;
      text-align: center;
    }
    </style>
  </head>
<body>

<div class="am_heading">
  <h2 class="hd" style="margin:42px; ">Payment Process</h2> 
</div>

<a href="bike_book_process.php">   <button style="margin-left:550px; margin-top:32px; color:white; background-color:black; height:50px; width: 164px; border-radius: 7px 7px; ">Cash On Delivery</button>
    </a>
<form action="https://uat.esewa.com.np/epay/main" class="foresewa" method="POST">

    <?php 

    $pid = rand();
    $success = 'http://localhost/bikehouse/process/bike_book_process.php';
  ?>
    <input value="Pay With Esewa" type="submit" id="esewa" style="margin-left:550px; margin-top:52px; color:white; background-color:green; height:50px; width: 164px; border-radius: 7px 7px;">
    <input value="0" name="txAmt" type="hidden">
    <input value="<?php echo $amount;  ?>" name="amt" type="hidden">
    <input value="<?php echo $totalAmt;  ?>" name="tAmt" type="hidden">
    <input value="0" name="psc" type="hidden">
    <input value="0" name="pdc" type="hidden">
    <input value="EPAYTEST" name="scd" type="hidden">
    <input value="<?php  echo $pid; ?>" name="pid" type="hidden">
    <input value="<?php echo $success ?>" type="hidden" name="su">
    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
    
    

    <button style="margin-left:550px; margin-top:32px; color:white; background-color:purple; height:50px; width: 164px; border-radius: 7px 7px; ">Pay with Khalti</button>
    <button style="margin-left:550px; margin-top:32px; color:white; background-color:black; height:50px; width: 164px; border-radius: 7px 7px; ">Pay with connectIPS</button>
</form>
</body>
</html>