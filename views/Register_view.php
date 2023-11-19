
<!DOCTYPE html>
<html lang="es">
<body>

<?php

require_once("C:/xampp/htdocs/TiendaMVC/models/usuarios_model.php");

?>
    <div class="form-style-3">
        <div class="form">
<form method="post">
    <p>Registro:</p>
    <label ><span> Nick</span> <input type="text" name="nick"><br><br> </label>
    <label ><span> Mail</span>:<input type="text" name="mail"><br><br></label>
    <label ><span> Contraseña</span>: <input type="password" name="password"><br><br></label>
    <label ><span> Contraseña confirmada:</span>  <input type="password" name="passwordC"><br><br></label>

    <input type="submit" name="enviar" >
    <button name="home"><a href="LogIn_view.php"> LogIn </a> </button>

</form>



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
    <link rel="stylesheet" href="styles/stylesF.css">
</head>
</html>
