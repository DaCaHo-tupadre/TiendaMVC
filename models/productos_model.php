<?php
require_once ("C:/xampp/htdocs/TiendaMVC/controllers/productos_controller.php");


class productos_model{

    public static function addProducto($nombre,$precio,$stock,$categoria){

        $producto = new producto_controller();
        $producto -> addProducto($nombre,$precio,$stock,$categoria);

    }
    public static function modProducto($id,$nombre,$precio,$stock,$categoria){

        $producto = new producto_controller();
        $producto -> modProducto($id,$nombre,$precio,$stock,$categoria);
    }
    public static function delProducto($id){
        $producto = new producto_controller();
        $producto -> delProducto($id);
    }
    public static function viewProducto(){

        $producto = new producto_controller();
        return $producto ->viewProducto();
    }


}



?>

