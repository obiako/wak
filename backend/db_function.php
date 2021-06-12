<?php
require_once('db_connect.php');

session_start();

class dbFunction
{
    public $db;

    function __construct()
    {

        // connecting to database
        $this->db = new dbConnect();

    }

    // destructor
    function __destruct()
    {
       // $this->db->Close();
    }

    public function createFrog($frog_details)
    {
        $weight = $frog_details['weight'];
        $colour = $frog_details['colour'];
        $hatch_date = $frog_details['hatch_date'];
        $description =$frog_details['description'];
        $sql = "INSERT INTO frogs (weight, colour, hatch_date,description) VALUES ('{$weight}', '{$colour}', '{$hatch_date}', '{$description}' )";


        if ($this->db->conn->query($sql) === TRUE) {
            return true;
        } else {
            return "Error: " . $sql . "<br>" . $this->db->conn->error;
        }

    }

    public function getFrogs()
    {

        $sql = "SELECT id, weight, colour, hatch_date,description FROM frogs";

        return $this->db->conn->query($sql);

    }

    public function updateFrog($frog_details)
    {
        $weight = $frog_details['weight'];
        $colour = $frog_details['colour'];
        $hatch_date = $frog_details['hatch_date'];
        $description = $frog_details['description'];
        $id = $frog_details['id'];
        $sql = "UPDATE frogs SET weight='{$weight}',colour='{$colour}',hatch_date='{$hatch_date}',description='{$description}' WHERE id='{$id}'";


        if ($this->db->conn->query($sql) === TRUE) {
            return true;
        } else {
            return "Error updating record: " . $this->db->conn->error;
        }

    }

    public function deleteFrog($id)
    {

        $sql = "DELETE FROM frogs WHERE id='{$id}'";
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if ($this->db->conn->query($sql) === TRUE) {
            return true;
        } else {
            return "Error deleting record: " . $this->db->conn->error;
        }
    }
    public function getFrog($id)
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $sql = "SELECT * FROM frogs WHERE id='{$id}'";

        return $this->db->conn->query($sql)->fetch_assoc();
    }

}

?>