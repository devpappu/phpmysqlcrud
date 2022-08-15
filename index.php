<?php 
     session_start();

 include('backend/database.php'); ?>

<?php $results = mysqli_query($conn, "SELECT * FROM user"); ?>


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
		  <h1 class="p-2 text-center uppercase">Core php CRUD MySQL : Dev Pappu</h1>
	   </div>

	   <!-- toast msg -->
	   <?php  include('partials/toastmsg.php'); ?>

	   <?php  include('pages/create.php'); ?>

	   <?php  include('pages/users.php'); ?>

   <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>

</body>
</html>