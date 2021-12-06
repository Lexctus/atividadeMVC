<?php   
class Database{

    private $conn;

    /* Conexão com o banco */
    public function getConnection(){
        $this->conn = new mysqli("pw3", "root", "", "pessoa");
    }
    
    public function execReader($sql)
    {
        return $this->conn->query($sql);
    }
    /* Proteção contra SQLinjection */
    public function execSQL($sql)
    {

        return $this->conn->prepare($sql);
    }
}