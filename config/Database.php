<?php 
    class Database {
        //DB params
        private $host = 'localhost';
        private $db_name = 'resultacadamydb';
        private $username = 'resultscript';
        private $password = 'fg253fsf#23';
        private $conn;

        //DB Connect
        public function connect()
        {

            $this->conn = null;

            try
            {
                $conStr = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
                 $this->conn = new PDO($conStr,$this->username, $this->password);
                 $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

            catch(PDOException $e)
            {
                echo 'Connection error: ' . $e->getMessage();
            }

            return $this->conn;
        }
    }