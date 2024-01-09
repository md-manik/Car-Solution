<?php
session_start();
$conn = mysqli_connect('localhost','root','','carsolution');
$sql= "SELECT * FROM carwash_details";
$result= mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Adding Carwash</title>
</head>
<body>



<div class= "container">
  <div class= "row">
    
     <div class= "col-md-6 col-md-offset-3">

         <?php if(isset($_SESSION['error_msg']))  { ?>
            <div class= "alert alert-warning">
                 <strong> Warning! </strong> <?php echo $_SESSION['error_msg'];?> 
         </div>
     <?php }  ?>
    


     <h2> Adding Carwash </h2>
     <hr>

      <form action="storecarwash.php" method="POST">

         <div class="form-group">
            <label for="carwash_name"> Carwash Name : </label>
            <input required type="text" class="form-control" name= "carwash_name" placeholder= "carwash_name">
         </div>

         <div class="form-group">
            <label for="carwash_price"> Carwash Price : </label>
            <input required type="text" class="form-control" name= "carwash_price" placeholder= "carwash_price">
         </div>


         <button type="submit" class="btn btn-default"> Submit </button><br>
         </form>

        

         </div>
     </div>   
 </div>

 <?php unset($_SESSION['error_msg']); ?>
         </body>
         </html>