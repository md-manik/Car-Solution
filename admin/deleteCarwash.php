<?php  

$carwash_id= $_GET['carwash_id'];
$conn = mysqli_connect('localhost','root','','carsolution');

$sql = "DELETE FROM carwash_details WHERE carwash_id= $carwash_id";

if(mysqli_query($conn, $sql)) {
    header("Location:carwash_details.php");
 } else {
     echo "Not Deleted";
 }
 ?>
 