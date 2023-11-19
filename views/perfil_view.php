<body>

<?php

require_once("C:/xampp/htdocs/TiendaMVC/models/usuarios_model.php");
    session_start()
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
    <label ><span>Nick</span><input type="text" name="nick" value="<?php echo $_SESSION["nick"];?>" ><br><br></label>

    <label ><span>Mail</span> <input type="text" name="mail" value="<?php echo $_SESSION["mail"];?>"><br><br></label>

    <label ><span>Contraseña</span><input type="password" name="password" value="<?php echo $_SESSION["password"];?>"><br><br></label>

    <label ><span>Confirmar Contraseña</span><input type="password" name="passwordC" value="<?php echo $_SESSION["password"];?>"><br><br></label>


    <input type="submit" name="Modificar" value="Modificar">
    <button name="home"><a href="menu_admin.html"> Atras </a> </button>
</form>
    </div>
</div>


<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    if ($_POST["password"] == $_POST["passwordC"]){
        $_SESSION["nick"] = $_POST["nick"];
        $_SESSION["mail"] = $_POST["mail"];
        $_SESSION["password"] = $_POST["password"];
        usuarios_model:: modPerfilUsuario($_SESSION["id"],$_POST["nick"],$_POST["mail"], $_POST["password"]);

        header("Refresh:0.1");
    }else{
        echo "contraseñas diferentes";
    }

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
