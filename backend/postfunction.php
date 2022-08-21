<?php
 
    session_start();

    class Post {


        private $servername = "localhost";
        private $username   = "root";
        private $password   = "pappu";
        private $database   = "crud";
        public  $con;
 
        // Database Connection 
        public function __construct()
        {
            $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
            if(mysqli_connect_error()) {
             trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
            }else{
              return $this->con;
            }
        }
 

        // Insert request post data into posts table
        public function insertData($post)
        {
            $title = $this->con->real_escape_string($_POST['title']);
            $type = $this->con->real_escape_string($_POST['type']);
            $description = $this->con->real_escape_string($_POST['description']);
            $category_id = $_POST['category_id'] ? $this->con->real_escape_string($_POST['category_id']) : null;
            
            // $user_id = $this->con->real_escape_string($_POST['user_id']) ;

            $query="INSERT INTO posts(title,type,category_id,description) VALUES('$title','$type','$category_id','$description')";
            $sql = $this->con->query($query);

            if ($sql==true) {
                $_SESSION['message'] = "Post addedd success!"; 
            }else{
                $_SESSION['error'] = "failed try again!"; 
            }
        }
        
    }
    
?>