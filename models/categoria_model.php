<?php
require_once ("C:/xampp/htdocs/TiendaMVC/controllers/categoria_controller.php");


class categoria_model{

    public static function addCategoria($nick,$password){

        $categoria = new categoria_controller();
        $categoria -> addCategoria($nick,$password);

    }
    public static function modCategoria($id,$nombre,$descripcion){

        $categoria = new categoria_controller();
        $categoria -> modCategoria($id,$nombre,$descripcion);
    }
    public static function delCategoria($id){
        $categoria = new categoria_controller();
        $categoria ->delCategoria($id);
    }
    public static function viewCategoria(){

        $categoria = new categoria_controller();
        return $categoria ->viewCategoria();
    }



}



?>

