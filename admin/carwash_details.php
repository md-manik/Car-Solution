<?php  

session_start();

if(!isset($_SESSION['login']))
{
 //echo "please login";
 //header("Location: login.php");
}
$conn = mysqli_connect('localhost','root','','carsolution');

$sql = "SELECT * FROM carwash_details";
$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>carwash detaills</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 <!--<link rel="stylesheet" href="css/style.css" class="rel">-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js
"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js
"></script>
    <![endif]-->
  </head>
  <body>
    <!--Start Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/carsolution/admin/adminHome.php">Car Solution</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
       <a class="nav-link" href="/carsolution/admin/adminHome.php">Home <span class="sr-only">(current)</span></a>-->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_new_carwash.php">Add New Carwash</a>
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
             <br><br><br><br>
             </div>
              <div class="col-md-9">

              <table class="table">
                 <thead>
                   <tr>
                     <th> ID </th>
                     <th> Name </th>
                     <th> Price </th>
                     <th> Actions </th>
                   </tr>
                 </thead>

                 <tbody>
                <?php while ($row = mysqli_fetch_assoc($result))  { $_SESSION['admin_id']=$row['admin_id']; ?>
                   <tr>
                     <td><?php echo $row['carwash_id'] ?> </td>
                     <td><?php echo $row['carwash_name'] ?></td>
                     <td><?php echo $row['carwash_price'] ?></td>
                     <td>
                          <a class="btn btn-info" href="viewCarwash.php?carwash_id= <?php echo $row['carwash_id']; ?>">View</a>
                         <!--<a href="" class="btn btn-info">View</a>-->
                         <!--<a href="" class="btn btn-warning">Edit</a>-->
                         <a class="btn btn-warning" href="editCarwash.php?carwash_id= <?php echo $row['carwash_id']; ?>">Edit</a>
                        <!-- <a href="" class="btn btn-danger">Delete</a>-->
                        <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="deleteCarwash.php?carwash_id= <?php echo $row['carwash_id']; ?>"> Delete </a>
                         
                     </td>
                  </tr>
                  <?php } ?>
                 </tbody>
             </table>
             
             </div>
         </div>
     </div>