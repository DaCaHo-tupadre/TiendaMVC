<?php
    include_once ("C:/xampp/htdocs/TiendaMVC/db/bd.php");

    class usuarios_controller{

        private $tabla;

        private $bd;

        private $usuario;



        public function __construct()
        {
            $this->bd=Conectar::conexion();
            $this->tabla = "usuarios";
        }

        public function crearUsuario($nick,  $mail,$password, $admin){
            $sql = "INSERT INTO `$this->tabla`( `nick`, `mail`, `password`,`admin`) 
                    VALUES ('$nick','$mail','$password','$admin')";

            $consulta=$this->bd->query($sql);

        }
        public function  existUsu($nick,$password){

            $sql="select * from `$this->tabla` WHERE nick = '$nick' AND password = '$password' ";
            $consulta=$this->bd->query($sql);

            $this->usuario=$consulta;

            return $this->usuario;

        }


    }

?>
