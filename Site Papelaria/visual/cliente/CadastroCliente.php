<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="../css/Style.css">
</head>
<body>

    <?php include "../menu/Menu.php"; ?>
    
    <h1>Cadastro de Clientes</h1>

    <?php

        require_once "../../dao/DaoCliente.php";
        require_once "../../modelo/Cliente.php";

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];

        $cliente = new Cliente();
        $cliente->setNome($nome);
        $cliente->setTelefone($telefone);
        $cliente->setRua($rua);
        $cliente->setBairro($bairro);
        $cliente->setCidade($cidade);

        $daoCliente = new DaoCliente();

        if($daoCliente->incluir($cliente)){
            echo 'Cliente cadastrado com sucesso';   
        } else {
            echo 'Erro ao cadastrar cliente';
        }       

    ?>

</body>
</html>