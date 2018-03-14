<?php 
    include_once("../model/database.php");
    include_once("../model/environmentVariables.php");

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
       //calls cloud function which writes to the db
       public function callSaveUser()
       {
           // get variables such as database name ect from the app.yaml
           $environmentVariables = new envVars();

           // assign insert string
           $environmentVariables->SQLString = "INSERT INTO user (username, email, isAdmin, rfd) VALUES ('" . $this->username . "'," . "'" . $this->useremail . "'," . $this->admin . ", 0 )";
           
           $data_string = json_encode($environmentVariables);

           //echo($data_string );
           //exit;

           // create a new cURL resource
            $ch = curl_init();

            // set URL and other appropriate options
            curl_setopt($ch, CURLOPT_URL, $environmentVariables->SaveCloudFunctionURL . "SaveToMySQL");
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_HTTPHEADER,
                    array("Content-type: application/json"));
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);  
            
            // grab URL and pass it to the browser
            $response = curl_exec($ch);
            
            // close cURL resource, and free up system resources
            curl_close($ch);

            echo ($response);

       }
   }
?>
