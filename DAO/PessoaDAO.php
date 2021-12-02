<?php 

include_once "model/Pessoa.php";
include_once "conexao.php";
session_start();
$conexao = new Conexao();
class PessoaDAO {

    
    public function salvar(Pessoa $pessoa){
        $sql = Conexao::getInstance()->prepare("INSERT INTO cliente values(null,?,?,?)");
        $result = $sql->execute(array($pessoa->getNome(),$pessoa->getCpf(),$pessoa->getTelefone()));
        if($result === true){
            $_SESSION['msg'] = ' <div class="alert alert-success" role="alert"> <p> Salvo com sucesso! </div> </p> ';
        }
    }

    public function buscar(){
        $sql = Conexao::getInstance()->query("SELECT * FROM cliente");
        $sql->execute();
        $final = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $final;
    }
}