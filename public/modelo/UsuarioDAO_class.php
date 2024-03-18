<?php
	include_once("ConnectionFactory_class.php"); //PDO
	include_once("Usuario_class.php"); //entidade
    
	class UsuarioDAO{
		public $con = null; //obj recebe conexão
		//jdbc:postgresql://localhost:5433/task_controller?createDatabaseIfNotExist=true
		public function __construct(){
			$conF = new ConnectionFactory();
			$this->con = $conF->getConnection();
		}
        //cadastrar
		public function cadastrar($cont){
			try{
				$stmt = $this->con->prepare(
				"INSERT INTO usuario(nome, email,salario, data_nascimento, foto)
				VALUES (:nome, :email, :salario, :data_nascimento, :foto)");
				
				$stmt->bindValue(":nome", $cont->getNome());
				$stmt->bindValue(":email", $cont->getEmail());
				$stmt->bindValue(":data_nascimento", $cont->getDataNascimento());
                $stmt->bindValue(":salario", $cont->getSalario());
				$stmt->bindValue(":foto", $cont->getFoto());
				
				$stmt->execute(); //execução do SQL	
				
				/*$this->con->close();
				$this->con = null;*/	
			}
			catch(PDOException $ex){
				echo "Erro TESTE: " . $ex->getMessage();
			}
		}
		//listar

		public function listar($query = null){
			try{
				if($query == null){
					$dados = $this->con->query("SELECT * FROM usuario");
				} else {
					$dados = $this->con->query($query);
				}
		
				$lista = array();
				
				while ($linha = $dados->fetch(PDO::FETCH_ASSOC)) {
					$c = new Usuario();
					$c->setId($linha["id"]);
					$c->setNome($linha["nome"]);
					$c->setEmail($linha["email"]);
					$c->setSalario($linha["salario"]);
					$c->setDataNascimento($linha["data_nascimento"]);
					$c->setFoto($linha["foto"]);
		
					$lista[] = $c;
				}
		
				if(!empty($lista)){
					return $lista;
				} else {
					echo "Nenhum resultado";
					return array(); // Retorna um array vazio se não houver resultados
				}
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
		
		/*public function listar($query = null){
			
			try{
				if($query == null){
					$dados = $this->con->query("SELECT * FROM usuario");
				} else {
					$dados = $this->con->query($query);
				}		
				$lista = array();
				echo $dados;

				foreach($dados as $linha){
					$c = new Usuario();
					$c->setId($linha["id"]);
					$c->setNome($linha["nome"]);
                    $c->setEmail($linha["email"]);
					$c->setSalario($linha["salario"]);
					$c->setDataNascimento($linha["data_nascimento"]);
					$c->setFoto($linha["foto"]);
					
					$lista[] = $c;
					//preenchendo um array com objetos Contato
				}
				
				return $lista;	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}*/
    }
?>  