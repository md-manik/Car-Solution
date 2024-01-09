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
    <title>editing</title>
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


         <button type="submit" class="btn btn-default"> Submit </button><br>
         </form>

        

         </div>
     </div>   
 </div>