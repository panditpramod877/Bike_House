<?php
require '../include/rider_header.php';
require '../database/connection.php';
session_start();
$id = $_SESSION['id'];


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
    <title>Bike Book Status</title>
</head>
<body>
<?php

$alertmsg = isset($_GET['alertmsg'])?$_GET['alertmsg']:'';

if($alertmsg == 1){
echo "<script>alert('Successfully booked bike')</script>";

}
?>
</body>
</html>

 
<?php
         $query= "SELECT * FROM `bike_buy` as bb 
         INNER JOIN bike_sell as bs on bs.id = bb.bike_id 
         INNER JOIN information as i on i.id= bb.buyerid where buyerid=$id ORDER BY bb.id_b DESC" ;

        $result = $conn->query($query);
       if($result->num_rows>0){ ?>
       
       <h2>Bike Booked Status::</h2>
          <table style="width:100%; border:1px solid black; ">
            
                <tr style=" border:1px solid black;">
                 <th  style=" border:1px solid black;" >Id</th>
                <th  style=" border:1px solid black;" >Name</th>
               
                <th  style=" border:1px solid black;">Email</th>
                <th  style=" border:1px solid black;">Mobile</th>
               
                <th  style=" border:1px solid black;"> Address</th>
                <th  style=" border:1px solid black;"> Gender</th>
                <th  style=" border:1px solid black;"> Bike name</th>
                <th  style=" border:1px solid black;"> Comapany name</th>
                <th  style=" border:1px solid black;"> Bike CC</th>
                <th  style=" border:1px solid black;"> Price</th>
                <th  style=" border:1px solid black;"> Status</th>
                </tr>
            
           <?php while($row = $result->fetch_assoc()){ ?>

              <tr >
              <td  style=" border:1px solid black;"><?php echo $row['id'];?></td>
              <td  style=" border:1px solid black;"><?php echo $row['name'];?></td>
                <td  style=" border:1px solid black;"><?php echo $row['email'];?></td>
               
                <td  style=" border:1px solid black;"><?php echo $row['mobile'];?></td>
                <td style=" border:1px solid black;"><?php echo $row['address'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['gender'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['bikename'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['companyname'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['bikecc'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['price'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['status'];?></td>
                  </tr>
            <?php  } ?>
           </table>
        <?php }else{ ?>
           <h3>No result found</h3>
        <?php }
      ?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Admin</title>
      </head>
      <body>
         
      </body>
      </html>