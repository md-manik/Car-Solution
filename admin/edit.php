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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>editing</title>
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
    


     <h2> Editing Car Details</h2>
     <hr>

      <form action="update.php?car_id=<?php echo $car_id ?>" method="POST">

        <div class="form-group">
            <label for="car_model"> Car Model : </label>
            <input required type="text" class="form-control" name= "car_model" placeholder= "car_model" value="<?php echo $crd['car_model']?>">
         </div>

         <div class="form-group">
            <label for="car_name"> Car Name : </label>
            <input required type="text" class="form-control" name= "car_name" placeholder= "car_name" value="<?php echo $crd['car_name']?>">
         </div>

         <div class="form-group">
            <label for="price"> Price : </label>
            <input required type="text" class="form-control" name= "price" placeholder= "price per day" value="<?php echo $crd['price']?>">
         </div>


         <button type="submit" class="btn btn-info"> Submit </button><br>
         </form>

        

         </div>
     </div>   
 </div>