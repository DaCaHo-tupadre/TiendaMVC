<?php
    include_once ("C:/xampp/htdocs/TiendaMVC/db/bd.php");

    class usuarios_controller{

        private $tabla;

        private $bd;



        public function __construct()
        {
            $this->bd=Conectar::conexion();
            $this->tabla = "usuarios";
        }

        public function crearUsuario($nick, $password, $mail, $admin){
            $sql = "INSERT INTO `$this->tabla` ('nick','mail','password','admin') VALUES('$nick','$password','$mail','$admin')";

            $consulta->$this->bd->query($sql);

        }


    }

?>
