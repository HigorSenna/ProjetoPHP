<?php

namespace ProjetoPHP\Classes;

class Reserva
{
    private $idUsuario;
    private $idPeca;
    private $numeroLugarSelecionado;

    public function Reserva(){}

    public function setIdUsuario($id){
        $this->idUsuario = $id;
    }
    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdPeca($idPeca){
        $this->idPeca = $idPeca;
    }
    public function getIdPeca(){
        return $this->idPeca;
    }

    public function setNumeroLugarSelecionado($numeroLugar){
        $this->numeroLugarSelecionado = $numeroLugar;
    }
    public function getNumeroLugarSelecionado(){
        return $this->numeroLugarSelecionado;
    }
}