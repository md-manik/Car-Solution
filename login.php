<?php
session_start();
$conn = mysqli_connect('localhost','root','','carsolution');

$sql = "SELECT * FROM customer";
$result = mysqli_query($conn,$sql);


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta hettp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpot" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <br><br><br>
    <div class="container">
        <div class="row">
           <dv class="col-md-6 col-md-offset-3">


           <?php if(isset($_SESSION['error'])){?>
            <div class="alert alert-warning">
                <strong>warning!</strong>Something wrong
           </div>
           <?php  } ?>

           <?php if(isset($_SESSION['reg_msg'])){?>
            <div class="alert alert-warning">
                <strong>SUCCESS!</strong> <?php echo $_SESSION['reg_msg'];?>
           </div>
           <?php  } ?>

   
            <h2>Login</h2>
            <hr>


            <form action="confirmLogin.php" method="post">

                <div class="form-group">
                    <label for="email">Email : </label>
                    <input required type="email" class="form-control" name="email" placeholder="email">
                  </div>

                <div class="form-group">
               <label for="password">Password : </label>
               <input requirued type="password" class="form-control" name="password" placeholder="password">
               </div>
           <button Type="submit" class ="btn btn-danger">Submit</button>
           <a class="btn btn-info" href="registration.php">create a new account</a>
          </form>

           </div>
           </div>
           </div>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>
</html>

<?php unset($_SESSION['reg_msg']); ?>