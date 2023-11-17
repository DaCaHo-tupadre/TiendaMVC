<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "dacaho", "1234", "mvc");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>