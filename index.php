<!DOCTYPE html>
<html>
<head>
	<title>CORE PHP CRUD MySQL</title>
    <?php  include('partials/style.php'); ?>
</head>

  <body class='p-16 gradient-primary'>

     <div class="flex gap-16">
        
	     <div>
			 <?php  include('partials/sidebar.php'); ?>
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

   <?php  include('partials/script.php'); ?>

</body>
</html>