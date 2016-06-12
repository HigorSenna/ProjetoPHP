<?php

namespace ProjetoPHP\Service;
include_once('../DataAcessObject/UsuarioDAO.php');
include_once('../Classes/Usuario.php');
use ProjetoPHP\DataAcessObject\UsuarioDAO;
use ProjetoPHP\Classes\Usuario;

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