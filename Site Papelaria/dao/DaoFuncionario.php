<?php

require_once ('Conexao.php');

class DaoFuncionario {

    public function __construct() {
    }
    
    public function getLista() {
        $sql = 'select * from funcionario;';
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

    public function incluir(Funcionario $funcionario) {
        $sql = 'insert into funcionario (nome, cpf, telefone, salario, rua, bairro, cidade, ativo) values (?, ?, ?, ?, ?, ?, ?, ?)';
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1, $funcionario->getNome());
            $pst->bindValue(2, $funcionario->getCpf());
            $pst->bindValue(3, $funcionario->getTelefone());
            $pst->bindValue(4, $funcionario->getSalario());
            $pst->bindValue(5, $funcionario->getRua());
            $pst->bindValue(6, $funcionario->getBairro());
            $pst->bindValue(7, $funcionario->getCidade());
            $pst->bindValue(8, $funcionario->getAtivo());

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