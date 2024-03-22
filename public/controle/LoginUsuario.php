<?php
    include_once("visao/login")
    include_once("modelo/UsuarioLogin.php");
    if(isset($_POST["login"])){

        $u = new UsuarioLogin();
				$u->setUsuario($_POST["usuario"]);
				$u->setPassword($_POST["password"]);

    }
?>
