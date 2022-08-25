<?php
require '../include/admin_header.php';
require '../database/connection.php';

?>


 
<?php
        $query = "SELECT * FROM `information` WHERE usertype='rider'";
     
        $result = $conn->query($query);
       if($result->num_rows>0){ ?>
       
       <h2>CUSTOMER INFORMATION::</h2>
          <table style="width:85%; border:1px solid black; ">
            
         <tr style=" border:1px solid black;">
         <th  style=" border:1px solid black;" >Id</th>
                <th  style=" border:1px solid black;" >Name</th>
                <th  style=" border:1px solid black;">User name</th>
               
                <th  style=" border:1px solid black;">Email</th>
                <th  style=" border:1px solid black;">Mobile</th>
               
                <th  style=" border:1px solid black;"> Address</th>
                <th  style=" border:1px solid black;"> Gender</th>
                
                </tr>
            
           <?php while($row = $result->fetch_assoc()){ ?>

              <tr >
              <td  style=" border:1px solid black;"><?php echo $row['id'];?></td>
              <td  style=" border:1px solid black;"><?php echo $row['name'];?></td>
                <td  style=" border:1px solid black;"><?php echo $row['username'];?></td>
                <td  style=" border:1px solid black;"><?php echo $row['email'];?></td>
                <td  style=" border:1px solid black;"><?php echo $row['mobile'];?></td>
                <td style=" border:1px solid black;"><?php echo $row['address'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['gender'];?></td>
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
      <style>
     body{
      background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
       
     }
   </style>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Admin</title>
      </head>
      <body>
         
      </body>
      </html>