<?php
    require_once ("C:/xampp/htdocs/TiendaMVC/controllers/usuarios_controller.php");


    class usuarios_model{

        public static function addUsuario($nick,$password, $mail, $admin){

            $usuario = new usuarios_controller();
            $usuario -> addUsuario($nick,$password, $mail, $admin);

        }
        public static function modUsuario($id,$nick,$password, $mail, $admin){

            $usuario = new usuarios_controller();
            $usuario -> modUsuario($id,$nick,$password, $mail, $admin);
        }
        public static function delUsuario($id){
            $usuario = new usuarios_controller();
            return $usuario ->delUsuario($id);
        }
        public static function viewUsuarios(){

            $usuario = new usuarios_controller();
            return $usuario ->viewUsuario();
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

