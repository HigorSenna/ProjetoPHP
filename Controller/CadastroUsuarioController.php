<?php
include('../../Service/UsuarioService.php');
class CadastroUsuarioController
{

    public function salvar(Usuario $usuario){
        $usuarioService = new UsuarioService();
        $usuarioService->salvarUsuario($usuario);
    }
}