<?php
session_start();
include_once ('../Classes/Reserva.php');
include_once ('../Controller/ReservaController.php');

use ProjetoPHP\Classes\Reserva;
use ProjetoPHP\Controller\ReservaController;

$reserva = new Reserva();

$reserva->setIdUsuario($_SESSION['user']['ID_USUARIO']);
$reserva->setNumeroLugarSelecionado($_POST['lugar']);
$reserva->setIdPeca($_POST['idPeca']);

$reservaController = new ReservaController();

if($reservaController->inserirReserva($reserva)){
    echo"
        <script>
            alert('Reserva realizada com sucesso!');
            window.location='../pages/home.php';
        
        </script>
    ";
}