<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Clientes</title>
    <link rel="stylesheet" href="../css/TableStyle.css">
</head>

<body>

    <?php include "../menu/Menu.php"; ?>

    <h1>Listagem de clientes</h1> 

    <table>

        <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Rua</th>
        <th>Bairro</th>
        <th>Cidade</th>
        </tr>

        <?php

            require_once '../../dao/DaoCliente.php';
            require_once '../../modelo/Cliente.php';

            $daoCliente = new DaoCliente();
            $lista =$daoCliente->getLista();

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