<?php
class ConnectionFactory {
    public $con = null;
    public $dbType = "pgsql";
    //public $host = "localhost"; // Remova a porta daqui
	public $host = "db_lucas-postgres-1";
    public $port = "5432"; // Adicione a porta como um atributo separado
    public $user = "admin";
    public $senha = "admin";
    public $db = "db_lucas";
    public $persistente = false;

    public function __construct($persistente = false) {
        if ($persistente != false) {
            $this->persistente = true;
        }
    }

    public function getConnection() {
        try {
            // Persistent Data Object
            // Persistência de dados - manipular BD 
            $this->con = new PDO(
                $this->dbType . ":host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db,
                $this->user,
                $this->senha,
                array(
                    PDO::ATTR_PERSISTENT => $this->persistente,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                )
            );
            return $this->con;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    public function close() {
        if ($this->con != null) {
            $this->con = null;
        }
    }
}
?>
