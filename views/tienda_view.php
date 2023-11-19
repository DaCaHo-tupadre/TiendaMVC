<?php  require_once("C:/xampp/htdocs/TiendaMVC/models/productos_model.php"); ?>
<?php  require_once("C:/xampp/htdocs/TiendaMVC/models/carrito_model.php"); ?>
<?php  require_once("C:/xampp/htdocs/TiendaMVC/models/categoria_model.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>

    <title>Alumnos</title>
    <link rel="stylesheet" href="styles/stylesT.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>

<div class="icon-bar">
    <a href="menu_admin.html"><img src="../img/icon_admin.png"></a>
    <a href="tienda_view.php"><img src="../img/icon_tienda.png"></a>
    <a href="carrito_view.php"><img src="../img/icon_carrito.png"></a>
    <a href="perfil_view.php"><img src="../img/icon_usuario.png"></a>
</div>

<div class="prods">
<?php

    $datosP = productos_model::viewProducto();

    foreach ($datosP as $datoP){
        ?>
        <div class="prod" >
            <form method="post">
            <p name="nombre"> <?php echo $datoP["nombre"] ?></p>
            <p name="precio"> <?php echo $datoP["precio"] ?></p>
            <p name="stock"> <?php echo $datoP["stock"] ?></p>
            <?php

            $datosC = categoria_model::viewCategoria();

            foreach ($datosC as $datoC){
                if ($datoC["id"] == $datoP["categoria"] ){
            ?>
                <p> Categoria:</p>
                <p><?php echo $datoC["nombre"] ?> </p>
            <?php
            }
            }
            ?>

                <input type="hidden" name="idProducto" value="<?php echo $datoP["id"] ?>">
                <input type="hidden" name="precio" value="<?php echo $datoP["precio"] ?>">
                <button type="submit" name="agregarProducto">Agregar al Carrito</button>
            </form>
        </div>

        <?php


    }
    if (isset($_POST['agregarProducto'])) {
    session_start();
    carrito_model::addProductoCarrito($_POST["idProducto"],1,$_POST["precio"],$_SESSION["id"]);
    header("refresh: 0.01");

}
?>
</div>

<button name="home"><a href="menu_admin.html"> Volver al menu </a> </button>
</body>
</html