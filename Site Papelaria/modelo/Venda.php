<?php

    class Venda {

        private $id;
        private $valor;
        private $dataVenda;
        private $idCliente;
        private $idFuncionario;

        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        public function getValor()
        {
                return $this->valor;
        }

        public function setValor($valor)
        {
                $this->valor = $valor;

                return $this;
        }

        public function getDataVenda()
        {
                return $this->dataVenda;
        }

        public function setDataVenda($dataVenda)
        {
                $this->dataVenda = $dataVenda;

                return $this;
        }

        public function getIdCliente()
        {
                return $this->idCliente;
        }

        public function setIdCliente($idCliente)
        {
                $this->idCliente = $idCliente;

                return $this;
        }

        public function getIdFuncionario()
        {
                return $this->idFuncionario;
        }

        public function setIdFuncionario($idFuncionario)
        {
                $this->idFuncionario = $idFuncionario;

                return $this;
        }
    }

?>