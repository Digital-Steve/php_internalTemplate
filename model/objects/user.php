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

            $sqlString = "INSERT INTO user (username, email, isAdmin, rfd) VALUES ('" . $this->username . "'," . "'" . $this->useremail . "'," . $this->admin . ", 0 )";
            
            $db->save($sqlString);
       }
   }
?>
