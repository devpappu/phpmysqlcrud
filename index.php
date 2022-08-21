<?php
    session_start();
?>

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

	     	<?php  include('partials/header.php'); ?>

			<!-- toast msg -->
			<?php  include('partials/toastmsg.php'); ?>
	 	 
			<?php  include('pages/users.php'); ?>
		 </div>
	 </div>

   <?php  include('partials/script.php'); ?>

</body>
</html>