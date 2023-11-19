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
        <form method="post">
            <tr>
                <td>
                    <input type="text" name="id" value="<?php echo $dato["id"]?>" readonly >
                </td>
                <td>
                    <input type="text" name="nombre" value="<?php echo $dato["nombre"]?>" >
                </td>
                <td>
                    <input type="text" name="descripcion" value="<?php echo $dato["descripcion"]?>" >
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
        categoria_model::modCategoria($_POST["id"],$_POST["nombre"],$_POST["descripcion"]);
        header("Refresh:0.001");
    }
    ?>
</table>
<button name="home"><a href="menu_admin.html"> Volver al menu </a> </button>
</body>
</html>