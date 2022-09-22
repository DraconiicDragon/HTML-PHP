<?php
    class Funcionario {
        private $id;
        private $nome;
        private $cpf;
        private $telefone;
        private $salario;
        private $rua;
        private $numero;
        private $bairro;
        private $cidade;
        private $ativo;
        
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

        public function getNumero()
        {
                return $this->numero;
        }

        public function setNumero($numero)
        {
                $this->numero = $numero;

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

        public function getCpf()
        {
                return $this->cpf;
        }

        public function setCpf($cpf)
        {
                $this->cpf = $cpf;

                return $this;
        }

        public function getSalario()
        {
                return $this->salario;
        }

        public function setSalario($salario)
        {
                $this->salario = $salario;

                return $this;
        }

        public function getAtivo()
        {
                return $this->ativo;
        }

        public function setAtivo($ativo)
        {
                $this->ativo = $ativo;

                return $this;
        }
    }
?>