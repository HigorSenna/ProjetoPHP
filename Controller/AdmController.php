<?php
namespace ProjetoPHP\Controller;
include_once('../Service/AdministradorService.php');
use ProjetoPHP\Service\AdministradorService;
class AdmController
{
    public function buscarUsuario($login,$senha){
        $admService = new AdministradorService();
        return $admService->buscarUsuario($login,$senha);       
    }
}