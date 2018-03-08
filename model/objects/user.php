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

       public function callSaveUser()
       {
           // create a new cURL resource
            $ch = curl_init();

            // set URL and other appropriate options
            curl_setopt($ch, CURLOPT_URL, "https://us-central1-dft-ddt-sb-stevenewman.cloudfunctions.net/SaveProcUser");
            curl_setopt($ch, CURLOPT_HEADER, 0);

            // grab URL and pass it to the browser
            curl_exec($ch);

            $response = json_decode(curl_exec($ch), true);

            echo($response);

            // close cURL resource, and free up system resources
            curl_close($ch);
       }
   }
?>
