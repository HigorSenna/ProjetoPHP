<?php
namespace ProjetoPHP\Service;
include_once ('../DataAcessObject/ReservaDAO.php');
include_once ('../Classes/Reserva.php');
use ProjetoPHP\DataAcessObject\ReservaDAO;
use ProjetoPHP\Classes\Reserva;

class ReservaService
{
    public function inserirReserva(Reserva $reserva){
        $reservaDAO = new ReservaDAO();
        if($reservaDAO->inserirReserva($reserva)){
            return true;
        }
        return false;
    }
    
    public function buscarReservaUsuario(Reserva $reserva){
        $reservaDAO = new ReservaDAO();
        return $reservaDAO->buscarReservaDoUsuario($reserva);
    }
    
    public function buscarReservaDaPeca($idPeca){
        $reservaDAO = new ReservaDAO();
        return $reservaDAO->buscarReservasReferenteAPeca($idPeca);
    }
}