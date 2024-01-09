<?php  

session_start();

$conn = mysqli_connect('localhost','root','','carsolution');

$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <link rel="stylesheet" href="css/style.css" class="rel">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   
    <title>contact detaills</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
  <a class="navbar-brand" href="adminHome.php">Car Solution | Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
      <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
      
        <a class="nav-link" href="adminLogout.php">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminLogin.php">change password</a>
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
                     <th>ID</th>
                     <th>Name </th>
                     <th>Email </th>
                     <th>City </th>
                     <th>Subject </th>
                     <th> Actions </th>
                   </tr>
                 </thead>

                 <tbody>
                <?php while ($row = mysqli_fetch_assoc($result))  { ?>
                   <tr>
                     <td><?php echo $row['contact_id'] ?> </td>
                     <td><?php echo $row['name'] ?></td>
                     <td><?php echo $row['email'] ?></td>
                     <td><?php echo $row['city'] ?></td>
                     <td><?php echo $row['subject'] ?></td>
                     <td>
                        <!-- <a href="viewContact.php" class="btn btn-info">View</a>-->
                         <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="deleteContact.php?contact_id= <?php echo $row['contact_id']; ?>"> Delete </a>
                         
                     </td>
                  </tr>
                  <?php } ?>
                 </tbody>
             </table>
             
             </div>
         </div>
     </div>