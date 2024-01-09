<?php
session_start();
$conn = mysqli_connect('localhost','root','','carsolution');
$sql= "SELECT * FROM contact";
$result= mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" class="rel">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
  
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<!--<h2>Responsive Contact Section</h2>
<p>Resize the browser window to see the effect.</p>-->
<!-- nav bar start-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">Car Solution</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
       <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>-->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registration.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Log In</a>
      </li> 
          
    
    </ul>
  </div>
</nav>


<!-- nav bar end-->
<!--WARNING MASSAGE-->
<div class= "container">
  <div class= "row">
    
     <div class= "col-md-6 col-md-offset-3">

         <?php if(isset($_SESSION['error_msg']))  { ?>
            <div class= "alert alert-warning">
                 <strong> Warning! </strong> <?php echo $_SESSION['error_msg'];?> 
         </div>
     <?php }  ?>



<!--contact section start-->

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>24/7 hours customer services </p>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/range rover.jpg" style="width:100%">
    </div>
    <div class="column">
   
    <form action="confirmContact.php" method="POST">

<div class="form-group">
    <label for="Name"> Name : </label>
    <input required type="text" class="form-control" name= "name" placeholder= "name">
 </div>

 <div class="form-group">
    <label for="email"> Email : </label>
    <input required type="email" class="form-control" name= "email" placeholder= "email">
 </div>

 <div class="form-group">
    <label for="city"> City : </label>
    <input required type="text" class="form-control" name= "city" placeholder= "city">
 </div>

 <div class="form-group">
    <label for="subject"> Subject</label>
    <input required type="text" class="form-control" name= "subject" placeholder= "subject">
 </div>


 <button type="submit" class="btn btn-info"> Submit </button><br>
 </form>

 </div>
</div>   
</div>

<?php unset($_SESSION['error_msg']); ?>

<!--contact section end-->
</body>
</html>