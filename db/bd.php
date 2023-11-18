<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "mehdi", "1234", "tiendamvc");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>