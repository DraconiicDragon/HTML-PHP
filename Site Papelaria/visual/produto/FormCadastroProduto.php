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
    <div class="form">
        <h2>Dados</h2>
        <form action="CadastroProduto.php" method="post">

            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
            <br>

            <label for="unidade">Unidade</label>
            <select name="unidade" id="unidade">
                <option value="Unidade">Unidade</option>
                <option value="Pacote">Pacote</option>
            </select>
            <br>

            <label for="estoque">Estoque</label>
            <input type="number" name="estoque" id="estoque">
            <br>

            <label for="precoVenda">Preço de Venda</label>
            <input type="number" name="precoVenda" id="precoVenda">
            <br>

            <label for="precoCompra">Preço de Compra</label>
            <input type="number" name="precoCompra" id="precoCompra">
            <br>

            <label for="fornecedor">Fornecedor</label>
            <select name="fornecedor" id="fornecedor">
                <?php
                require_once '../../dao/DaoFornecedor.php';
                $daoFornecedor = new DaoFornecedor();
                $lista = $daoFornecedor->getLista();

                foreach ($lista as $linha) {
                    echo '<option value="' . $linha['id'] . '">' . $linha['nome'] . ' </option>';
                }
                ?>
            </select>
            <br>

            <button type="submit">Salvar</button>
            <br>

        </form>
    </div>

</body>

</html>