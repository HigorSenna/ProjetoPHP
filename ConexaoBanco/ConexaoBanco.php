<?php
namespace ProjetoPHP\ConexaoBanco;
class ConexaoBanco
{
/*$user = "root";
$pass="root";
$database="teatro";
$server="127.0.0.1";
$db = new PDO("mysql:host=$server;dbname=$database",$user,$pass);*/

    public static function realizarConexao(){
        $user = "root";
        $pass="aluno";
        $database="teatro";
        $server="127.0.0.1";
        $db = new \PDO("mysql:host=$server;dbname=$database",$user,$pass);
        return $db;
    }
}
