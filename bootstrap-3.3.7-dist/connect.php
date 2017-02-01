<?php

if(isset($_POST)){
	$firstName = $_POST["firstName"];

	/*$email = trimData($_POST["emailAddress"]);
	$password = trimData($_POST["password"]);*/

	echo "</br>";
	echo "firstName is : ".$firstName;
}else{
	null;
}


/*	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "internship";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db_name);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	    $conn->close();
	}
	else{
	echo "Connected successfully";

}*/
?>