<?php  require_once("C:/xampp/htdocs/TiendaMVC/models/categoria_model.php");
require_once ("C:/xampp/htdocs/TiendaMVC/models/productos_model.php");
?>
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
        <td>Stock</td>
    </tr>

    <?php
    echo "<hr/>";

    $datosC = categoria_model::viewCategoria();
    $datosP = productos_model::viewProducto();


    foreach ($datosP as $datoP) {
        ?>
        <form method="POST">
            <tr>
                <td>
                    <input type="text" name="id" value="<?php echo $datoP["id"]?>"  >
                </td>
                <td>
                    <input type="text" name="nombre" value="<?php echo $datoP["nombre"]?>" >
                </td>
                <td>
                    <input type="text" name="precio" value="<?php echo $datoP["precio"]?>" >
                </td>
                <td>
                    <input type="text" name="stock" value="<?php echo $datoP["stock"]?>" >
                </td>
                <td>
                    <select name="categoria">
                        <?php

                        foreach ($datosC as $datoC) {
                            if($datoC["id"]==$datoP["categoria"]){
                                ?>

                                <option value="<?php echo $datoC["id"] ?>" selected> <?php echo $datoC["nombre"] ?> </option>


                                <?php
                            }else{
                                ?>

                                <option value="<?php echo $datoC["id"] ?>"> <?php echo $datoC["nombre"] ?> </option>

                                <?php
                            }
                        }
                        ?>
                    </select>
                </td>

                <td>

                    <input type="submit" name="idU" value="Modificar" >

                </td>
            </tr>
        </form>
        <?php
    }


    if ($_SERVER['REQUEST_METHOD']=='POST') {
        productos_model::modProducto($_POST["id"],$_POST["nombre"], $_POST["precio"], $_POST["stock"],$_POST["categoria"]);
        header("Refresh:0.001");
    }
    ?>
</table>
<button name="home"><a href="menu_admin.html"> Volver al menu </a> </button>
</body>
</html>