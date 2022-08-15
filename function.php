<?php
include 'backend/database.php';
	
    session_start();

   // initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	// user store function
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];

		mysqli_query($conn, "INSERT INTO user (name, address, email) VALUES ('$name', '$address', '$email')"); 
		$_SESSION['message'] = "User saved"; 
		header('Location: '.$baseUrl);

	}


    // delete user function
	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		mysqli_query($conn, "DELETE FROM user WHERE id=$id");
		$_SESSION['message'] = "User deleted!"; 
		header('Location: '.$baseUrl);
	}

?>