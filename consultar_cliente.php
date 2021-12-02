<?php 

include_once "DAO/PessoaDAO.php";

$pessoaDAO = new PessoaDAO();

$resultadoFinal = $pessoaDAO->buscar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Listando Clientes</h3>
    <table>
        <th>Código</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <?php foreach($resultadoFinal as $value){ ?>
            <tr>
                <td><?php echo $value['idCliente'] ?></td>
                <td><?php echo $value['nomeCliente'] ?></td>
                <td><?php echo $value['cpf'] ?></td>
                <td><?php echo $value['telefone'] ?></td>
               
            </tr>
            <?php } ?>
    </table>
    <a href="index.php">Voltar</a>
</body>
</html>