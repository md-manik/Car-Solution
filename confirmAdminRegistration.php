<?php
$admin_name=$_POST['admin_name'];
$admin_pass=$_POST['admin_password'];
$con_pass=$_POST['confirm_password'];

if($admin_pass!=$con_pass){
    session_start();
    $_SESSION['error_msg']= "Password & Confirm Password Didn't Match";
    header("Location:adminRegistration.php");
}



$conn = mysqli_connect('localhost','root','','carsolution');

$sql= "INSERT INTO customer VALUES(NULL, '$name', '$email', '$admin_pass')";

if(mysqli_query($conn, $sql)) {
   // echo "registration successfully";
    session_start();
    $_SESSION['reg_msg']= "Registered Successfully.please login";
    header("Location: adminLogin.php");
}
?>