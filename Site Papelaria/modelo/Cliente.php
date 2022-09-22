<?php

    class Cliente {
        private $id;
        private $nome;
        private $telefone;
        private $rua;
        private $bairro;
        private $cidade;

        public function __construct() {
            
        }
        
        public function getId() 
        {
            return $this->id;
        }

        public function setId($id) 
        {
            $this->id = $id;
        }

        public function getNome() 
        {
            return $this->nome;
        }

        public function setNome($nome) 
        {
            $this->nome = $nome;
        }

        public function getTelefone() 
        {
            return $this->telefone;
        }

        public function setTelefone($telefone) 
        {
            $this->telefone = $telefone;
        }
    
        public function getRua()
        {
                return $this->rua;
        }

        public function setRua($rua)
        {
                $this->rua = $rua;
        }

        public function getBairro()
        {
                return $this->bairro;
        }


        public function setBairro($bairro)
        {
                $this->bairro = $bairro;
        }

        public function getCidade()
        {
                return $this->cidade;
        }

        public function setCidade($cidade)
        {
                $this->cidade = $cidade;
        }
    }

?>