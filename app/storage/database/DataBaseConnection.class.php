<?php

    class DataBaseConnection {
        //Variables needed for connection
        private $servername;
        private $username;
        private $password;
        private $dbname;
        
        //Handles connection to database
        protected function connect() {
            //Initialize variables
            $this->servername = "studmysql01.fhict.local";
            $this->username = "dbi431062";
            $this->password = "Chios-82100";
            $this->dbname = "dbi431062";
            
            //Check for errors
            try {
                //Data Source Name
                $dsn = "mysql:host=". $this->servername .";dbname=". $this->dbname .";";

                //Connect to database
                $pdo = new PDO($dsn, $this->username, $this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                return $pdo;
            } catch(PDOException $e) {
                echo "Connection failed: ". $e->getMessage();
            }
        }
    }

?>