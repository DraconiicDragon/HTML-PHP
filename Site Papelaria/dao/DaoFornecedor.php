<?php

require_once ('Conexao.php');

class DaoFornecedor {

    public function __construct() {
    }
    
    public function getLista() {
        $sql = 'select * from fornecedor';
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

    public function incluir(Fornecedor $fornecedor) {
        $sql = 'insert into fornecedor (nome, telefone, descricao, rua, numero, bairro, cidade) values (?, ?, ?, ?, ?, ?, ?)';
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1, $fornecedor->getNome());
            $pst->bindValue(2, $fornecedor->getTelefone());
            $pst->bindValue(3, $fornecedor->getDescricao());
            $pst->bindValue(4, $fornecedor->getRua());
            $pst->bindValue(5, $fornecedor->getNumero());
            $pst->bindValue(6, $fornecedor->getBairro());
            $pst->bindValue(7, $fornecedor->getCidade());

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