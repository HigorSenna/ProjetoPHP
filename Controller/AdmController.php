<?php
namespace ProjetoPHP\Controller;
include_once('../Service/AdministradorService.php');
use ProjetoPHP\Service\AdministradorService;
class AdmController
{
    public function existeUsuario($login,$senha){
        $admService = new AdministradorService();
        if($admService->buscarUsuario($login,$senha)){
            return true;
        }
        return false;
    }
}