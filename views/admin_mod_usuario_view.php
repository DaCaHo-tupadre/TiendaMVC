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
        <form method="post">
        <tr>
            <td>
                <input type="text" name="id" value="<?php echo $dato["id"]?>" readonly >
            </td>
            <td>
                <input type="text" name="nick" value="<?php echo $dato["nick"]?>" >
            </td>
            <td>
                <input type="text" name="mail" value="<?php echo $dato["mail"]?>" >
            </td>
            <td>
                <input type="text" name="password" value="<?php echo $dato["password"]?>" >
            </td>
            <td>
                <input type="text" name="admin" value="<?php echo $dato["admin"]?>" maxlength="1">
            </td>
            <td>

                    <input type="submit" name="idU" value="Modificar" >

            </td>
        </tr>
        </form>
        <?php
    }
    ?>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST') {

        usuarios_model::modUsuario($_POST["id"], $_POST["nick"], $_POST["mail"], $_POST["password"], $_POST["admin"]);
        header("Refresh:0.001");
    }
    ?>
</table>
<button name="home"><a href="menu_admin.html"> Volver al menu </a> </button>
</body>
</html>