<?php
namespace ProjetoPHP\Service;
use ProjetoPHP\DataAcessObject\AdministradorDAO;

class AdministradorService
{
    public function buscarUsuario($login,$senha){
        $admDAO = new AdministradorDAO();
        if($admDAO->existeUsuario($login,$senha)){
            return true;
        }
        return false;
    }
}