<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (isset($_GET["fun"])){
    $fun = $_GET["fun"];

    if ($fun == "login") {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        
        if ($username == "Gabriel" && $password == "admin") {
        
            $_SESSION["username"] = $username;

            header("Location: index.php");
            exit;
        } else {
            echo "<p>Login inválido. Tente novamente.</p>";
            include_once("visao/login.php");
        }
    } else if ($fun == "cadastrar") {
		
		if(!isset($_SESSION["username"])){
			echo "<p>Login inválido. Tente novamente.</p>";
			include_once("visao/login.php");
			exit;
		}

        include_once("controle/CadastrarUsuario.php");
        $pag = new CadastrarUsuario();
        include_once("visao/listar.php");
        include_once("visao/footer.php");

    } elseif ($fun == "listar") {
		if(!isset($_SESSION["username"])){
			echo "<p>Login inválido. Tente novamente.</p>";
			include_once("visao/login.php");
			exit;
        }      
        include_once("controle/ListarUsuario.php");
        $pag = new ListarUsuario();
    }elseif($fun == "logout"){
        if(!isset($_SESSION["username"])){
            echo "<p>Logout</p>";
            //include_once("visao/logout.php");
            exit;
        }else{
            include_once("visao/logout.php");
        }
        
    }else {
    // Se não foi definido um "fun", por padrão lista os usuários
   // include_once("controle/ListarUsuario.php");
    //$pag = new ListarUsuario();
	header("Location: index.php");
}}
?>
