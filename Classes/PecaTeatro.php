<?php

class PecaTeatro
{
    private $nome;
    private $data;
    private $hora;
    private $descricao;
    private $caminhoImagem;

    public function PecaTeatro($nome,$data,$hora,$descricao){
        $this->nome = $nome;
        $this->data = $data;
        $this->hora = $hora;
        $this->descricao = $descricao;

    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setData($data){
        $this->data = $data;
    }
    public function getData(){
        return $this->data;
    }

    public function setHora($hora){
        $this->hora = $hora;
    }
    public function getHora(){
        return $this->hora;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function getDescricao(){
        return $this->descricao;
    }

    public function setCaminhoImagem($caminhoImagem){
        $this->caminhoImagem = $caminhoImagem;
    }
    public function getCaminhoImagem(){
        return $this->caminhoImagem;
    }
}