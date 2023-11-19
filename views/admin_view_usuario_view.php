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
        <tr>
            <td><?php echo $dato["id"]?></td>
            <td><?php echo $dato["nick"]?></td>
            <td><?php echo $dato["mail"]?></td>
            <td><?php echo $dato["password"]?></td>
            <td><?php echo $dato["admin"]?></td>

        </tr>
<?php
}
?>
</table>

<button name="home"><a href="menu_admin.html"> Volver al menu </a> </button>
</body>
</html>