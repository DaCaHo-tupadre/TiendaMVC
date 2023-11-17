
<!DOCTYPE html>
<html lang="es">
<body>

<?php

require_once("C:/xampp/htdocs/TiendaMVC/models/usuarios_model.php");

?>

<form method="post">
    <label >nombre:</label>
    <input type="text" name="nombre"><br><br>
    <label >Password:</label>
    <input type="text" name="password"><br><br>
    <input type="submit" name="enviar" >
</form>
<button name="home"><a href="Register.php"> Registrarse </a> </button>

<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
   usuarios_model:: existUsuario($_POST["nombre"], $_POST["password"]);
}
?>

</body>
<head>
    <meta charset="UTF-8" />
    <title>Log In</title>

</head>
</html>
