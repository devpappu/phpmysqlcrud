<?php
 
  // Include database file
  include '../backend/postfunction.php';
 
  $postObj = new Post();
 
  // Insert Record in posts table
  if(isset($_POST['submit'])) {
    $postObj->insertData($_POST);
  }
 
?>

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

           <?php  include('../partials/toastmsg.php'); ?>

                <fieldset>
                <legend>Post information:</legend>

                    <form method="post" enctype="multipart/form-data" class="mt-2 bg-white border-2 p-5 rounded-lg " >

                            <div class="mb-6  w-full">
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Title</label>
                                <input type="text" name="title" id="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="title" required="Type is required">
                            </div>

                            <div class="flex gap-5">

                                <div class="mb-6  w-full">
                                    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Type</label>
                                        <select onchange="onChangeType()" id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="Type is required">
                                            <option selected>Choose a type</option>
                                            <option value="1">Category</option>
                                            <option value="2">Post</option>
                                            <option value="3">Product</option>
                                        </select>
                                </div>

                                <div class="category_box mb-6  w-full" id="category_box">
                                    <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Category</label>
                                        <select onchange="onChangeType()" id="type" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="Type is required">
                                            <option value="null">Select category</option>
                                            <option value="1">Category</option>
                                            <option value="2">Post</option>
                                            <option value="3">Product</option>
                                        </select>
                                </div>
 
                                <div class="mb-6 w-full">
                                    <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Feature Image</label>
                                    <input type="file" name="file" id="file">
                                </div>
                            </div>

                            

                            <div class="mb-6">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>


                                <textarea name="description" id="message"  rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="description..."></textarea>
                            </div>

                            <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add  new entry to server</button>
                    </form>

                <fieldset>
		 </div>
	 </div>

     <p id="demo"></p>

    <script>

         let category = document.querySelector(".category_box");
         category.classList.add('hide');

         function onChangeType() {

            // category.classList.add('show');

            var x = document.getElementById("type").value;
            let number = parseInt(x);
            // alert(x)
            if(number == 2){
                category.classList.add('show');
            }else if(number == 3){
                category.classList.add('show');
            }else{
               category.classList.remove('show');
               category.classList.add('hide');
            }
        }
    </script>

   <?php  include('../partials/script.php'); ?>

</body>
</html>