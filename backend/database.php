<?php
$servername = "localhost";
// $servername = "127.0.0.1";
$username = "root";
$password = "pappu";
$dbname = "crud";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$baseUrl = 'http://phpcrud.test';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>