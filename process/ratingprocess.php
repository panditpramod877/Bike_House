<?php

include ('../database/connection.php');

$rating = $_POST['rate'];
$bid = $_POST['bike_id'];
$review = $_POST['review'];

// echo $rating;
// echo $bid;
// echo $review;


$sql = "select total_rating, total_raters from bike_sell where id = $bid";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$a = $row['total_rating']+$rating;
$b = $row['total_raters']+1;
$c = $a/$b;

$sql1 = "Update bike_sell set rating = $c, total_rating = $a, total_raters= $b where id=$bid";


if($conn->query($sql1)){
    header('Location:rider.php?msg=Rated Successfully');
}else{
    echo "$conn -> connect_error";
}

?>
