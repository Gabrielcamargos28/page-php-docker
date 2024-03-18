<?php
//session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	if(isset($_GET["fun"])){
		//is + set => é setado? T Está vazio? F
		$fun = $_GET["fun"];
		
		if($fun == "cadastrar"){
			include_once("controle/CadastrarUsuario.php");
			$pag = new CadastrarUsuario();
			include_once("visao/listar.php");
			include_once("visao/footer.php");
		} elseif($fun == "listar"){
			include_once("controle/ListarUsuario.php");
			$pag = new ListarUsuario();
		}
	} else {
		include_once("controle/ListarUsuario.php");
		$pag = new ListarUsuario();
	}
?>