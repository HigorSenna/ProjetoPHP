<?php
include('../../ConexaoBanco/ConexaoBanco.php');
class UsuarioDAO
{
    public function salvar(Usuario $usuario){
        $db = ConexaoBanco::realizarConexao(); 
        $sql = "INSERT INTO usuarios (NM_USUARIO,EMAIL,CPF,TELEFONE,SENHA) values(?,?,?,?,?)";
        $stmt = $db->prepare($sql);
        $valoresObjeto = array($usuario->getNome(),$usuario->getEmail(),$usuario->getCPF(),
           $usuario->getTelefone(),$usuario->getSenha());
        
        if($stmt->execute($valoresObjeto)){            
            return true;           
        }
        return false;
     }
}