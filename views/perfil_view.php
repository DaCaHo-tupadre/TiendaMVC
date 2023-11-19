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


<form method="post">
    <label >nick:</label>
    <input type="text" name="nick" value="<?php echo $_SESSION["nick"];?>" ><br><br>
    <label >mail:</label>
    <input type="text" name="mail" value="<?php echo $_SESSION["mail"];?>"><br><br>
    <label >Contraseña:</label>
    <input type="password" name="password" value="<?php echo $_SESSION["password"];?>"><br><br>
    <label >Contraseña confirmada:</label>
    <input type="password" name="passwordC" value="<?php echo $_SESSION["password"];?>"><br><br>

    <input type="submit" name="Modificar" >
</form>
<button name="home"><a href="menu_admin.html"> Atras </a> </button>

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
</head>
</html>
