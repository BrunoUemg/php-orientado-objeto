<?php

class Pessoa{
    PROTECTED $nome;
    PROTECTED $cpf;
    PROTECTED $telefone;
    

   public function __construct(){
     

   } 

   public function setNome($nome){
    $this->nome = $nome;
   }
   public function getNome(){
    return $this->nome;
   }
   public function setCpf($cpf){
    $this->cpf = $cpf;
   }
   public function getCpf(){
    return $this->cpf;
   }
   public function setTelefone($telefone){
    $this->telefone = $telefone;
   }
   public function getTelefone(){
    return $this->telefone;
   }
}

