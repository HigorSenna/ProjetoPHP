<?php

namespace ProjetoPHP\Service;
include_once('../DataAcessObject/PecaTeatroDAO.php');
include_once('../Classes/PecaTeatro.php');
use ProjetoPHP\DataAcessObject\PecaTeatroDAO;
use ProjetoPHP\Classes\PecaTeatro;

class PecaTeatroService
{

    public function excluirPeca($id){
        //bucar peca por id, pegar o caminho da imagem
        $pecaTeatroDAO = new PecaTeatroDAO();
        if($pecaTeatroDAO->excluir($id)){
            //remover a imagem.
            return true;
        }
        return false;
    }

    public function salvar(PecaTeatro $peca){
        $pecaTeatroDAO = new PecaTeatroDAO();

        if($pecaTeatroDAO->salvar($peca)){         
            move_uploaded_file($_FILES['caminhoImagem']['tmp_name'], $peca->getCaminhoImagem());
            return true;
        }      
        return false;
    }

    public function buscarTodasPecas(){
        $pecaTeatroDAO = new PecaTeatroDAO();
        return $pecaTeatroDAO->buscarTodasPecas();
    }
    
    public function buscarPecaPorId($id){
        $pecaTeatroDAO = new PecaTeatroDAO();
        return $pecaTeatroDAO->buscarPecaPorId($id);
    }
}