<?php
require_once ("C:/xampp/htdocs/TiendaMVC/controllers/carrito_controller.php");

class carrito_model{

    public static function viewCarrito($id){

        $carrito = new carrito_controller();
        return $carrito->viewCarrito($id);
    }
    public static function addProductoCarrito($producto,$cantidad,$precio,$usuario){

        $carrito = new carrito_controller();
        $carrito->viewCarrito($usuario);
        $datos = self::viewCarrito($usuario);
        $i =0;
        foreach ($datos as $dato){
            if($i == 0){
                $carrito -> addProductoCarrito($producto,$cantidad,$precio,$usuario);
                $i+=1;
            }elseif($dato["producto"]==$producto  && $dato["usuario"]==$usuario && $i == 0){
                $carrito ->sumProductoCarrito($producto,$cantidad,$precio,$usuario);
                $i+=1;
            }

        }


    }
}


?>
