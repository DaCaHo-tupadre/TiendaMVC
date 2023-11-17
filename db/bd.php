<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "mehdi", "1234", "TiendaMVC");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>