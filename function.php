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
		$address = $_POST['address'];

		mysqli_query($conn, "INSERT INTO user (name, address) VALUES ('$name', '$address')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index.php');
	}



    // delete user function
	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		mysqli_query($conn, "DELETE FROM user WHERE id=$id");
		$_SESSION['message'] = "Address deleted!"; 
		header('location: index.php');
	}

?>