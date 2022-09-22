<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="../css/TableStyle.css">
</head>

<body>

    <?php include "../menu/Menu.php"; ?>

    <h1>Listagem de Produtos</h1>

    <table>

        <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Unidade</th>
        <th>Estoque</th>    
        <th>PreçoVenda</th>
        <th>PreçoCompra</th>
        <th>Fornecedor</th>
        </tr>

        <?php
            require_once '../../dao/DaoProduto.php';
            require_once '../../modelo/Produto.php';

            $daoProduto = new DaoProduto();
            $lista = $daoProduto->getLista();

            foreach($lista as $linha) {
                echo '<tr>';

                foreach($linha as $coluna) {
                    echo '<td>' . $coluna . '</td>';
                }
                echo '</tr>';
            }
        ?>

    </table>
    
</body>
</html>