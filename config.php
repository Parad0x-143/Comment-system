<?php
	
	$servername = " sql12.freesqldatabase.com";
	$username = "sql12652334";
	$password = "XzwqmZATbQ";
	$dbname = "sql12652334";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

?>
