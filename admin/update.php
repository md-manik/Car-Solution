<?php
$car_id= $_GET['car_id'];

$car_model=$_POST['car_model'];
$car_name=$_POST['car_name'];
$price=$_POST['price'];

$conn = mysqli_connect('localhost','root','','carsolution');

$sql= "UPDATE car_details SET car_model='$car_model', car_name='$car_name', price='$price' WHERE car_id='$car_id' ";

if(mysqli_query($conn, $sql)) {
   echo "Added Successfully.";
   header("Location: car_details.php");
} else echo "Not Inserted";
?>