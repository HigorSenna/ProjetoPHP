<?php
include('../../Classes/Administrador.php');
include('../../Controller/AdmController.php');

$login = 'a';
$senha = 'a';

$admController = new AdmController();
if($admController->existeUsuario($login,$senha)){
    echo"usuario existe";
}
else{
    echo "usuario nao existe";
}
