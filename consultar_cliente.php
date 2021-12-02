<?php 
include_once "header.php";
include_once "DAO/PessoaDAO.php";

$pessoaDAO = new PessoaDAO();

$resultadoFinal = $pessoaDAO->buscar();

?>
<body>
    <h3>Listando Clientes</h3><a href="index.php" class="btn btn-danger">Voltar</a>
    <table class="table">
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
    
</body>
</html>