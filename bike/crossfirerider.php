<?php
require '../include/rider_header.php';
require '../database/connection.php';
?>
<html>

<head>
    <link rel="stylesheet" href="../../css/style.css">
    <title>Book Bike</title>
    <style>
        /* body{
            background-color: #0E4D92;
        } */

    .out>img{
        height:400px;
        width:50%;
    }
    .info{
        float:right;
        margin-right:300px;
        margin-top:150px;
        font-size:large;
    }
    .description{
        margin-left:150px;
        font-size:large;
        margin-right:150px;
    }
    </style>
</head>
</html>
<form action="bike_book_process.php" method="POST">
    
<?php
 session_start();
 
        $query = "SELECT * FROM `bike_sell`where companyname='Crossfire'";
        
     
        $result = $conn->query($query);


       if($result->num_rows>0){ ?>
       
       <h2>AVAILABLE BIKE INFORMATION</h2>
         

       
   
           <?php while($row = $result->fetch_assoc()){ ?>
        
<div class="out" >
<?php

           echo "<img src='../image/".$row['bikepicture']." ' >";   
           ?>
           <div class="info">
           <br> Bike name: <span> <?php echo $row['bikename']; ?></span>
     <br> Company name: <span> <?php echo $row['companyname']; ?></span>

     <br> Bike CC: <span> <?php echo $row['bikecc']; ?></span>

  <br> Bike Price: <span> <?php echo $row['price']; ?></span>
    <br>
    <br>
    <?php $bike_id=$row['id'];
       
   
   $_SESSION['bikeid']=$bike_id;  
    
?>
    

    <a href="../process/esewa.php?bikeId=<?php echo $bike_id; ?>" style="font-size:large; background-color:green;color:white;padding:10px;">BOOK NOW </a>

           </div>
         
           </div>
          <div class="description">
<?php echo $row['bike_description']; ?>
<br>
<br>
          </div>

          
      <?php  } ?>
          
        <?php }else{ ?>
           <h3>No result found</h3>
        <?php }
      ?>
</form>
      </div>