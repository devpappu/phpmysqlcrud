
<!DOCTYPE html>
<html>
<head>
	<title>CORE PHP CRUD MySQL</title>
    <?php  include('../partials/style.php'); ?>
</head>

  <body class='p-16 gradient-primary'>

     <div class="flex gap-16">
        
	     <div>
			 <?php  include('../partials/sidebar.php'); ?>
		 </div>

		<div class="w-full">
			
           <?php  include('../partials/header.php'); ?>
	 
                <fieldset>
                <legend>User information:</legend>

                    <form method="post" action="../function.php" enctype="multipart/form-data" class="mt-2 bg-white border-2 p-5 rounded-lg " >

                            <div class="flex gap-5">
                                <div class="mb-6  w-full">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your name</label>
                                    <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name" required="">
                                </div>
                                <div class="mb-6 w-full">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                                    <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="email" required="">
                                </div>
                                <div class="mb-6 w-full">
                                    <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Image</label>
                                    <input type="file" name="file" id="file" required="">
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your address</label>
                                <input type="text" name="address" id="address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="address" required="">
                            </div>

                            <button type="submit" name="save" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add  new entry to server</button>
                    </form>

                <fieldset>
		 </div>
	 </div>

   <?php  include('../partials/script.php'); ?>

</body>
</html>