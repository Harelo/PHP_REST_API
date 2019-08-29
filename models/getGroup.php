<?php
    class Group {
        //DB Stuff
        private $conn;
        private $table = 'exampletable';

        //Post properties
        public $id;
        public $group;

        //Constructor with DB
        public function __construct($db)
        {
            $this->conn = $db;
        }

        // Get Group
        public function read($id)
        {
            try
            {

            //Create query
            $query = 'SELECT GroupID FROM ' . $this->table . ' WHERE ID = ' . $id;

            $results = $this->conn->query($query);
            if(!$results->rowCount() > 0) { die('notfound'); }
            while($row = $results->fetch())
            {
                echo $row[0];
            }
            }

            catch(exception $e)
            {
                die('error');
            }
        }
    }
?>