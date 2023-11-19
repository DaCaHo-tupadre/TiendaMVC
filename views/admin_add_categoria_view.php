<body>

<?php

require_once("C:/xampp/htdocs/TiendaMVC/models/categoria_model.php");

?>
<div class="icon-bar">
    <a href="menu_admin.html"><img src="../img/icon_admin.png"></a>
    <a href="tienda_view.php"><img src="../img/icon_tienda.png"></a>
    <a href="carrito_view.php"><img src="../img/icon_carrito.png"></a>
    <a href="perfil_view.php"><img src="../img/icon_usuario.png"></a>
</div>


<form method="post">
    <label >nombre:</label>
    <input type="text" name="nombre" ><br><br>
    <label >descripcion:</label>
    <input type="text" name="descripcion"><br><br>
    <input type="submit" name="Crear" >
</form>
<button name="home"><a href="menu_admin.html"> Atras </a> </button>

<?php
if($_SERVER['REQUEST_METHOD']=='POST') {

    categoria_model::addCategoria($_POST["nombre"],$_POST["descripcion"]);

}
?>

</body>
<head>
    <meta charset="UTF-8" />
    <title>Log In</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
</html>
