<?php

$carwash_name=$_POST['carwash_name'];
$carwash_price=$_POST['carwash_price'];

$conn = mysqli_connect('localhost','root','','carsolution');
$sql= "INSERT INTO carwash_details VALUES('', '$carwash_name', '$carwash_price')";

if(mysqli_query($conn, $sql)) {
   echo "Added Successfully.";
   header("Location: carwash_details.php");
} else echo "Not Inserted";
?>