<?php
include('../../Classes/Administrador.php');
include('../../Controller/AdmController.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

$admController = new AdmController();
if($admController->existeUsuario($login,$senha)){
    echo"usuario existe";
}
else{
    echo "usuario nao existe";
}
