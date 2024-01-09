<?php
//ob_start();

  $admin_name =$_POST['admin_name'];
  //$admin_email =$_POST['admin_email'];
  $admin_password=$_POST['admin_password'];

//$admin_name =$_POST['admin_name'];
//$admin_password=$_POST['admin_password'];

$conn=mysqli_connect('localhost','root','','carsolution');

$sql="SELECT * FROM  admin WHERE admin_name='$admin_name' AND admin_password='$admin_password'";


$result =mysqli_query($conn,$sql);

if (mysqli_num_rows($result) === 1) {
  // the user name must be unique
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['login']==true;
    
    if ($row['admin_name'] == "admin") {
      $_SESSION['admin_id']= 1;
      header("Location: adminHome.php");
    }else{
      $_SESSION['admin_id']=2;
      header("Location: adminHome.php");
    }

  }else{
    echo 'wrong email and password';
}
?>
