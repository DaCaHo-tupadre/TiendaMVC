<?php


include_once ("C:/xampp/htdocs/TiendaMVC/db/bd.php");

class carrito_controller{

    private $tabla;

    private $bd;

    private $carrito;


    public function __construct()
    {
        $this->bd=Conectar::conexion();
        $this->tabla = "carrito";
    }

    public function viewCarrito($id){

        $sql="select * from `$this->tabla` WHERE `usuario` = $id ";
        $consulta=$this->bd->query($sql);

        $this->carrito=$consulta;

        return $this->carrito;
    }
    public function addProductoCarrito($producto,$cantidad,$precio,$usuario){

        $sql = "INSERT INTO `$this->tabla`( `producto`, `usuario`, `cantidad`, `precio`) 
                    VALUES ('$producto','$usuario','$cantidad','$precio')";
        $sql1 = "UPDATE `productos` SET `stock` = stock-1
                        WHERE  `id` = $producto ";

        $consulta=$this->bd->query($sql);
        $consulta=$this->bd->query($sql1);
    }
    public function sumProductoCarrito($producto,$cantidad,$precio,$usuario){

        $sql = "UPDATE `$this->tabla` SET `cantidad` = cantidad+1
                        WHERE  `producto` = $producto AND `usuario` = $usuario";
        $sql1 = "UPDATE `productos` SET `stock` = stock-1
                        WHERE  `id` = $producto ";

        $consulta=$this->bd->query($sql);
        $consulta=$this->bd->query($sql1);
    }
    public function restProductoCarrito($producto,$cantidad,$precio,$usuario){
        session_start();
        $sql = "UPDATE `$this->tabla` SET `cantidad` = cantidad-1
                        WHERE  `producto` = $producto AND `usuario` = $usuario";
        $sql1 = "UPDATE `productos` SET `stock` = stock-1
                        WHERE  `id` = $producto ";

        $consulta=$this->bd->query($sql);
        $consulta=$this->bd->query($sql1);
    }


}
?>