<?php

class Tipo {

    private $conn;
    
    public function __construct($conn){
        $this->conn = $conn;
    }

    public function obtenerDatos(){
        $query = 'SELECT * FROM tipos';
        $execQ = mysqli_query($this->conn, $query);
        $rows = array();
        while ($row = mysqli_fetch_assoc($execQ)) {
            $rows[] = $row;
        }
        return $rows;
    }

}

?>