<?php 

class Conexao {

    public static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=crud_pdo', 'root', '');
        }

        return self::$instance;
    }

}
  