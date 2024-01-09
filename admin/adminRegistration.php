<?php
session_start();
$conn = mysqli_connect('localhost','root','','carsolution');
$sql= "SELECT * FROM admin";
$result= mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Registration</title>
</head>
<body>
    
</body>
</html>

<div class= "container">
  <div class= "row">
    
     <div class= "col-md-6 col-md-offset-3">

         <?php if(isset($_SESSION['error_msg']))  { ?>
            <div class= "alert alert-warning">
                 <strong> Warning! </strong> <?php echo $_SESSION['error_msg'];?> 
         </div>
     <?php }  ?>
    


     <h2> Sign Up </h2>
     <hr>

      <form action="confirmAdminRegistration.php" method="POST">

        <div class="form-group">
            <label for="admin_name"> Name : </label>
            <input required type="text" class="form-control" name= "admin_name" placeholder= "name">
         </div>
        <!-- <div class="form-group">
            <label for="Email"> Email : </label>
            <input required type="email" class="form-control" name= "email" placeholder= "email">
         </div>-->

         <div class="form-group">
            <label for="admin_password"> Password : </label>
            <input required type="password" class="form-control" name= "admin_password" placeholder= "password">
         </div>

         <div class="form-group">
            <label for="confirm_password"> Confirm Password : </label>
            <input required type="password" class="form-control" name= "confirm_password" placeholder= "confirm_password">
         </div>

         <button type="submit" class="btn btn-default"> Submit </button><br>
         already have an account? <a class="btn btn-link" href="AdminLogin.php"> Login </a>
         </form>

         </div>
     </div>   
 </div>

 <?php unset($_SESSION['error_msg']); ?>