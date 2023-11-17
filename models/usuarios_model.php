<?php
    require_once ("C:/xampp/htdocs/TiendaMVC/controllers/usuarios_controller.php");


    class usuarios_model{

        public static function addUsuario($nick,$password, $mail, $admin){

            $usuario = new usuarios_controller();
            $usuario ->crearUsuario($nick,$password, $mail, $admin);

        }
        public static function existUsuario($nick, $password){


        }

    }



?>

