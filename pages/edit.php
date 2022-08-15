<?php  include('../backend/database.php'); ?>

<?php

    $msg = '';

    if (isset($_GET['id'])) {
      
        $id = $_GET['id'];
      
        $update = true;

		$record = mysqli_query($conn, "SELECT * FROM user WHERE id=$id");

        if ($record->num_rows > 0) {
			$data = mysqli_fetch_array($record);
			$id = $data['id'];
			$name = $data['name'];
			$address = $data['address'];
		}else{
            header('Location: index.php');
        }
    }
?>


<?php

    if(isset($_POST['update'])){
       
        $id=$_POST['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $sql = "UPDATE `user` SET `name`='$name',`address`='$address' ,`email`='$email' WHERE id=$id";
      
        if (mysqli_query($conn, $sql)) {
            // echo json_encode(array("statusCode"=>200));
            header('Location: index.php');
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

?>


<!DOCTYPE html>
<html>
<head>
	<title>CORE PHP CRUD MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />

</head>

 <style>
	.gradient-primary{
    background: linear-gradient(180deg,#f8fafc,rgba(242,202,252,.11) 34.69%,rgba(250,198,252,.11) 44.06%,rgba(175,183,255,.11) 54.48%,rgba(142,220,200,.07) 64.9%,#f8fafc 97.95%);
  }
 </style>

<body class='p-20 gradient-primary'>

        <div class="mb-8 bg-gradient-to-tr from-indigo-600 to-purple-600 rounded-lg text-white text-lg font-bold">
		   <h1 class="p-2 text-center uppercase">Edit Page</h1>
	   </div>

        <a href="http://phpcrud.test" class="my-4 p-3 bg-gradient-to-tr from-indigo-600 to-purple-600 rounded-lg text-white text-lg font-bold"> Back to home</a>

        <form method="post" class="mt-10 bg-white border-2 p-5 rounded-lg " >

             <input type="hidden" name="id" value="<?php echo $id; ?>">


                <div class="flex gap-5">
                <div class="mb-6  w-full">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your name</label>
                    <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name" required="" value="<?php echo $name; ?>">
                </div>
                <div class="mb-6 w-full">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                    <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="email" required="" value="<?php echo $email; ?>">
                </div>
            </div>

                <div class="mb-6">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your address</label>
                    <input type="text"  name="address" id="address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="address" required="" value="<?php echo $address; ?>">
                </div>

                <button type="submit" name="update" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update data</button>
        </form>


</div>		


</body>
</html>