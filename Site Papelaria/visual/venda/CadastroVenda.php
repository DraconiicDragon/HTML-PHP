<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
    <link rel="stylesheet" href="../css/Style.css">
</head>
<body>

    <?php include "../menu/Menu.php"; ?>

    <h1>Vendas</h1>

    <?php
        require_once '../../dao/DaoVenda.php';
        require_once '../../modelo/Venda.php';

        $valor = $_POST['valor'];
        $dataVenda = $_POST['dataVenda'];
        $funcionario = $_POST['funcionario'];
        $cliente = $_POST['cliente'];

        $venda = new Venda();
        $venda->setValor($valor);
        $venda->setDataVenda($dataVenda);
        $venda->setIdCliente($cliente);
        $venda->setIdFuncionario($funcionario);

        $daoVenda = new DaoVenda();

        if($daoVenda->incluir($venda)) {
            echo 'Venda cadastrada com sucesso';

        } else {
            echo 'Erro ao cadastrar venda';
        }
    ?>
    <br>

</body>
</html>