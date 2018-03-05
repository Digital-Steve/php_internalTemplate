<?php 
    class db 
    {
        private $servername = "localhost";
        private $username = "root";
        private $password = "root";
        private $dbname = "proc";

        public function newConn($sqlstring)
        {
            try
            {
                $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);  
                $this->executeSQL($sqlstring, $conn);
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
                $this->closeConnection($conn);
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