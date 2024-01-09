<?php  
session_start();
$carwash_id= $_GET['carwash_id'];

$conn = mysqli_connect('localhost','root','','carsolution');

$sql = "SELECT * FROM carwash_details WHERE $carwash_id= carwash_id";
$result = mysqli_query($conn, $sql);

$cwd= mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>car details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

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
                       <br><br>
     <div class="container">
         <div class="row">
             <div class="col-md-3">
    
             </div>
              <div class="col-md-9">

              <h2> carwash_details Information </h2>
              
              <table class="table">

              <tr>
              <th width="100" class="text-right"> carwash_name: </th>
              <td> <?php echo $cwd['carwash_name']; ?> </td>
              </tr>

              <tr>
              <th width="100" class="text-right"> carwash_price	: </th>
              <td> <?php echo $cwd['carwash_price']; ?> </td>
              </tr>

              <?php $_SESSION['carwash_price']=$cwd['carwash_price'];?>

             </table>
             <a class = "btn btn-info" href="booking.php?carwash_id= <?php echo $carwash_id; ?>">booking</a>
             <a class = "btn btn-danger" href="carwash_details.php">back to carwash_details list</a>
             </div>
         </div>
     </div>
     
