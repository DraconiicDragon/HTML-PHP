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

    <div class="form">
        <h2>Dados</h2>
        <form action="CadastroVenda.php" method="post">

            <label for="valor">Valor</label>
            <input type="number" name="valor" id="valor" readonly>
            <br>

            <label for="dataVenda">Data da Venda</label>
            <input type="date" name="dataVenda" id="dataVenda">
            <br>

            <label for="funcionario">Funcionario</label>
            <select name="funcionario" id="funcionario">
                <?php
                require_once '../../dao/DaoFuncionario.php';
                $daoFuncionario = new DaoFuncionario();
                $lista = $daoFuncionario->getLista();

                foreach ($lista as $linha) {
                    echo '<option value="' . $linha['id'] . '">' . $linha['nome'] . ' </option>';
                }
                ?>
            </select>
            <br>

            <label for="cliente">Cliente</label>
            <select name="cliente" id="cliente">
                <?php
                require_once '../../dao/DaoCliente.php';
                $daoCliente = new DaoCliente();
                $lista = $daoCliente->getLista();

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