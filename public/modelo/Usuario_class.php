<?php
    class Usuario{

        private $id;
        private $nome;
        private $email;
        private $salario;
        private $data_nascimento;
        private $foto;

        public function __contruct(){
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setNome($nome){
            $this->nome = $nome;    
        }

        public function setEmail($email){
            $this->email = $email;    
        }
        public function setSalario($salario){
            $this->salario = $salario;
        }
        public function setDataNascimento($data_nascimento){
            $this->data_nascimento = $data_nascimento;    
        }
        public function setFoto($foto){
            $this->foto = $foto;    
        }

        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nome;    
        }

        public function getEmail(){
            return $this->email;   
        }
        public function getSalario(){
            return $this->salario;
        }
        public function getDataNascimento(){
            return $this->data_nascimento;    
        }
        public function getFoto(){
            return $this->foto;    
        }
    }
?>