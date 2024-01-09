<?php  

session_start();
$admin_id=$_SESSION['admin_id'];

$conn = mysqli_connect('localhost','root','','carsolution');

$sql = "SELECT * FROM admin";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> admin home </title>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/style.css" class="rel">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 
</head>
<body>
 
                      <!--Start Nav Bar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/carsolution/admin/adminHome.php">Car Solution | Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
      <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Dashboard
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="car_details.php?admin_id=<?php echo $admin_id;?>">Car Rental</a>
          <a class="dropdown-item" href="carwash_details.php">Car Wash </a>
          <a class="dropdown-item" href="contact_details.php">Contact </a>
          <a class="dropdown-item" href="customer_details.php">Customers </a>
         <a class="dropdown-item" href="servicesHistory.php"> Car Rental History</a>
         <a class="dropdown-item" href="car_wash_history.php"> Car Wash History </a>
          <a class="dropdown-item" href="total_carwash_earning.php"> Total Car washing earnings</a>
          <a class="dropdown-item" href="total_carrent_earning.php"> Total Car Rent earnings</a>
          <a class="dropdown-item" href="customerServed.php"> Total Customer Served</a>
          <a class="dropdown-item" href="car_rent_payment.php">Car Rent Payment </a>
          <a class="dropdown-item" href="carwash_payment.php">Car Wash Payment </a>
          <a class="dropdown-item" href="carrent_history_subquery.php">Car Rent History Using Subquery </a>
          <a class="dropdown-item" href="carwash_history_subquery.php">Car Wash History Using Subquery </a>
        <li class="nav-item">
        <a class="nav-link" href="adminLogout.php">Logout</a>
      </li>

          
    
    </ul>
  </div>
</nav>

                       <!--End Nav Bar -->


     <!--Start Banner image -->


<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../images/recent-blog-3.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
</style>
</head>


<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Don't Dream it, Drive it!</h1>
    
    <p>We are providing various categories of car wash and car rental services.</p>
   <!-- <a href="services.php"><button>Services</button></a>-->
  </div>
</div>



<!--end Banner image -->



<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>