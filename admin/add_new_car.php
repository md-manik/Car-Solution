<?php
session_start();
$conn = mysqli_connect('localhost','root','','carsolution');
$sql= "SELECT * FROM car_details";
$result= mysqli_query($conn, $sql);
$admin_id = $_REQUEST['admin_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Adding Car</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
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
    


     <h2> Adding Car </h2>
     <hr>
      <form action="store.php" method="POST">

        <div class="form-group">
            <label for="car_model"> Car Model : </label>
            <input required type="text" class="form-control" name= "car_model" placeholder= "car_model">
         </div>

         <div class="form-group">
            <label for="car_name"> Car Name : </label>
            <input required type="text" class="form-control" name= "car_name" placeholder= "car_name">
         </div>

         <div class="form-group">
            <label for="price"> Price : </label>
            <input required type="text" class="form-control" name= "price" placeholder= "price per day">
         </div>
         <input type="hidden" name="admin_id" value="<?php echo $admin_id;?>" id="">

         <button type="submit" class="btn btn-default"> Submit </button><br>
         </form>

        

         </div>
     </div>   
 </div>

<?php unset($_SESSION['error_msg']); ?>

</body>
</html>

 