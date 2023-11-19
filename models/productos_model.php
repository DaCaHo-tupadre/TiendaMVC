<?php
require_once ("C:/xampp/htdocs/TiendaMVC/controllers/productos_controller.php");


class productos_model{

    public static function addProducto($nick,$password){

        $categoria = new categoria_controller();
        $categoria -> addCategoria($nick,$password);

    }
    public static function modProducto($id,$nombre,$descripcion){

        $categoria = new categoria_controller();
        $categoria -> modCategoria($id,$nombre,$descripcion);
    }
    public static function delProducto($id){
        $categoria = new categoria_controller();
        $categoria ->delCategoria($id);
    }
    public static function viewProducto(){

        $producto = new producto_controller();
        return $producto ->viewProducto();
    }
    public static function LogInUsuario($nick, $password){

        $usuarios = new usuarios_controller();
        $usuario = $usuarios ->existUsu($nick, $password);

        if ($usuario == null){
            echo "usuario incorrecto";
        }else{
            session_start();
            foreach ($usuario as $us){
                $_SESSION["id"] =$us["id"];
                $_SESSION["nick"]=$us["nick"];
                $_SESSION["mail"]=$us["mail"];
                $_SESSION["password"]=$us["password"];
                $_SESSION["admin"]=$us["admin"];
            }

            header("Location: ../views/Menu_view.php");
        }

    }

}



?>

