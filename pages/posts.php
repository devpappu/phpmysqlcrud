<?php
 
  // Include database file
  include '../backend/postfunction.php';
 
  $postObj = new Post();

  $posts = $postObj->posts();

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

                <div class="flex gap-5">
                    
                    <?php foreach ($posts as $item) { ?>
                          
                            <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="rounded-t-lg" src="../upload/<?php echo $item['image'];?>" alt="">
                                </a>
                                <div class="p-5">
                                    <a href="<?php echo $item['id'];?>">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $item['title'];?></h5>
                                    </a>

                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                       <?php echo substr($item['description'], 0, 90) . '...'?>
                                    </p>

                                    <a href="post.php?id=<?php echo $item['id'];?>" class="inline-flex  items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Read more
                                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </a>
                                </div>
                            </div>

                    <?php } ?>
                    

                </div>
		 </div>
	 </div>

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