<?php

session_start();
print_r($_GET);
//$carwash_id=$_GET['carwash_id'];
//date_default_timezone_set("Asia/Dhaka");
//$booking_date=date('Y-m-d H:i:s');
$booking_date=$_POST['booking_date'];
$booking_time=$_POST['booking_time'];

$conn = mysqli_connect('localhost','root','','carsolution');

$customer_id= $_SESSION['customer_id'];
//$carwash_id= $_SESSION['carwash_id'];
$carwash_id=$_POST['carwash_id'];

$sql= "INSERT INTO carwash_booking VALUES(NULL, '$booking_date', '$booking_time',$customer_id,$carwash_id)";

if(mysqli_query($conn, $sql)) {
    header("Location: carwash_payment.php");
}
?>