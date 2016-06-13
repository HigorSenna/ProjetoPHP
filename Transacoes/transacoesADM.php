<?php
//include('../../Classes/Administrador.php');

include_once('../Controller/AdmController.php');
include_once ('../Classes/Usuario.php');
use ProjetoPHP\Classes\Usuario;
use ProjetoPHP\Controller\AdmController;
$login = $_POST['login'];
$senha = $_POST['senha'];

$admController = new AdmController();
$usuario = new Usuario();
$usuario = $admController->buscarUsuario($login,$senha);


if($usuario['TIPO_USUARIO'] == "adm"){
    header("Location:/ProjetoPHP/pages/cadastrarPecasTeatro.php");
}
else{
    echo"nao eh adm";die();
    //pecas disponiveis
}

