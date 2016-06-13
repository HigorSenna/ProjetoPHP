<?php
namespace ProjetoPHP\Service;
include_once('../DataAcessObject/AdministradorDAO.php');
use ProjetoPHP\DataAcessObject\AdministradorDAO;

class AdministradorService
{
    public function buscarUsuario($login,$senha){
        $admDAO = new AdministradorDAO();
        return $admDAO->buscarUsuario($login,$senha);         
    }
}