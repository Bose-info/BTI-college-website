<?php
	error_reporting(0);
    // Assosiative Array
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, number) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $firstName, $lastName, $gender, $email, $number);
		$execval = $stmt->execute();
		//echo $execval;
		echo "Thank You for Your Registration, Our college will Contact soon 😊☎";
		$stmt->close();
		$conn->close();
	}
?>