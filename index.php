<?php  include('backend/database.php'); ?>

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

		<?php if (isset($_SESSION['message'])): ?>
			<div class="my-4 msg text-white bg-green-600 rounded-lg border p-2">
				<?php 
					echo $_SESSION['message']; 
					unset($_SESSION['message']);
				?>
			</div>
		<?php endif ?>

			<form method="post" action="function.php" class="bg-white border-2 p-5 rounded-lg " >
					<div class="mb-6">
						<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your name</label>
						<input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name" required="">
					</div>
					<div class="mb-6">
						<label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your address</label>
						<input type="text" name="address" id="address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="address" required="">
					</div>

					<button type="submit" name="save" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add  new entry to server</button>
			</form>


	 <?php  include('users.php'); ?>
</div>		


	 
	 <script>

		function changeMyColor(id) {
			alert('ok')
			var el = document.getElementById(id);
			el.style.color = "blue";
		}

		let editbtn = document.querySelector("edit_btn");

		editbtn.addEventListener("click", function () {
		    alert('ok')
		});

       function functionToExecute () =>{
		 
         console.log('data')
	   }

	 </script>

   <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>

</body>
</html>