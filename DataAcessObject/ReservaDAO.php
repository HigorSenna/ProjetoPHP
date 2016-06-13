<?php
namespace ProjetoPHP\DataAcessObject;
include_once ('../ConexaoBanco/ConexaoBanco.php');
include_once ('../Classes/Reserva.php');
use ProjetoPHP\Classes\PecaTeatro;
use ProjetoPHP\Classes\Reserva;
use ProjetoPHP\ConexaoBanco\ConexaoBanco;

class ReservaDAO
{
    public function inserirReserva(Reserva $reserva){
        $db = ConexaoBanco::realizarConexao();

        $sql = "INSERT INTO reservas(ID_USUARIO,ID_PECA,NUM_CADEIRA) VALUES (?,?,?)";
        $stmt= $db-> prepare($sql);
        $parametros = array($reserva->getIdUsuario(),
            $reserva->getIdPeca(),$reserva->getNumeroLugarSelecionado());
        
        if($stmt->execute($parametros)){
            return true;
        }
        return false;
    }
    
    public function buscarReservasReferenteAPeca($idPecaTeatro){
        $db = ConexaoBanco::realizarConexao();
        
        $sql = "SELECT * FROM reservas as r join usuarios as u on r.ID_USUARIO = u.ID_USUARIO and r.ID_PECA = $idPecaTeatro";
        
       return $db->query($sql);        
    }
}