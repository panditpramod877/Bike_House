<?php
require '../include/admin_header.php';
require '../database/connection.php';

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

</html>

 
<?php
         $query= " SELECT * FROM `bike_buy` as bb 
         INNER JOIN bike_sell as bs on bs.id = bb.bike_id 
         INNER JOIN information as i on i.id= bb.buyerid where status='pending' ORDER BY bb.id_b DESC; ";

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
                <th  style=" border:1px solid black;" colspan=2> Order Request</th>
                </tr>
            
           <?php while($row = $result->fetch_assoc()){ 
                            ?>
           
           
            <tr >
               <?php
               $id=$row['id_b'];
            
            ?>
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
                <?php echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to accept  this request?')\"href='?approve=".$row['id_b']."'>Approve</a></td>"; ?>  -->
                <?php echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to cancle this request ?')\"href='?cancle=".$row['id_b']."'>Cancle</a></td>"; ?>  -->
               
                  </tr>
            <?php  } ?>
           </table>
        <?php }else{ ?>
           <h3>No result found</h3>
        <?php }
      ?>



<?php 
      // to approve a bike

      if (isset($_GET['approve'])) {

         $id = $_GET['approve'];
         $note_approve = mysqli_real_escape_string($conn,$_GET['approve']);
         $approve_query = "UPDATE bike_buy SET status='approved'  WHERE id_b='$id'";
         $run_approve_query = mysqli_query($conn, $approve_query) or die (mysqli_error($conn));
         if (mysqli_affected_rows($conn) > 0) {
             echo "<script>alert('Approved status!');
             window.location.href='order_bike.php';</script>";
         }
         else {
       echo "<script>alert('error occured.try again!');</script>";   
         }
         }
      
      ?>
      

      

<?php 
      // to cancle a bike

      if (isset($_GET['cancle'])) {

         $id = $_GET['cancle'];
         $note_approve = mysqli_real_escape_string($conn,$_GET['cancle']);
         $approve_query = "UPDATE bike_buy SET status='cancled'  WHERE id_b='$id'";
         $run_approve_query = mysqli_query($conn, $approve_query) or die (mysqli_error($conn));
         if (mysqli_affected_rows($conn) > 0) {
             echo "<script>alert('Cancled status!');
             window.location.href='order_bike.php';</script>";
         }
         else {
       echo "<script>alert('error occured.try again!');</script>";   
         }
         }
      
      ?>
      