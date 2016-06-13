<?php
namespace ProjetoPHP\DataAcessObject;
include_once('../ConexaoBanco/ConexaoBanco.php');
use ProjetoPHP\ConexaoBanco\ConexaoBanco;

class AdministradorDAO{
    public function buscarUsuario($login,$senha){
        $db = ConexaoBanco::realizarConexao();
        $sql = "SELECT * FROM usuarios WHERE cpf = '$login' AND senha = '$senha'";
        $usuarioBanco = $db->query($sql);
        $usuario = $usuarioBanco->fetch();
        
        return $usuario;
        
    }
}
