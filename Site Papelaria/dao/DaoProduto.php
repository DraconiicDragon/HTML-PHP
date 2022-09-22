<?php

    require_once 'Conexao.php';

    class DaoProduto {

        public function __construct() {
        }

        public function getLista() {
            $sql = 'select * from produto';
            $lista = array();
            try {
                $pst = Conexao::getPreparedStatement($sql);
                $pst->execute();
                $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
            } catch(PDOException $e) {
                echo($e->getMessage());
            }
            return $lista;
        }

        public function incluir(Produto $produto) {
            $sql = 'insert into produto (nome, unidade, estoque, precoVenda, precoCompra, idFornecedor) values (?, ?, ?, ?, ?, ?)';
            try {
                $pst = Conexao::getPreparedStatement($sql);
                $pst->bindValue(1, $produto->getNome());
                $pst->bindValue(2, $produto->getUnidade());
                $pst->bindValue(3, $produto->getEstoque());
                $pst->bindValue(4, $produto->getPrecoVenda());
                $pst->bindValue(5, $produto->getPrecoCompra());
                $pst->bindValue(6, $produto->getFornecedor());

                if($pst->execute()) {
                    return true;
                } else {
                    return false;
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function alterar($produto) {

        }

        public function remover($produto) {

        }

        public function localizar($id) {

        }


    }     
?>