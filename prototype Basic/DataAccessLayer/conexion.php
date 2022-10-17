<?php

class   Conexion{

    private $host;
    private $username;
    private $pass;
    private $db;

    protected function connect() {
             
        $this ->host="localhost";
        $this ->username="root";
        $this ->pass="";
        $this ->db="crud";


      

        $conn=new mysqli($this ->hosts,$this->username,$this->pas,$this->db);
        return $conn;
    }

}


?>