<?php
include_once ("C:/xampp/htdocs/TiendaMVC/db/bd.php");

class categoria_controller{

    private $tabla;

    private $bd;

    private $categoria;


    public function __construct()
    {
        $this->bd=Conectar::conexion();
        $this->tabla = "categoria";
    }

    public function addCategoria( $nombre,  $descripcion){
        $sql = "INSERT INTO `$this->tabla`( `nombre`, `descripcion`) 
                    VALUES ('$nombre','$descripcion')";

        $consulta=$this->bd->query($sql);

    }
    public function modCategoria($id,$nombre,$descripcion){

        $sql = "UPDATE `$this->tabla` SET `nombre` = '$nombre', `descripcion` = '$descripcion'
                        WHERE  `id` = $id ";
        $consulta=$this->bd->query($sql);
    }
    public function delCategoria($id){
        $sql = "DELETE FROM `$this->tabla` WHERE `id` = $id";
        $consulta=$this->bd->query($sql);
    }
    public function viewCategoria(){
        $sql="select * from `$this->tabla` ";
        $consulta=$this->bd->query($sql);

        $this->categoria=$consulta;

        return $this->categoria;
    }


}

?>
