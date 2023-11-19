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


}
?>