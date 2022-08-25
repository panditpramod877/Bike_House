<?php
require '../include/rider_header.php';
require '../database/connection.php';
?>
<html>

<head>
<style>
     body{
      background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
       
     }
   </style>
<link rel="stylesheet" href="../fontawesome/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="js/wiki.js"></script>
<link rel="stylesheet" href="../fontawesome/css/all.css">
    
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
    /* Rate Css Starts Here */

    .star-widget input{
            display: none;

        }

        .star-widget label{
            font-size: 40px;
            color: #444;
            padding: 10px;
            float: right;
        }

        input:not(:checked) ~ label:hover,
        input:not(:checked) ~ label:hover ~ label{
            color:#fd4;
        }

        input#popup1rate-5:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup1rate-4:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup1rate-3:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup1rate-2:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup1rate-1:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup2rate-5:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup2rate-4:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup2rate-3:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup2rate-2:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup2rate-1:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }


        input#popup3rate-5:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup3rate-4:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup3rate-3:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup3rate-2:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup3rate-1:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }


        input#popup4rate-5:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup4rate-4:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup4rate-3:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup4rate-2:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup4rate-1:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup5rate-5:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup5rate-4:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup5rate-3:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup5rate-2:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup5rate-1:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup6rate-5:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup6rate-4:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup6rate-3:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup6rate-2:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup6rate-1:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }
        .btn{
            padding: 10px 60px;
            background: #fff;
            border:0;
            outline: none;
            cursor: pointer;
            font-size: 22px;
            font-weight: 500;
            border-radius: 30px;
        }

        #reviewInput{
            width:90%;
            border: 1.5px solid black;
            border-radius: 5px;
            padding: 10px;

        }
        .popup{
            width:400px;
            background: #fff;
            border-radius:6px;
            position:absolute;
            top: 0%;
            left:50%;
            transform: translate(-50%,-50%) scale(0.1);
            text-align:center;
            padding:0 30px 30px;
            color:#333;
            visibility: hidden;
            transition: transform 0.4s, top 0.4s;
        }

        .open-popup{
            visibility: visible;
            top: 50%;
            transform: translate(-50%,-50%) scale(1);
            
        }

        .popup img{
            width:100px;
            margin-top: -50px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .popup h2{
            font-size:38px;
            font-weight:500px;
            margin: 30px 0 10px;
        }

        .popup button{
            width:100%;
            margin-top:50px;
            padding:10px 0;
            background: #6fd649;
            color: #fff;
            border: 0;
            outline: none;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 5px 5px rgba(0,0,0,0.2);
        }

        /* Rate Css Ends Here */
    </style>
</head>
</html>

    
<?php

 
        $query = "SELECT * FROM `bike_sell` ORDER BY rating DESC";
        
     
        $result = $conn->query($query);


       if($result->num_rows>0){ ?>
       
       <h2>AVAILABLE BIKE INFORMATION</h2>
         

       
   
           <?php 
           $idNum=1;
           while($row = $result->fetch_assoc()){ 
            $id = "popup".$idNum;
            $idNum++;
            ?>
<form action="bike_book_process.php" method="POST">

<div class="out" >
<?php

           echo "<img src='../image/".$row['bikepicture']." ' >";   
           ?>
           <div class="info">
           <br> Bike name: <span> <?php echo $row['bikename']; ?></span>
     <br> Company name: <span> <?php echo $row['companyname']; ?></span>

     <br> Bike CC: <span> <?php echo $row['bikecc']; ?></span>

  <br> Bike Price: <span> <?php echo $row['price']; ?></span>
  <br> Rating: <span> <?php echo $row['rating']; ?></span>
    <br>
    <br>
    <?php $bike_id=$row['id'];
       
   
   $_SESSION['bikeid']=$bike_id;  
    
?>
            
    <a href="esewa.php?bikeId=<?php echo $bike_id; ?>" style="font-size:large; background-color:green;color:white;padding:10px;">BOOK NOW </a>
    <input type="button" id="but" class="btn" onclick="openPopup('<?php echo $id; ?>')" value="Rate Now" style="font-size:large; background-color:green;color:white;padding:10px;">
           </div>
         
           </div>
          <div class="description">
<?php echo $row['bike_description']; ?>
<br>
<br>  </form> </div>

<div class="popup" id="<?php echo $id;?>">
        <form action="ratingprocess.php" method="post">
        
            <div class="star-widget">
                <input type="radio" name="rate" id="<?php echo $id.'rate-5';?>" value="5">
                <label for="<?php echo $id.'rate-5';?>"  class="fas fa-star"></label>
                <input type="radio" name="rate" id="<?php echo $id.'rate-4';?>" value="4">
                <label for="<?php echo $id.'rate-4';?>"  class="fas fa-star"></label>
                <input type="radio" name="rate" id="<?php echo $id.'rate-3';?>" value="3">
                <label for="<?php echo $id.'rate-3';?>"  class="fas fa-star"></label>
                <input type="radio" name="rate" id="<?php echo $id.'rate-2';?>" value="2">
                <label for="<?php echo $id.'rate-2';?>"  class="fas fa-star"></label>
                <input type="radio" name="rate" id="<?php echo $id.'rate-1';?>" value="1">
                <label for="<?php echo $id.'rate-1';?>"  class="fas fa-star"></label>
            </div>
        
        <h2>Rate <?php echo $row['bikename']; ?></h2>
        <input type="hidden" value="<?php echo $bike_id ?>" name="bike_id">
        <p>Your Review</p> <br>
        <input type="textarea" placeholder="Describe your experience" id="reviewInput" name="review">
        <input type="submit" value="OK">
    </form>
    </div>

    <script>

let popup = document.getElementById("popup");

function checkForm(){
    console.log(document.getElementById('searchTerm').value);
    return false;
    }

function openPopup(id){
    popup = document.getElementById(id);
    popup.classList.add("open-popup");
    document.getElementById("but").innerHTML;
}
function closePopup(){
    popup.classList.remove("open-popup");
}

</script>

      <?php  } ?>
      
          
        <?php }else{ ?>
           <h3>No result found</h3>
        <?php }
      ?>


      </div>

      
     