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

		// image upload
		$file = rand(1000,100000)."-".$_FILES['file']['name'];
		$file_loc = $_FILES['file']['tmp_name'];
		$folder="upload/";
		$new_file_name = strtolower($file);
		$final_file=str_replace(' ','-',$new_file_name);
		move_uploaded_file($file_loc,$folder.$final_file);
		// end img upload

		mysqli_query($conn, "INSERT INTO user (name, address, email, image) VALUES ('$name', '$address', '$email', '$final_file')"); 
		$_SESSION['message'] = "User saved"; 
		header('Location: '.$baseUrl);

	}


    // delete user function
	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		
		$record = mysqli_query($conn, "SELECT * FROM user WHERE id=$id");
		$record = mysqli_fetch_array($record);
	
		$path = 'upload/'.$record['image'];
		if (is_file($path)) {
			unlink($path);
		}

	  	mysqli_query($conn, "DELETE FROM user WHERE id=$id");

		$_SESSION['message'] = "User deleted!"; 
		header('Location: '.$baseUrl);
	}

?>