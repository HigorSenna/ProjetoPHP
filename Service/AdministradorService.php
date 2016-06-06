<?php
include('../../DataAcessObject(DAO)/AdministradorDAO.php');
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