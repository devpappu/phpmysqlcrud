<?php
 
  // Include database file
  include '../backend/postfunction.php';
  
  $id = $_GET['id'];

  if ($id) {
    $postObj = new Post();
    $post = $postObj->postById($id);
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

                
                <div class=" bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                       
                <img class="p-5 h-64  rounded-t-lg" src="../upload/<?php echo $post['image'];?>" alt="">
                    
                    <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> <?php echo $post['title']?></h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $post['description']?></p>
                    </div>
                </div>

                    

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