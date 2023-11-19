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

        public function addUsuario( $nick,  $mail,$password, $admin){
            $sql = "INSERT INTO `$this->tabla`( `nick`, `mail`, `password`,`admin`) 
                    VALUES ('$nick','$mail','$password','$admin')";

            $consulta=$this->bd->query($sql);

        }
        public function modUsuario($id,$nick, $mail,$password,$admin){

            $sql = "UPDATE `$this->tabla` SET `nick` = '$nick', `mail` = '$mail', `password`= '$password',`admin` ='$admin'
                        WHERE  `id` = $id ";
            $consulta=$this->bd->query($sql);
        }
        public function delUsuario($id){
            $sql = "DELETE FROM `$this->tabla` WHERE `id` = $id";
            $consulta=$this->bd->query($sql);
        }
        public function viewUsuario(){
            $sql="select * from `$this->tabla` ";
            $consulta=$this->bd->query($sql);

            $this->usuario=$consulta;

            return $this->usuario;
        }
        public function  existUsu($nick,$password){

            $sql="select * from `$this->tabla` WHERE nick = '$nick' AND password = '$password' ";
            $consulta=$this->bd->query($sql);

            $this->usuario=$consulta;

            return $this->usuario;

        }


    }

?>
