<?php
require_once ("C:/xampp/htdocs/TiendaMVC/controllers/carrito_controller.php");

class carrito_model{

    public static function viewCarrito($id){

        $carrito = new carrito_controller();
        return $carrito->viewCarrito($id);
    }
    public static function addProductoCarrito($producto,$cantidad,$precio,$usuario){

        $carrito = new carrito_controller();
        $carrito -> addProductoCarrito($producto,$cantidad,$precio,$usuario);

    }
}


?>
