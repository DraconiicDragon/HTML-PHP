<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedores</title>
    <link rel="stylesheet" href="../css/Style.css">
</head>
<body>
    
    <?php include "../menu/Menu.php"; ?>

    <h1>Cadastro de Fornecedores</h1>

    <?php

        require_once "../../dao/DaoFornecedor.php";
        require_once "../../modelo/Fornecedor.php";

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $descricao = $_POST['descricao'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];

        $fornecedor = new Fornecedor();
        $fornecedor->setNome($nome);
        $fornecedor->setTelefone($telefone);
        $fornecedor->setDescricao($descricao);
        $fornecedor->setNumero($numero);
        $fornecedor->setBairro($bairro);
        $fornecedor->setCidade($cidade);

        $daoFornecedor = new DaoFornecedor();

        if($daoFornecedor->incluir($fornecedor)) {
            echo 'Fornecedor cadastrado com sucesso';
        } else {
            echo 'Erro ao cadastrar fornecedor';
        }

    ?>

</body>
</html>