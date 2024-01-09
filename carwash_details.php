<?php  

session_start();

if(!isset($_SESSION['login']))
{
 echo "please login";
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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come after these tags -->
    <title>carwash detaills</title>

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
     <div class="container">
         <div class="row">
             <div class="col-md-3">
             <a class = "btn btn_info" href="home.php">Back to home page</a>
             <a class = "btn btn_info" href="add_new_carwash.php">add new carwash</a> <br>
             <br><br><br><br>
             </div>
              <div class="col-md-9">

              <table class="table">
                 <thead>
                   <tr>
                     <th>carwash_id </th>
                     <th>carwash_name </th>
                     <th>carwash_price </th>
                     <th> Actions </th>
                   </tr>
                 </thead>

                 <tbody>
                <?php while ($row = mysqli_fetch_assoc($result))  { ?>
                   <tr>
                     <td><?php echo $row['carwash_id'] ?> </td>
                     <td><?php echo $row['carwash_name'] ?></td>
                     <td><?php echo $row['carwash_price'] ?></td>
                     <td>
                        <a class="btn btn-info" href="view.php?car_id= <?php echo $row['car_id']; ?>">View</a>
                         <a class="btn btn-warning" href="edit.php?car_id= <?php echo $row['car_id']; ?>">Edit</a>
                         <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="delete.php?car_id= <?php echo $row['car_id']; ?>"> Delete </a>
                         
                     </td>
                  </tr>
                  <?php } ?>
                 </tbody>
             </table>
             
             </div>
         </div>
     </div>