<?php  require_once("C:/xampp/htdocs/TiendaMVC/models/categoria_model.php"); ?>
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
        <td>nombre</td>
        <td>desripcion</td>
    </tr>

    <?php
    echo "<hr/>";

    $datos = categoria_model::viewCategoria();


    foreach ($datos as $dato) {
        ?>
        <form method="POST">
            <tr>
                <td>
                    <input type="text" name="id" value="<?php echo $dato["id"]?>"  readonly>
                </td>
                <td>
                    <input type="text" name="nombre" value="<?php echo $dato["nombre"]?>" readonly>
                </td>
                <td>
                    <input type="text" name="descripcion" value="<?php echo $dato["descripcion"]?>" readonly>
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
        <p>Seguro que desea eliminar la categoria con el siguiente id?</p>
        <form method="post">
        <input type="text" name="id" value="<?php echo $_POST["id"]?>" readonly >
        <button name="si" value="si">si</a></button>
        <button name="no" value="no">no</a></button>
        </form><?php

        if (isset($_POST["si"])) {
            categoria_model::delCategoria($_POST["id"]);
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