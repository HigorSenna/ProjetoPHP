<?php

include_once ('../Controller/ReservaController.php');
include_once ('../Classes/Reserva.php');
use ProjetoPHP\Controller\ReservaController;
use ProjetoPHP\Classes\Reserva;

$idPeca = $_GET['idPeca'];
$idUsuario = $_GET['idUsuario'];

$reservaUsuario = new Reserva();

$reservaUsuario->setIdUsuario($idUsuario);
$reservaUsuario->setIdPeca($idPeca);

$reservaController = new ReservaController();

if($reservaController->excluirReservaUsuario($reservaUsuario)){
    echo"
        <script>
            alert('Reserva retirada com sucesso!!');
             window.location='../pages/home.php';
        </script>
    ";
}
else{
    echo"
        <script>
            alert('Algum erro ocorreu!!');
            window.location='../pages/home.php';
        </script>
    ";
}