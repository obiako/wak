<?php

class dbConnect
{
    public $conn;

    function __construct()
    {
        require_once('config.php');
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

    }


}

?>