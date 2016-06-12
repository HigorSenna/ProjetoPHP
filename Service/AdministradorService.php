<?php
namespace ProjetoPHP\Service;
include_once('../DataAcessObject/AdministradorDAO.php');
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