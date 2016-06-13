<?php

namespace ProjetoPHP\Controller;
include_once ('../Classes/Reserva.php');
include_once ('../Service/ReservaService.php');

use ProjetoPHP\Classes\Reserva;
use ProjetoPHP\Service\ReservaService;

class ReservaController
{
    public function buscarTodasReservas($id){
        $reservaService = new ReservaService();
        return $reservaService->buscarTodasReservas($id);
    }
    
    public function inserirReserva(Reserva $reserva){
        $reservaService = new ReservaService();
        if($reservaService->inserirReserva($reserva)){
            return true;
        }
        return false;
    }
    
    public function buscarReservaUsuario(Reserva $reserva){
        $reservaService = new ReservaService();
        return $reservaService->buscarReservaUsuario($reserva);
    }

    public function buscarReservaDaPeca($idPeca){
        $reservaService = new ReservaService();
        return $reservaService->buscarReservaDaPeca($idPeca);
    }
}