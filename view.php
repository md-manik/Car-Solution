<?php  

$car_id= $_GET['car_id'];

$conn = mysqli_connect('localhost','root','','carsolution');

$sql = "SELECT * FROM car_details WHERE $car_id= car_id";
$result = mysqli_query($conn, $sql);

$crd= mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>car details</title>

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
     <div class="container">
         <div class="row">
             <div class="col-md-3">
             <br><br>
             <a class = "btn btn_info" href="car_details.php">back to car list</a>
             </div>
              <div class="col-md-9">

              <h2> Car Information </h2>
              
              <table class="table">

              <tr>
              <th width="100" class="text-right"> Car Model	: </th>
              <td> <?php echo $crd['car_model']; ?> </td>
              </tr>

              <tr>
              <th width="100" class="text-right"> Car Name	: </th>
              <td> <?php echo $crd['car_name']; ?> </td>
              </tr>

              <tr>
              <th width="100" class="text-right"> Price/Day	: </th>
              <td> <?php echo $crd['price']; ?> </td>
              </tr>
             
             </table>
             <a class = "btn btn_info" href="about.php">booking</a>
             </div>
         </div>
     </div>