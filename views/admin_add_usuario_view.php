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

<div class="form-style-3">
    <div class="form">
<form method="post">
    <p>Añadir Usuario</p>
    <label ><span>Nick</span><input type="text" name="nick" ><br><br></label>
    <label ><span>Mail</span>   <input type="text" name="mail"><br><br></label>
    <label ><span>Contraseña</span><input type="text" name="password"><br><br></label>
    <label ><span>Contraseña confirmada:</span><input type="text" name="passwordC"><br><br></label>
    <label> <span>Rol</span><select name="rol">
            <option value="N"> Usuario Normal</option>
            <option value="A"> Administrador</option>
        </select>
    </label>

    <button name="home"><a href="menu_admin.html"> Atras </a> </button>
    <input type="submit" name="Crear" >
</form>
    </div>
</div>

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
    <link rel="stylesheet" href="styles/stylesF.css">
</head>
</html>
