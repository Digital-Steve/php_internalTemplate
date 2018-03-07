<?php 
    class db 
    {
        // db values for connecting to MAMP on local host
        /*private $servername = "localhost";
        private $username = "root";
        private $password = "root";
        private $dbname = "proc";*/

        // db valuse for gcp 
        
        private $servername = "35.205.41.120";
        private $username = "root";
        private $password = "Gatrok241114";
        private $dbname = "testProc";

        public function save($sqlstring)
        {
            // create new connection
            $conn = $this->newConn();
            // execute query with new connection
            $this->executeSQL($sqlstring, $conn);
            // close connection
            $this->closeConnection($conn);
        }

        private function newConn()
        {
            try
            {
                $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);  
                return $conn;
            }
            catch(mysqli_sql_exception $e)
            {
                // need to think about error handling
                echo "couldn't connect";
                throw $e;
            }
        }

        private function executeSQL($sqlstring, $conn)
        {
            
            if ($conn->query($sqlstring) === TRUE) 
            {
                echo "New record created successfully";
            } 
            else 
            {
                echo "Error: " . $sqlstring . "<br>" . $conn->error;
            }
            
        }

        private function closeConnection($conn)
        {
            $conn->close();
        }
    }
?>