<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "internship";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db_name);

	// Check connection
	if ($conn->connect_error) {
		// **CREATE ERROR 404 PAGE
	    die("Connection failed: " . $conn->connect_error);
	    $conn->close();
	}

?>