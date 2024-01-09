<?php
$admin_name=$_POST['admin_name'];
//$admin_email=$_POST['admin_email'];
$admin_password=$_POST['admin_password'];
$confirm_password=$_POST['confirm_password'];

if($admin_password!=$confirm_password){
    session_start();
    $_SESSION['error_msg']= "Password & Confirm Password Didn't Match";
    header("Location:adminRegistration.php");
}



$conn = mysqli_connect('localhost','root','','carsolution');

$sql= "INSERT INTO admin(admin_name,admin_password) VALUES('$admin_name','$admin_password')";

if(mysqli_query($conn, $sql)) {
   // echo "registration successfully";
    session_start();
    $_SESSION['reg_msg']= "Registered Successfully.please login";
    header("Location: adminLogin.php");
}
?>