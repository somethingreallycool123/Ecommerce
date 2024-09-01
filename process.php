<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone_number = $_POST['phone_number'];

	// Database connection
	$conn = new mysqli('localhost','root','','dname');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into navoditsad(name, email, password, phone_number) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $name, $email, $password, $phone_number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
