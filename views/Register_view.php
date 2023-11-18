
<!DOCTYPE html>
<html lang="es">
<body>

<?php

require_once("C:/xampp/htdocs/TiendaMVC/models/usuarios_model.php");

?>

<form method="post">
    <label >nick:</label>
    <input type="text" name="nick"><br><br>
    <label >mail:</label>
    <input type="text" name="mail"><br><br>
    <label >Contraseña:</label>
    <input type="text" name="password"><br><br>
    <label >Contraseña confirmada:</label>
    <input type="text" name="passwordC"><br><br>

    <input type="submit" name="enviar" >
</form>
<button name="home"><a href="LogIn_view.php"> LogIn </a> </button>

<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    if ($_POST["password"] == $_POST["passwordC"]){
        usuarios_model:: addUsuario($_POST["nick"],$_POST["mail"], $_POST["password"], "N");
    }else{
        echo "contraseñas diferentes";
    }

}
?>

</body>
<head>
    <meta charset="UTF-8" />
    <title>Log In</title>

</head>
</html>
