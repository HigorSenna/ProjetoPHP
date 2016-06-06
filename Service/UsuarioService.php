<?php
include('../../DataAcessObject(DAO)/UsuarioDAO.php');
class UsuarioService
{
    public function salvarUsuario(Usuario $usuario) {
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->salvar($usuario);
    }
}