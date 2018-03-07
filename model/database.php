<?php 
    class db 
    {
        // db values for connecting to MAMP on local host
        /*private $servername = "localhost";
        private $username = "root";
        private $password = "root";
        private $dbname = "proc";*/

        // db valuse for gcp 
        
        private $servername = "mysql:unix_socket=/cloudsql/dft-ddt-sb-stevenewman:europe-west1:sandbox-mysql;";
        private $username = "testProcUser";
        private $password = "dft-ddt-sb-steveneman-testProcUser-0192837465";
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