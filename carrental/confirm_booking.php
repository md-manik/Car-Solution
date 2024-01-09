<?php
session_start();

date_default_timezone_set("Asia/Dhaka");
$booking_date=date('Y-m-d H:i:s');
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];


$conn = mysqli_connect('localhost','root','','carsolution');

$customer_id= $_SESSION['customer_id'];
$car_id= $_POST['car_id'];

$sql= "INSERT INTO car_rent_booking VALUES(NULL, '$start_date', '$end_date', '$booking_date',$car_id,$customer_id)";

$_SESSION['start_date']=$start_date;
$_SESSION['end_date']=$end_date;

if(mysqli_query($conn, $sql)) {
   // $_SESSION['reg_msg']= "Booking Successfully";
    header("Location: payment.php");
}
?>

