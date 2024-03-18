<?php
	include_once("modelo/UsuarioDAO_class.php");

	class ListarUsuario{
	
		public function __construct(){
			//****** acessar o modelo
			$dao = new UsuarioDAO();

			//iniciou a conexão com o BD
			$lista = $dao->listar(
				//"select * from usuario"
			);
			
			//vou passar a lista para a visão
			include_once("visao/listar.php");
		}
	}
?>