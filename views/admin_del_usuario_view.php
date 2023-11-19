<?php  require_once("C:/xampp/htdocs/TiendaMVC/models/usuarios_model.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>

    <title>Alumnos</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>


<div class="icon-bar">
    <a href="menu_admin.html"><img src="../img/icon_admin.png"></a>
    <a href="tienda_view.php"><img src="../img/icon_tienda.png"></a>
    <a href="carrito_view.php"><img src="../img/icon_carrito.png"></a>
    <a href="perfil_view.php"><img src="../img/icon_usuario.png"></a>
</div>

<table class="customers">
    <tr>
        <td>id</td>
        <td>nick</td>
        <td>mail</td>
        <td>password</td>
        <td>admin</td>
    </tr>

    <?php
    echo "<hr/>";

    $datos = usuarios_model::viewUsuarios();


    foreach ($datos as $dato) {
        ?>
        <form method="POST">
            <tr>
                <td>
                    <input type="text" name="id" value="<?php echo $dato["id"]?>"  readonly>
                </td>
                <td>
                    <input type="text" name="nick" value="<?php echo $dato["nick"]?>" readonly>
                </td>
                <td>
                    <input type="text" name="mail" value="<?php echo $dato["mail"]?>" readonly>
                </td>
                <td>
                    <input type="text" name="password" value="<?php echo $dato["password"]?>" readonly>
                </td>
                <td>
                    <input type="text" name="admin" value="<?php echo $dato["admin"]?>" maxlength="1" readonly>
                </td>
                <td>

                    <input type="submit" name="idU" value="Borrar" >

                </td>
            </tr>
        </form>
        <?php
    }
    ?>
    <?php
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        ?>
        <p>Seguro que desea eliminar usuario con el siguiente id?</p>
        <form method="post">
            <input type="text" name="id" value="<?php echo $_POST["id"]?>" readonly >
            <button name="si" value="si">si</a></button>
            <button name="no" value="no">no</a></button>
            </form><?php

            if (isset($_POST["si"])) {
                usuarios_model::delUsuario($_POST["id"]);
                header("Refresh:0.1");
            } else if (isset($_POST["no"])) {
                header("Refresh:0.1");
        }
    }
    ?>
</table>
<button name="home"><a href="menu_admin.html"> Volver al menu </a> </button>
</body>
</html>