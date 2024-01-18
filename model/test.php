<?php
include('./model/db.php');
class Test
{
    private $ConexionBD;
    private $conn;

    public function __construct()
    {
        $this->ConexionBD = Conexion::init();
        $this->conn = $this->ConexionBD->getConexion();
    }

    public function get()
    {
        $query = "SELECT * FROM test";
        $result = $this->conn->query($query);
        $arr = [];
        $i = 0;

        while ($row = $result->fetch_assoc()) {
            $arr[$i] = $row;
            $i++;
        }

        return $arr;
    }

    function set(): bool
    {

        return true;
    }

    function remove($ID): bool
    {
        $query = "DELETE FROM test where id = $ID";
        return $this->conn->query($query);
    }

    function add(): bool
    {

        return true;
    }
}
