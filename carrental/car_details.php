<?php  

session_start();

if(!isset($_SESSION['login']))
{
 //header("Location: login.php");
}
$conn = mysqli_connect('localhost','root','','carsolution');

$sql = "SELECT * FROM car_details";

$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>car detaills</title>
    <!--<link rel="stylesheet" href="css/style.css" class="rel">-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  

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
  <a class="navbar-brand" href="/carsolution/home.php">Car Solution</a>
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

     <div class="container">
         <div class="row">
             <div class="col-md-3">
            
           <!--  <a class = "btn btn_info" href="../home.php">Car Solution</a>-->
             <br><br><br><br>
             </div>
              <div class="col-md-9">

              <table class="table">
                 <thead>
                 <tr>
                     <th>car_id </th>
                     <th>car_model </th>
                     <th>car_name </th>
                     <th> price </th>
                     <th> Actions </th>
                   </tr>
                 </thead>

                 <tbody>
                <?php while ($row = mysqli_fetch_assoc($result))  {  $_SESSION['car_id']=$row['car_id'];?>
                   <tr>
                     <td><?php echo $row['car_id'] ?> </td>
                     <td><?php echo $row['car_model'] ?></td>
                     <td><?php echo $row['car_name'] ?></td>
                     <td><?php echo $row['price'] ?></td>
                     <td>
                         <a class="btn btn-info" href="view.php?car_id= <?php echo $row['car_id']; ?>">View</a>
                     </td>
                  </tr>
                  <?php } ?>
                 </tbody>
             </table>
             
             </div>
         </div>
     </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>



