<?php

// session_start();
// Include database file
// include '../backend/loginFunction.php';

// $authObj = new Auth();

if(!$_SESSION["loggedin"] === true){
  header("location: http://phpcrud.test/pages/login.php");
  exit;
 }

//  session_destroy()
 
?>

<div class="mb-8 bg-gradient-to-tr from-indigo-600 to-purple-600 rounded-lg text-white text-lg font-bold">
    <h1 class="p-2 text-center uppercase">Core php CRUD MySQL : Dev Pappu</h1>
</div>