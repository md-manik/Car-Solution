<?php  

$car_id= $_GET['car_id'];
$conn = mysqli_connect('localhost','root','','carsolution');

$sql = "DELETE FROM car_details WHERE car_id= $car_id";

if(mysqli_query($conn, $sql)) {
    header("Location:car_details.php");
 } else {
     echo "Not Deleted";
 }
 ?>
 