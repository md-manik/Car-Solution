<html>
	<head>
		<title>Total Customers</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>

		
			
			
		

<?php
	//require_once('connection.php');
	$connect = mysqli_connect('localhost','root','','carsolution' )
		or die("Can not connect");


	$results = mysqli_query( $connect, 
	
	"SELECT  count(carwash_id) AS total
	FROM carwash_details
	Group by carwash_id" )
	
		or die("Can not execute query");



	

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";		
		echo "<td> $total </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";


?>
</div>

		</body>
</html>