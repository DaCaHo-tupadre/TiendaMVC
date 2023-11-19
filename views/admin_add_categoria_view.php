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

<div class="form-style-3">
    <div class="form">
<form method="post">
    <p>Añadir Categoria</p>
    <label ><span>Nombre:</span><input type="text" name="nombre" ><br><br></label>

    <label ><span>Descripcion:</span><input type="textarea" name="descripcion"><br><br></label>

    <input type="submit" name="Crear" >
    <button name="home"><a href="menu_admin.html"> Atras </a> </button>
</form>
    </div >
</div >


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
    <link rel="stylesheet" href="styles/stylesF.css">

</head>
</html>
