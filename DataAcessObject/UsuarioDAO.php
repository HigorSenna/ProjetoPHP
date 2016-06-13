<?php
namespace ProjetoPHP\DataAcessObject;
include_once ('../Classes/Usuario.php');
include_once ('../ConexaoBanco/ConexaoBanco.php');
use ProjetoPHP\ConexaoBanco\ConexaoBanco;
use ProjetoPHP\Classes\Usuario;
class UsuarioDAO
{
    public function salvar(Usuario $usuario){
        $db = ConexaoBanco::realizarConexao(); 
        $sql = "INSERT INTO usuarios (NM_USUARIO,EMAIL,CPF,TELEFONE,SENHA,TIPO_USUARIO) values(?,?,?,?,?,?)";
        $stmt = $db->prepare($sql);
        $valoresObjeto = array($usuario->getNome(),$usuario->getEmail(),$usuario->getCPF(),
           $usuario->getTelefone(),$usuario->getSenha(),$usuario->getTipoUsuario());
        
        if($stmt->execute($valoresObjeto)){            
            return true;           
        }
        return false;
     }
}