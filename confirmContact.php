<?php
$name=$_POST['name'];
$email=$_POST['email'];
$city=$_POST['city'];
$subject=$_POST['subject'];

$conn = mysqli_connect('localhost','root','','carsolution');

$sql= "INSERT INTO contact VALUES(NULL, '$name','$email', '$city', '$subject')";

if(mysqli_query($conn, $sql)) {
   //echo "Comment done successfully";
  $_SESSION['reg_msg']= "Registered Successfully.please login";
 header("Location: home.php");
}
?>
