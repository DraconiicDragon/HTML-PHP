<?php

    class ItensVenda {
        
        private $id;
        private $quantidade;
        private $subtotal;
        private $idProduto;
        private $idVenda;
        
        public function getId()
        {
                return $this->id;
        }
 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        public function getQuantidade()
        {
                return $this->quantidade;
        }

        public function setQuantidade($quantidade)
        {
                $this->quantidade = $quantidade;

                return $this;
        }

        public function getSubtotal()
        {
                return $this->subtotal;
        }

        public function setSubtotal($subtotal)
        {
                $this->subtotal = $subtotal;

                return $this;
        }

        public function getIdProduto()
        {
                return $this->idProduto;
        }

        public function setIdProduto($idProduto)
        {
                $this->idProduto = $idProduto;

                return $this;
        }

        public function getIdVenda()
        {
                return $this->idVenda;
        }

        public function setIdVenda($idVenda)
        {
                $this->idVenda = $idVenda;

                return $this;
        }
    }

?>