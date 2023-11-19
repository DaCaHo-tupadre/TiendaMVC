<?php  require_once("C:/xampp/htdocs/TiendaMVC/models/productos_model.php"); ?>
<?php  require_once("C:/xampp/htdocs/TiendaMVC/models/carrito_model.php"); ?>
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

        <td>nombre</td>
        <td>precio</td>
        <td>stock</td>
        <td>categoria</td>
    </tr>

    <?php
    echo "<hr/>";
        session_start();
    $datosC = carrito_model::viewCarrito($_SESSION["id"]);
    $datosP = productos_model::viewProducto();

    foreach ($datosC as $datoC){
        ?>
        <tr>
            <?php
            foreach ($datosP as $datoP) {
            if($datoP["id"]==$datoC["producto"]){
            ?>

            <td><?php echo $datoP["nombre"]?></td>

    <?php
            }
        }
        ?>

        <td><?php echo $datoC["cantidad"]?></td>

        <td><?php echo ($datoC["cantidad"]*$datoC["precio"])?></td>

        </tr>
        <?php

    }
    ?>
</table>

<button name="home"><a href="menu_admin.html"> Volver al menu </a> </button>
</body>
</html