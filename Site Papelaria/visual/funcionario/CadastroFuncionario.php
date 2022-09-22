<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionarios</title>
    <link rel="stylesheet" href="../css/Style.css">
</head>
<body>

    <?php include "../menu/Menu.php"; ?>

    <h1>Cadastro de Funcionarios</h1>

    <?php

        require_once "../../dao/DaoFuncionario.php";
        require_once "../../modelo/Funcionario.php";

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $salario = $_POST['salario'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];

        $funcionario = new Funcionario();
        $funcionario->setNome($nome);
        $funcionario->setCpf($cpf);
        $funcionario->setSalario($salario);
        $funcionario->setRua($rua);
        $funcionario->setNumero($numero);
        $funcionario->setBairro($bairro);
        $funcionario->setCidade($cidade);

        $daoFuncionario = new DaoFuncionario();

        if($daoFuncionario->incluir($funcionario)) {
            echo 'Funcionario cadastrado com sucesso';
        } else {
            echo 'Erro ao cadastrar funcionario';
        }
    ?>

</body>
</html>