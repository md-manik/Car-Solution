<?php
session_start();
$carwash_id=$_GET['carwash_id'];
$conn = mysqli_connect('localhost','root','','carsolution');
$sql= "SELECT * FROM customer";
$result= mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>booking_info</title>
</head>
<body>
    
</body>
</html>
<!--Start Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">Car Solution</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
       <a class="nav-link" href="/carsolution/home.php">Home <span class="sr-only">(current)</span></a>-->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/carsolution/about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/carsolution/contact.php">Contact</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="/carsolution/logout.php">Log out</a>
      </li> 
    
    </ul>
  </div>
</nav>

                       <!--End Nav Bar -->
<div class= "container">
  <div class= "row">
    
     <div class= "col-md-6 col-md-offset-3">


     <h2> Booking Information </h2>
     <hr>
      
      <form action="confirm_booking.php" method="POST">

        <div class="form-group">
            <label for="booking_date"> Date : </label>
            <input required type="date" class="form-control" name= "booking_date" placeholder= "date">
         </div>
        
         <input type="hidden" name= "carwash_id" value= " <?php echo $carwash_id; ?>" >

         <div class="form-group" >
          
            <label for="booking_time"> Time : </label>
            <input required type="time" class="form-control" name= "booking_time" placeholder= "time">
         </div>

         
         <button type="submit" class="btn btn-danger"> Submit </button><br>
         </form>
         </div>
     </div>   
 </div>

 <?php unset($_SESSION['error_msg']); ?>

 </body>
 </html>