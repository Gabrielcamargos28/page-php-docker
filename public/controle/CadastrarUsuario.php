<?php
	//include_once("../modelo/DestaqueDAO_class.php");
	include_once("modelo/UsuarioDAO_class.php");
	//include_once("../modelo/Destaque_class.php");
	//include_once("./modelo/Usuario_class.php");
	include_once("modelo/Usuario_class.php");
	//include_once("../visao/formCadastroDestaque.php");
	include_once("index.php");
	class CadastrarUsuario{
	
		public function __construct(){
			
			if(isset($_POST["enviar"])){
				//formulário enviar foi enviado
				
				$u = new Usuario();
				$u->setNome($_POST["nome"]);
				$u->setEmail($_POST["email"]);
                $u->setSalario($_POST["salario"]);
				$u->setDataNascimento($_POST["data_nascimento"]);
				
				$fotoNome = $_FILES["foto"]["name"];
				$fotoCaminhoTemporario = $_FILES["foto"]["tmp_name"];
				move_uploaded_file($fotoCaminhoTemporario, "assets/img/usuario/{$fotoNome}");
				
				$u->setFoto("{$fotoNome}");
				
				$dao = new UsuarioDAO();
				
				$dao->cadastrar($u);
				
				$status = "Cadastro de Usuario realizado " . $u->getNome() . 
				" efetuado com sucesso";
				include_once("visao/listar.php");

				
				

			} else{
				echo "nao é enviar";
				include_once("index.php");
			}
		}
	}
?>