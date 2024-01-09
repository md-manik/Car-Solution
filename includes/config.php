<?php

$conn=mysqli_connect('localhost','root','','carsolution');

if($conn)
{
    echo "connected";
    $sql="INSERT INTO customer(customer_firstname,customer_lastname,email,password,admin_id) Values('Mrittka','Mirja','mm12@gmail.com','12345',1)";
    mysqli_query($conn,$sql);

}
else{
    echo "not connected";
}

?>