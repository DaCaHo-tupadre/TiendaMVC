<?php
include_once ("C:/xampp/htdocs/TiendaMVC/db/bd.php");

class producto_controller{

private $tabla;

private $bd;

private $producto;


public function __construct()
{
$this->bd=Conectar::conexion();
$this->tabla = "productos";
}

public function addProducto( $nombre,$precio,$stock,$categoria){
$sql = "INSERT INTO `$this->tabla`( `nombre`, `precio`, `stock`, `categoria`)
VALUES ('$nombre','$precio','$stock','$categoria')";

$consulta=$this->bd->query($sql);

}
public function modProducto($id,$nombre,$descripcion){

$sql = "UPDATE `$this->tabla` SET `nombre` = '$nombre', `descripcion` = '$descripcion'
WHERE  `id` = $id ";
$consulta=$this->bd->query($sql);
}
public function delProducto($id){
$sql = "DELETE FROM `$this->tabla` WHERE `id` = $id";
$consulta=$this->bd->query($sql);
}
public function viewProducto(){
$sql="select * from `$this->tabla` ";
$consulta=$this->bd->query($sql);

$this->producto=$consulta;

return $this->producto;
}


}

?>
