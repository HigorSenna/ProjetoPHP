<?php
include('../../DataAcessObject(DAO)/UsuarioDAO.php');
class UsuarioService
{
    public function salvarUsuario(Usuario $usuario) {
        $usuarioDAO = new UsuarioDAO();
        if($usuarioDAO->salvar($usuario)){
            return true;
        }
        return false;
    }
}