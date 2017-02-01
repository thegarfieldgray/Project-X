<?php
require 'connect.php';

if(isset($_POST["submit"])){
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	/*$email = trimData($_POST["emailAddress"]);
	$password = trimData($_POST["password"]);*/

	echo "</br>"
	echo "firstName is : ".$firstName . "";
	echo $lastName;
}else{
	null;
}




/*$options = isset($_POST['option'])?$_POST['option']:null; */



/*if (isset($_POST["submit"])){
	if (isset($option)){
		if(isset($option[0])){
			$tableName = "Educator";
		}
		else if(isset($option[1])){
			$tableName = "Employer";
		}
		else if(isset($option[2])){
			$tableName = "Student";
		}
	}

	


}

	function trimData($data){
		$data = trim($data);
		$data = stripslashes($data);
	  	$data = htmlspecialchars($data);
	  	return $data;
	}

	/* Insert into table */

	/* $sql = "INSERT INTO student (firstName, lastName, email, password)
VALUES ('$firstName', '$lastName', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); */

?>