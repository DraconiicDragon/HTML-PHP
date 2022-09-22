<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Vendas</title>
    <link rel="stylesheet" href="../css/TableStyle.css">
</head>
<body>

    <?php include "../menu/Menu.php"; ?>

    <h1>Histórico de Vendas</h1>

    <table>

        <tr>
        <th>ID</th>
        <th>Valor</th>
        <th>Data</th>
        <th>Funcionario</th>    
        <th>Cliente</th>

        </tr>

        <?php
            require_once '../../dao/DaoVenda.php';
            require_once '../../modelo/Venda.php';

            $daoVenda = new DaoVenda();
            $lista = $daoVenda->getLista();

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