<!DOCTYPE html>
<html>
    <head>
        <title>My Final Test-Hnin</title>
    </head>
    <body>
		<h1>My Final Test!</h1>
		<p>Data retrieved from the PostgreSQL database:</p>

		<?php
		$connection_string = "host=database-1.cluster-cd7f6tqvy8jj.us-east-1.rds.amazonaws.com port=5432 dbname=database-1
 user=thet password=Sigmaaung2";
		$connection = pg_connect($connection_string) or die("Could not connect to the database: " . pg_last_error());


		$query = "SELECT * FROM final";
		$result = pg_query($connection, $query) or die("Error reading data: " . pg_last_error());

		while ($row = pg_fetch_assoc($result)) {
			echo "ID: " . $row['id'] . ", First Name: " . $row['fname'] . ", Last Name: " . $row['lname'] . ", Timestamp: " . $row['created_at'] . "\n";
		}

		?>

    </body> 
</html>