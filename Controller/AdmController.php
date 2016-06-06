<?php
include('../../Service/AdministradorService.php');
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