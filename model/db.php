<?php
class Conexion
{
    private static Conexion $instancia;

    public static function init(): Conexion
    {
        if (!isset(self::$instancia)) {
            self::$instancia = new Conexion();
        }
        return self::$instancia;
    }

    private $conexion;

    protected function __construct()
    {

        $this->conexion = new mysqli('localhost', 'root', '', 'soapsc_db');
    }

    public function getConexion()
    {
        return $this->conexion;
    }
}
