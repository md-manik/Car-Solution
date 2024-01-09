<?php  

$contact_id= $_GET['contact_id'];
$conn = mysqli_connect('localhost','root','','carsolution');

$sql = "DELETE FROM contact WHERE contact_id= $contact_id";

if(mysqli_query($conn, $sql)) {
    header("Location:contact_details.php");
 } else {
     echo "Not Deleted";
 }
 ?>