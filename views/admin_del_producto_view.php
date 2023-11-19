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
                    <input type="text" name="id" value="<?php echo $datoP["id"]?>"  readonly>
                </td>
                <td>
                    <input type="text" name="nombre" value="<?php echo $datoP["nombre"]?>" readonly>
                </td>
                <td>
                    <input type="text" name="precio" value="<?php echo $datoP["precio"]?>€" readonly>
                </td>
                <td>
                    <input type="text" name="stock" value="<?php echo $datoP["stock"]?>" readonly>
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

                <input type="submit" name="idU" value="Borrar" >

            </td>
            </tr>
        </form>
            <?php
            }


    if ($_SERVER['REQUEST_METHOD']=='POST') {
        ?>
        <p>Seguro que desea eliminar el producto con el siguiente id?</p>
        <form method="post">
        <input type="text" name="id" value="<?php echo $_POST["id"]?>" readonly >
        <button name="si" value="si">si</a></button>
        <button name="no" value="no">no</a></button>
        </form><?php

        if (isset($_POST["si"])) {
            productos_model::delProducto($_POST["id"]);
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