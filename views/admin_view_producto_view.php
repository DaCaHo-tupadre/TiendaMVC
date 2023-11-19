<?php  require_once("C:/xampp/htdocs/TiendaMVC/models/productos_model.php"); ?>
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
        <td>precio</td>
        <td>stock</td>
        <td>categoria</td>
    </tr>

    <?php
    echo "<hr/>";

    $datosC = categoria_model::viewCategoria();
    $datosP = productos_model::viewProducto();

    foreach ($datosP as $datoP){
        ?>
        <tr>
            <td><?php echo $datoP["id"]?></td>
        </tr>
        <tr>
            <td><?php echo $datoP["nombre"]?></td>
        </tr>
        <tr>
            <td><?php echo $datoP["precio"]?></td>
        </tr>
        <tr>
            <td><?php echo $datoP["stock"]?></td>
        </tr>

    <?php

    foreach ($datosC as $datoC) {
        if($datoC["id"]==$datoP["categoria"])
        ?>
        <tr>
            <td><?php echo $datoC["nombre"]?></td>
        </tr>
        <?php
        }
    }
    ?>
</table>

<button name="home"><a href="menu_admin.html"> Volver al menu </a> </button>
</body>
</html>