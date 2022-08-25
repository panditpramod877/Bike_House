<?php
require '../include/admin_header.php';
require '../database/connection.php';
?>
<style>
     body{
      background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
       
     }
   </style>
<?php  $query= "SELECT * FROM `contact` ORDER BY id DESC ";

        $result = $conn->query($query);
       if($result->num_rows>0){ ?>
       
       <h2>Bike Booked Status::</h2>
          <table style="width:100%; border:1px solid black; ">
            
                <tr style=" border:1px solid black;">
                
                <th  style=" border:1px solid black;" >Name</th>
               
                <th  style=" border:1px solid black;">Email</th>
                <th  style=" border:1px solid black;">Mobile</th>
               
                <th  style=" border:1px solid black;"> Address</th>
               
                <th  style=" border:1px solid black;"> Message</th>
                <th  style=" border:1px solid black;"> Time</th>
                </tr>
            
           <?php while($row = $result->fetch_assoc()){ ?>

              <tr >
             
              <td  style=" border:1px solid black;"><?php echo $row['name'];?></td>
                <td  style=" border:1px solid black;"><?php echo $row['email'];?></td>
               
                <td  style=" border:1px solid black;"><?php echo $row['mobile'];?></td>
                <td style=" border:1px solid black;"><?php echo $row['address'];?></td>
               
                <td style=" border:1px solid black;" ><?php echo $row['message'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['time'];?></td>
                  </tr>
            <?php  } ?>
           </table>
        <?php }else{ ?>
           <h3>No result found</h3>
        <?php }
      ?>