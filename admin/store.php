<?php
session_start();
$car_model=$_POST['car_model'];
$car_name=$_POST['car_name'];
$price=$_POST['price'];
$admin_id = $_REQUEST['admin_id'];

$conn = mysqli_connect('localhost','root','','carsolution');

//$admin_id= $_SESSION['admin_id'];

$sql= "INSERT INTO car_details VALUES(NULL, '$car_model', '$car_name', '$price',$admin_id)";

if(mysqli_query($conn, $sql)) {
   echo "Added Successfully.";
   header("Location: car_details.php");
} else echo "Not Inserted";
?>
