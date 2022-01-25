<?php

class model
{
    
	private $username = "root";
	private $password;
	private $conn;
    public $idForNumber;

    function __construct()
    {
        try 
        {
            $this->conn = new PDO("mysql:host=localhost;dbname=functioneelontwerp", $this->username, $this->password);
            return $this->conn;
        } catch (Exception $e) 
        {
            echo "connectie niet gelukt" . $e->getMessage();
        }

    }

    function connection()
    {
        try 
        {
            $this->conn = new PDO("mysql:host=localhost;dbname=functioneelontwerp", $this->username, $this->password);
            return $this->conn;
        } catch (Exception $e) 
        {
            echo "connectie niet gelukt" . $e->getMessage();
        }
    }

    function search($table, $column, $data)
    {
        try 
        {
            $query = "SELECT * FROM " . $table . " WHERE " . $column . " = '" . $data . "'";
            $preparequery = $this->conn->prepare($query);
            $preparequery->execute();
            while($row = $preparequery->fetch()) 
            {
                $idForNumber  = $row['id'];
            }
            return $idForNumber;
        } catch (Exception $e) 
        {
            echo "nummer niet gevonden " . $e->getMessage();
        }
    }
}

?>