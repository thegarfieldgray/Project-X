<?php
require 'connect.php';

	if(isset($_POST)){
		$firstName 	= trimData($_POST["firstName"]);
		$lastName 	= trimData($_POST["lastName"]);
		$email		= trimData($_POST["emailAddress"]);
		$password	= trimData($_POST["password"]);
	}

	function trimData($data){
		$data = trim($data);
		$data = stripslashes($data);
	  	$data = htmlspecialchars($data);
	  	return $data;
	}

	/* Insert into table */

	$sql = "INSERT INTO student (firstName, lastName, email, password)
	VALUES ('$firstName', '$lastName', '$email', '$password')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>