<body>

<?php
require_once ("C:/xampp/htdocs/TiendaMVC/models/productos_model.php");
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
    <p>Añadir Producto</p>
    <label ><span>Nombre:</span><input type="text" name="nombre" ><br><br></label>

    <label ><span>Precio:</span><input type="text" name="precio"><br><br></label>

    <label ><span>Stock:</span><input type="text" name="stock"><br><br></label>

    <label ><span>Categoria:</span><select name="categoria">
            <?php

            $datos = categoria_model::viewCategoria();

            foreach($datos as $dato){?>

                <option value="<?php echo $dato["id"] ?>"> <?php echo $dato["nombre"] ?> </option>

            <?php }?>
        </select></label>

    <input type="submit" name="Crear" >
    <button name="home"><a href="menu_admin.html"> Atras </a> </button>
</form>
    </div>
</div>


<?php
if($_SERVER['REQUEST_METHOD']=='POST') {

    productos_model::addProducto($_POST["nombre"],$_POST["precio"], $_POST["stock"],$_POST["categoria"]);

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
