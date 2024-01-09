<?php
session_start();
$carwash_name=$_POST['carwash_name'];
$carwash_price=$_POST['carwash_price'];

$conn = mysqli_connect('localhost','root','','carsolution');
$admin_id=$_SESSION['admin_id'];

$sql= "INSERT INTO carwash_details VALUES(NULL, '$carwash_name', '$carwash_price',$admin_id)";

if(mysqli_query($conn, $sql)) {
   echo "Added Successfully.";
   header("Location: carwash_details.php");
} else echo "Not Inserted";
?>