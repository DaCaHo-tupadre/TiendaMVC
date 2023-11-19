
<!DOCTYPE html>
<html lang="es">
<body>

<?php

require_once("C:/xampp/htdocs/TiendaMVC/models/usuarios_model.php");

?>
<div class="form-style-3">
    <div class="form">
<form method="post">
    <p> Iniciar Session</p>
    <label ><span>Nombre:</span><input type="text" name="nombre"><br><br></label>

    <label ><span>Contraseña:</span> <input type="password" name="password"><br><br></label>

    <input type="submit" name="enviar" >
</form>
        <button name="home"><a href="Register_view.php"> Registrarse </a> </button>
    </div>
</div>


<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
   usuarios_model:: LogInUsuario($_POST["nombre"], $_POST["password"]);
}
?>

</body>
<head>
    <meta charset="UTF-8" />
    <title>Log In</title>
    <link rel="stylesheet" href="styles/stylesF.css">
</head>
</html>
