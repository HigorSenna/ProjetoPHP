<?php
//include('../../Classes/Administrador.php');

include_once('../Controller/AdmController.php');
use ProjetoPHP\Controller\AdmController;
$login = $_POST['login'];
$senha = $_POST['senha'];

$admController = new AdmController();
if($admController->existeUsuario($login,$senha)){
    header("Location:/ProjetoPHP/pages/cadastrarPecasTeatro.php");

}
else{
    echo "usuario nao existe";
}
