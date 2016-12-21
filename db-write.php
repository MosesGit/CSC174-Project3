<?php
	$name = Trim(stripslashes($_POST['name']));
	$email = Trim(stripslashes($_POST['email']));
	$phone = Trim(stripslashes($_POST['phone']));
	$message = Trim(stripslashes($_POST['message']));

	if ($name && $email && $phone) {
		include ('db-connection.php');
		if (!$connection) {
			die("Connection failed: ".$connection->connect_error);
			$error = $error."dead connection";
		}

		$query = "INSERT INTO contacts (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
		$result = mysqli_query($connection, $query);

		$NumberOfRowsAffected = mysqli_affected_rows($connection);
		if ($NumberOfRowsAffected < 1 ) {
			die('No records were written to the database.');
		}

		echo "Message sent";
		
		mysqli_free_result($result);
		mysqli_close($connection);
	}
?>