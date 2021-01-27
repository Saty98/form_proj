<?php
	require_once 'connection.php';
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$city = $_POST['city'];
	$occupation = $_POST['occupation'];

	$sql = "INSERT INTO test(firstName,lastName,city,occupation) VALUES('$FirstName', '$LastName','$city' ,
	'$occupation')";
	if (mysqli_query($con,$sql)) {
		# code...
		echo "ok";
	}else{
		echo "error";
	}
	if (!$con) {
		# code...
		echo "Not Connected";
	}
	//header("refresh:2; url = index.html");
?>