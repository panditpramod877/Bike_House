<?php
require '../include/admin_header.php';
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
   
</body>
</html>

 
<?php
         $query= " SELECT * FROM `bike_sell` ";

        $result = $conn->query($query);
       if($result->num_rows>0){ ?>
       
       <h2>Bike Booked Status::</h2>
          <table style="width:100%; border:1px solid black; ">
            
                <tr style=" border:1px solid black;">
                 <th  style=" border:1px solid black;" >Bike Name</th>
                <th  style=" border:1px solid black;" >Company Name</th>
               
                <th  style=" border:1px solid black;">Bike CC</th>
                <th  style=" border:1px solid black;">Price</th>
               


                <th  style=" border:1px solid black;" colspan=2;> Action</th>
                
              
                </tr>
            
           <?php while($row = $result->fetch_assoc()){ ?>
            <?php
            $id1=$row['id'];
            

            ?>
              <tr >
           
              <td  style=" border:1px solid black;"><?php echo $row['bikename'];?></td>
                <td  style=" border:1px solid black;"><?php echo $row['companyname'];?></td>
               
                <td  style=" border:1px solid black;"><?php echo $row['bikecc'];?></td>
                <td style=" border:1px solid black;"><?php echo $row['price'];?></td>
                
           <td style=" border:1px solid black;"><a href="update_bike.php?id=<?php echo $id1; ?>">Update</a></td>
               
              
                  </tr>
            <?php  } ?>
           </table>
        <?php }else{ ?>
           <h3>No result found</h3>
        <?php }
      ?>
      