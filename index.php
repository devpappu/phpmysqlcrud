<?php 
     session_start();

 include('backend/database.php'); ?>

<?php $results = mysqli_query($conn, "SELECT * FROM user"); ?>

<?php
	if(isset($_POST['upload']))
	{   
		
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
	$file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="upload/";
	
	/* new file size in KB */
	$new_size = $file_size/1024;  
	/* new file size in KB */
	
	/* make file name in lower case */
	$new_file_name = strtolower($file);
	/* make file name in lower case */
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
	// $sql="INSERT INTO image(file,type,size) VALUES('$final_file','$file_type','$new_size')";
	// mysqli_query($conn,$sql);
	
	
	echo "File sucessfully upload";
			
	
	}
	else
	{
	
	echo "Error.Please try again";
			
			}
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

  <body class='p-16 gradient-primary'>

     <div class="flex gap-16">

		 <div class="bg-gradient-to-tr from-indigo-600 to-purple-600 rounded-lg text-white w-56 h-screen px-3 py-3 ">
		  
		   <hi class="text-white bg-white text-purple-600 block font-medium rounded-lg text-sm px-5 py-2.5">Hello Admin</h1>

		   <!-- menu lists  -->
		   <div class="mt-5">
			<ul class="list-none">
				<li class="menu__item mb-3"><a href="pages/create.php">Add User</a></li>
				<li class="menu__item mb-3">All Users</li>
				<li class="menu__item mb-3">Add Post</li>
				<li class="menu__item mb-3">Add Category</li>
			</ul>
		   </div>

		 </div>

		 <div class="w-full">
			 <div class="mb-8 bg-gradient-to-tr from-indigo-600 to-purple-600 rounded-lg text-white text-lg font-bold">
			   <h1 class="p-2 text-center uppercase">Core php CRUD MySQL : Dev Pappu</h1>
			</div>
	 
			<!-- toast msg -->
			<?php  include('partials/toastmsg.php'); ?>
	 
			<?php  include('pages/create.php'); ?>
	 
			<?php  include('pages/users.php'); ?>
		 </div>
	 </div>

   <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>

</body>
</html>