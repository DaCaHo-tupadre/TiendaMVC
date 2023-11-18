<?php
   session_start();
?>

<?php if ($_SESSION["admin"] == "A") { ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Personas</title>
    </head>
    <body>
    <div>
        <a href="menu_admin.html"><img src="../img/icon_admin.png"></a>
        <a href="tienda_view.php"><img src="../img/icon_tienda.png"></a>
        <a href="carrito_view.php"><img src="../img/icon_carrito.png"></a>
        <a href="perfil_view.php"><img src="../img/icon_usuario.png"></a>
    </div>


    </body>
    </html>
<?php }else{?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Personas</title>
    </head>
    <body>

    <div>
        <a href="admin_view.php"><img src="../img/icon_tienda.png"></a>
        <a href="admin_view.php"><img src="../img/icon_carrito.png.png"></a>
        <a href="admin_view.php"><img src="../img/icon_usuario.png.png"></a>
    </div>

    </body>
    </html>
<?php }?>
