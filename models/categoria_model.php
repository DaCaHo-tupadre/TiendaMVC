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

