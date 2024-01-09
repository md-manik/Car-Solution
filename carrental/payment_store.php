<?php
session_start();
$card_number=$_POST['card_number'];
$amount=$_POST['amount'];
$password=$_POST['password'];
$hash=password_hash($password,PASSWORD_DEFAULT);


$conn = mysqli_connect('localhost','root','','carsolution');

$customer_id= $_SESSION['customer_id'];

$sql= "INSERT INTO payment VALUES(NULL, '$card_number', '$amount', '$hash',$customer_id)";

if(mysqli_query($conn, $sql)) {
    //echo " booking succesfully";
     header("Location: car_details.php");
}
?>