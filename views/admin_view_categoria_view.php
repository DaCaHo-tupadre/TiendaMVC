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
        <td>descripcion</td>
    </tr>

    <?php
    echo "<hr/>";

    $datos = categoria_model::viewCategoria();

    foreach ($datos as $dato) {
        ?>
        <tr>
            <td><?php echo $dato["id"]?></td>
            <td><?php echo $dato["nombre"]?></td>
            <td><?php echo $dato["descripcion"]?></td>

        </tr>
        <?php
    }
    ?>
</table>

<button name="home"><a href="menu_admin.html"> Volver al menu </a> </button>
</body>
</html>