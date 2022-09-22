<?php
    class Produto {
        private $id;
        private $nome;
        private $unidade;
        private $estoque;
        private $precoVenda;
        private $precoCompra;
        private $fornecedor;

        public function __construct() {
        }

        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        public function getUnidade()
        {
                return $this->unidade;
        }

        public function setUnidade($unidade)
        {
                $this->unidade = $unidade;

                return $this;
        }

        public function getEstoque()
        {
                return $this->estoque;
        }

        public function setEstoque($estoque)
        {
                $this->estoque = $estoque;

                return $this;
        }

        public function getPrecoVenda()
        {
                return $this->precoVenda;
        }

        public function setPrecoVenda($precoVenda)
        {
                $this->precoVenda = $precoVenda;

                return $this;
        }

        public function getPrecoCompra()
        {
                return $this->precoCompra;
        }

        public function setPrecoCompra($precoCompra)
        {
                $this->precoCompra = $precoCompra;

                return $this;
        }

        public function getFornecedor()
        {
                return $this->fornecedor;
        }

        public function setFornecedor($fornecedor)
        {
                $this->fornecedor = $fornecedor;

                return $this;
        }
    }
    

?>