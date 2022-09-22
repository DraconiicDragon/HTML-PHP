<?php

    require_once 'Conexao.php';

    class DaoVenda {

        public function __construct() {
        }

        public function getLista() {
            $sql = 'select * from venda';
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

        public function incluir(Venda $venda) {
            $sql = 'insert into venda (valor, dataVenda, idCliente, idFuncionario) values (?, ?, ?, ?)';
            try {
                $pst = Conexao::getPreparedStatement($sql);
                $pst->bindValue(1, $venda->getValor());
                $pst->bindValue(2, $venda->getDataVenda());
                $pst->bindValue(3, $venda->getIdCliente());
                $pst->bindValue(4, $venda->getIdFuncionario());

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

        public function alterar($venda) {

        }

        public function remover($venda) {

        }

        public function localizar($id) {

        }


    }     
?>