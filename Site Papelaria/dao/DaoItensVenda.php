<?php

    require_once 'Conexao.php';

    class DaoItensVenda {

        public function __construct() {
        }

        public function getLista() {
            $sql = 'select * from itensVenda';
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

        public function incluir(ItensVenda $itensVenda) {
            $sql = 'insert into itensVenda (quantidade, subtotal, idProduto, idVenda) values (?, ?, ?, ?)';
            try {
                $pst = Conexao::getPreparedStatement($sql);
                $pst->bindValue(1, $itensVenda->getQuantidade());
                $pst->bindValue(2, $itensVenda->getSubtotal());
                $pst->bindValue(3, $itensVenda->getIdProduto());
                $pst->bindValue(4, $itensVenda->getIdVenda());

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

        public function alterar($itensVenda) {

        }

        public function remover($itensVenda) {

        }

        public function localizar($id) {

        }


    }     
?>