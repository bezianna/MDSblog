<?php

    class Conn {
        private $host = "127.0.0.1";
        private $dbName = "blog";
        private $charset = "utf8";
        private $userName = "root";
        private $pass = "";
        protected $conn;

        function __construct() {
            try {
                $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbName};charset{$this->charset};",
                $this->userName, $this->pass);
            } catch(PDOException $ex)   {
                die($ex->getMessage());
            }  

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        
        function __destruct() {
            $this->conn = null;
        }
    }
    
?>