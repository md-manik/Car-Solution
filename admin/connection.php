<?php 

$con=mysqli_connect('localhost','root','','carsolution');

if(mysqli_connect_error())
{
  echo "cannot connect";
}
else{
    echo "connected";
}


?>