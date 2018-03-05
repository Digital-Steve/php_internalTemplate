<?php 
    include_once("../model/database.php");

   class user 
   {
       public $userid = 0;
       public $username = "";
       public $useremail = "";
       public $admin = 0;
       public $rfd = 0;

       public function saveuser()
       {
            // connect to db 
            $db = new db();
            //echo "saveuser <br/>";
            $sqlString = "INSERT INTO user (username, email, isAdmin, rfd) VALUES ('" . $this->username . "'," . "'" . $this->useremail . "','" . $this->admin . "','" . $this->rdf . "')";
            $db->save($sqlString);
            //$sqlString = "INSERT INTO user (username, email, isAdmin, rfd) VALUES ('" . $this->username . "'," . "'" . $this->useremail . "'," . $this->admin . $this->rdf . ")";
            //$sqlString = "INSERT INTO user (username, useremail, isAdmin, rfd) VALUES ('John', 'john@example.com'', 'john@example.com', '1', '1')"; 
            //echo $sqlString . "<br/>";
            //$db->executeSQL($sqlString);

            //$db->closeConnection();

            
            /*$servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "proc";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "INSERT INTO user (username, email, isadmin)
            VALUES ('John', 'john@example.com', 1)";

            if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();*/

       }
   }
?>
