<?php

require_once 'Conexao.php';

class DaoCliente {

    public function __construct() {
    }

    public function getLista() {
        $sql = 'select * from cliente';
        $lista = array();
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->execute();
            $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo($e->getMessage());
        }
        return $lista;
    }

    public function incluir(Cliente $cliente) {

        $sql = 'insert into cliente (nome, telefone, rua, bairro, cidade) values (?, ?, ?, ?, ?)';
        
        try {

            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1, $cliente->getNome());
            $pst->bindValue(2, $cliente->getTelefone());
            $pst->bindValue(3, $cliente->getRua());
            $pst->bindValue(4, $cliente->getBairro());
            $pst->bindValue(5, $cliente->getCidade());

            if($pst->execute()) {
                return true;
            } else {
                return false;
            }

        } catch( PDOException $e) {

            echo($e->getMessage());
            return false;

        }
    }

    public function alterar($cidade) {

    }

    public function remover($cidade) {

    }

    public function localizar($id) {

    }
}

?>