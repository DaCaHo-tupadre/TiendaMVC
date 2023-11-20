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
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $datoC["id"]?>" >
                <input type="hidden" name="producto" value="<?php echo $datoC["producto"]?>" >
                <td>  <button type="submit" name="mas">+</button></td>
                <td>  <button type="submit" name="menos">-</button></td>
            </form>

        </tr>
        <?php

    }
    if (isset($_POST['mas'])) {
        carrito_model::sumProductoCarrito($_POST["id"],$_POST["producto"]);
        header("refresh: 0.01");

    }
    if (isset($_POST['menos'])) {

        carrito_model::restProductoCarrito($_POST["id"],$_POST["producto"]);
        header("refresh: 0.01");

    }

    ?>
</table>

<button name="home"><a href="menu_admin.html"> Volver al menu </a> </button>
</body>
</html