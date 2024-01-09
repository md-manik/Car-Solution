<?php
$carwash_id= $_GET['carwash_id'];
$carwash_name=$_POST['carwash_name'];
$carwash_price=$_POST['carwash_price'];

$conn = mysqli_connect('localhost','root','','carsolution');

$sql= "UPDATE carwash_details SET carwash_name='$carwash_name', carwash_price='$carwash_price' WHERE carwash_id='$carwash_id' ";

if(mysqli_query($conn, $sql)) {
   echo "Added Successfully.";
   header("Location: carwash_details.php");
} else echo "Not Inserted";
?>