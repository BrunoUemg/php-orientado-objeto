<?php

require_once "model/Pessoa.php";
require_once "DAO/PessoaDAO.php";

$pessoa = new Pessoa();
$pessoaDAO = new PessoaDAO();

if(isset($_POST['enviar'])){
if(!empty($_POST['nome'])){
$pessoa->setNome($_POST['nome']);
$pessoa->setCpf($_POST['cpf']);
$pessoa->setTelefone($_POST['telefone']);

$pessoaDAO->salvar($pessoa);
}else{
    echo 'Preencha todos os campos';
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Cadastro</title>
    <style>
        * {
    margin: 10px;
    padding: 0;
    
}

.form{
    margin: 10px 50px 20px 0;
    padding:80px;
    display: block;
    width: 50%;
    height: 30%;
    margin: 0 auto;
    border: 2px solid black;
}
    </style>
</head>
<body>
    
    <div class="form">
    <form action="" method="post">
        <h2>Orientado a objeto</h2>
        <?php
        if (!empty($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
         } ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome"  aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">CPF</label>
    <input type="text" class="form-control" name="cpf" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telefone</label>
    <input type="text" class="form-control" name="telefone" >
  </div>
 
  <button type="submit" name="enviar" class="btn btn-primary">Submit</button>
  <a href="consultar_cliente.php" class="btn btn-primary" >Consultar cliente</a>
</form>
    </div>

 
</body>
</html>