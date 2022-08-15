<?php
include 'backend/database.php';
	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($conn, "INSERT INTO user (name, address) VALUES ('$name', '$address')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index.php');
	}



	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];
		$sql = "UPDATE `user` SET `name`='$name',`address`='$address',`phone`='$phone',`city`='$city' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
	


    // delete user function
	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		mysqli_query($conn, "DELETE FROM user WHERE id=$id");
		$_SESSION['message'] = "Address deleted!"; 
		header('location: index.php');
	}

?>