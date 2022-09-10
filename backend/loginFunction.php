<?php
 
    session_start();

    class Auth {


        private $servername = "localhost";
        private $email   = "root";
        private $password   = "pappu";
        private $database   = "crud";
        public  $con;
 
        // Database Connection 
        public function __construct()
        {
            $this->con = new mysqli($this->servername, $this->email,$this->password,$this->database);
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


        public function login()
        { 
             
            $email = $_POST['email'];  
            $password = $_POST['password'];  

            //to prevent from mysqli injection  
            $email = stripcslashes($email);  
            $password = stripcslashes($password);  
            $email = mysqli_real_escape_string($this->con, $email);  
            $password = mysqli_real_escape_string($this->con, $password);  

            $query = "SELECT * FROM user WHERE email = '$email' and password = '$password'";  
           
            $result = $this->con->query($query);
          
            if ($result->num_rows > 0) {
                echo "<h1><center> Login successful </center></h1>";  

                // Store data in session variables
                $_SESSION["loggedin"] = true;
                // $_SESSION["id"] = $id;
                // $_SESSION["username"] = $username;   
                header("location: http://phpcrud.test");
            }else{
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            }
        }
        
    }
    
?>