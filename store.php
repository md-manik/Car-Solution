<?php

$car_model=$_POST['car_model'];
$car_name=$_POST['car_name'];
$price=$_POST['price'];

$conn = mysqli_connect('localhost','root','','carsolution');
$sql= "INSERT INTO car_details VALUES(NULL, '$car_model', '$car_name', $price)";

if(mysqli_query($conn, $sql)) {
   echo "Added Successfully.";
   header("Location: car_details.php");
} else echo "Not Inserted";
?>