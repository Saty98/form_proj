<?php
	require_once 'connection.php';
	$sql = "SELECT * FROM test";
	$result =mysqli_query($con,$sql);
	if ($result) {
		# code...
		echo "<table class = 'table table -bordred'>";
		echo "<tr>";
		echo " <th> First Name </th><th>Last Name</th><th>City</th><th>occupation</th>;";
		echo "</tr>";
		while ($d = mysqli_fetch_assoc($result)) {
			# code...
			echo "<tr>";
			echo "<td>".$d['firstName']."</td><td>".$d['lastName']."</td><td>".$d['city']."</td><td>".$d['occupation'];
			echo "</tr>";
		}
		echo "</table>";
	}




?>