<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="../css/Style.css">
</head>
<body>

    <?php include "../menu/Menu.php"; ?>

    <h1>Cadastro de Produtos</h1>

    <?php
        require_once '../../dao/DaoProduto.php';
        require_once '../../modelo/Produto.php';

        $nome = $_POST['nome'];
        $unidade = $_POST['unidade'];
        $estoque = $_POST['estoque'];
        $precoVenda = $_POST['precoVenda'];
        $precoCompra = $_POST['precoCompra'];
        $fornecedor = $_POST['fornecedor'];

        $produto = new Produto();
        $produto->setNome($nome);
        $produto->setUnidade($unidade);
        $produto->setEstoque($estoque);
        $produto->setPrecoVenda($precoVenda);
        $produto->setPrecoCompra($precoCompra);
        $produto->setFornecedor($fornecedor);

        $daoProduto = new DaoProduto();

        if($daoProduto->incluir($produto)) {
            echo 'Produto cadastrado com sucesso';

        } else {
            echo 'Erro ao cadastrar produto';
        }
    ?>

</body>
</html>