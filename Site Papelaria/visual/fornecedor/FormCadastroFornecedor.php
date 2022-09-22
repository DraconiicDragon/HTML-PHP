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

    <div class="form">
        <h2>Dados</h2>
        <form action="CadastroFornecedor.php" method="post">

            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
            <br>

            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone">
            <br>

            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao">
            <br>

            <label for="rua">Rua</label>
            <input type="text" name="rua" id="rua">
            <br>

            <label for="numero">Numero</label>
            <input type="number" name="numero" id="numero">
            <br>

            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro">
            <br>

            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade">
            <br>

            <button type="submit">Salvar</button>
            <br>

        </form>
    </div>
</body>

</html>