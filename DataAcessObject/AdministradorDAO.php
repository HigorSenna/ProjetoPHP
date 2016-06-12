<?php
namespace ProjetoPHP\DataAcessObject;
include_once('../ConexaoBanco/ConexaoBanco.php');
use ProjetoPHP\ConexaoBanco\ConexaoBanco;

class AdministradorDAO{
    public function existeUsuario($login,$senha){
        $db = ConexaoBanco::realizarConexao();
        $sql = "SELECT * FROM administradores WHERE login = '$login' AND senha = '$senha'";
        $usuarioBanco = $db->query($sql);
        if($usuarioBanco->rowCount()==1){
           return true;
        }
        return false;
    }
}
