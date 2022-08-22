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

            // image upload
            $file = rand(1000,100000)."-".$_FILES['file']['name'];
            $file_loc = $_FILES['file']['tmp_name'];
            $folder="../upload/";
            $new_file_name = strtolower($file);
            $final_file=str_replace(' ','-',$new_file_name);
            move_uploaded_file($file_loc,$folder.$final_file);
            // end img upload

            $query="INSERT INTO posts(title,type,category_id,description,image) VALUES('$title','$type','$category_id','$description','$final_file')";
            $sql = $this->con->query($query);

            if ($sql==true) {
                $_SESSION['message'] = "Post addedd success!"; 
            }else{
                $_SESSION['error'] = "failed try again!"; 
            }
        }


        public function postCategory()
        {
            $query = "SELECT * FROM posts WHERE type = '1'";
            $result = $this->con->query($query);
          
            if ($result->num_rows > 0) {
                $data = array();
               
                while ($row = $result->fetch_assoc()) {
                       $data[] = $row;
                }
                 return $data;

            }else{
                echo "Record not found";
            }
        }

        public function posts()
        {
            $query = "SELECT * FROM posts WHERE type = '2'";
            $result = $this->con->query($query);
          
            if ($result->num_rows > 0) {
                $data = array();
               
                while ($row = $result->fetch_assoc()) {
                       $data[] = $row;
                }
                 return $data;

            }else{
                echo "Record not found";
            }
        }

        // Fetch single data for edit from customer table
        public function postById($id)
        {
            $query = "SELECT * FROM posts WHERE id = '$id'";
            $result = $this->con->query($query);
          if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row;
            }else{
                echo "Record not found";
            }
        }
        
    }
    
?>