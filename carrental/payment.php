<?php
session_start();
$conn = mysqli_connect('localhost','root','','carsolution');
$sql= "SELECT * FROM payment";
$result= mysqli_query($conn, $sql);

$date_conv=abs(strtotime($_SESSION['end_date']) - strtotime($_SESSION['start_date'])) ;
$date_conv2=floor($date_conv/(60*60*24));
$crb_amount=$date_conv2 *$_SESSION['price'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>payment_info</title>
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

         <?php if(isset($_SESSION['error_msg']))  { ?>
            <div class= "alert alert-warning">
                 <strong> Warning! </strong> <?php echo $_SESSION['error_msg'];?> 
         </div>
     <?php }  ?>
    


     <h2 style="color:green;">Payment </h2>
     <hr>
     <h6 style="color:green";>Booked Successful!!  Payment Please. </h6>
      <form action="payment_store.php" method="POST">

      <h5 style="color:red;"> Booking for : <?php echo $date_conv2 ?> Days</h5>

        <div class="form-group">
            <label for="card_number"> Card Number : </label>
            <input required type="text" class="form-control" name= "card_number" placeholder= "card_number">
         </div>

         <div class="form-group">
            <label for="amount"> Amount : </label>
            <input required type="text" class="form-control" name= "amount" placeholder= "amount" value="<?php echo $crb_amount?>">
         </div>

         <div class="form-group">
            <label for="password"> Password : </label>
            <input required type="password" class="form-control" name= "password" placeholder= "password">
         </div>

         
         <button type="submit" class="btn btn-danger"> Submit </button><br>
         </form>

         </div>
     </div>   
 </div>

 <?php unset($_SESSION['error_msg']); ?>

 </body>
 </html>