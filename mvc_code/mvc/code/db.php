<?php
    class DB{
        public $conn;
        public $result;
        protected $host = "localhost";        
        protected $user = "root";        
        protected $password = "";
        protected $dbname = "mvc";
        
        function __construct()
        {
            $this->conn = mysqli_connect($this->host, $this->user, $this->password);
            mysqli_select_db($this->conn, $this->dbname);
            mysqli_query($this->conn, "SET NAME 'utf8' ");
        }
    }
?>