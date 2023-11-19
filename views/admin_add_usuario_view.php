<body>

<?php

require_once("C:/xampp/htdocs/TiendaMVC/models/usuarios_model.php");

?>
<div class="icon-bar">
    <a href="menu_admin.html"><img src="../img/icon_admin.png"></a>
    <a href="tienda_view.php"><img src="../img/icon_tienda.png"></a>
    <a href="carrito_view.php"><img src="../img/icon_carrito.png"></a>
    <a href="perfil_view.php"><img src="../img/icon_usuario.png"></a>
</div>


<form method="post">
    <label >nick:</label>
    <input type="text" name="nick" ><br><br>
    <label >mail:</label>
    <input type="text" name="mail"><br><br>
    <label >Contraseña:</label>
    <input type="text" name="password"><br><br>
    <label >Contraseña confirmada:</label>
    <input type="text" name="passwordC"><br><br>
    <select name="rol">
            <option value="N"> Usuario Normal</option>
            <option value="A"> Administrador</option>
    </select>

    <input type="submit" name="Crear" >
</form>
<button name="home"><a href="menu_admin.html"> Atras </a> </button>

<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    if ($_POST["password"] == $_POST["passwordC"]){
        usuarios_model:: addUsuario($_POST["nick"],$_POST["mail"], $_POST["password"], $_POST["rol"]);

    }else{
        echo "contraseñas diferentes";
    }

}
?>

</body>
<head>
    <meta charset="UTF-8" />
    <title>Log In</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
</html>
