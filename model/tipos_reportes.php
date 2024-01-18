<?php
require('./model/db.php');
class TipoReportes
{

    private $ConexionBD;
    private $conn;

    public function __construct()
    {
        $this->ConexionBD = Conexion::init();
        $this->conn = $this->ConexionBD->getConexion();
    }

    public function get(): bool
    {

        return $this->conn->query("");
    }

    function set(): bool
    {

        return true;
    }

    function remove(): bool
    {

        return true;
    }

    function add(): bool
    {

        return true;
    }
}
?>
