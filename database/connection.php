<?php
$host = 'localhost';
$db = 'bike_house';
$username = 'root';
$password = '';

$conn = new mysqli($host,$username,$password,$db);
if($conn->connect_error){
  die("Connection failed ".$conn->connect_error);
}

?>
