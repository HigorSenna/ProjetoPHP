<?php

namespace ProjetoPHP\Service;
include_once('../DataAcessObject/PecaTeatroDAO.php');
include_once('../Classes/PecaTeatro.php');
use ProjetoPHP\DataAcessObject\PecaTeatroDAO;
use ProjetoPHP\Classes\PecaTeatro;

class PecaTeatroService
{
    public function excluirPecaSemReserva($id){
        $pecaTeatroDAO = new PecaTeatroDAO();
        $peca = new PecaTeatro();
        $peca = $pecaTeatroDAO->buscarPecaPorId($id);

        if($pecaTeatroDAO->excluirPecaSemReserva($id)){
            $caminho = $peca['CAMINHO_IMAGEM'];
            unlink($caminho);
            return true;
        }
        return false;
    }

    public function excluirPecaComReserva($id){
        $pecaTeatroDAO = new PecaTeatroDAO();
        $peca = new PecaTeatro();
        $peca = $pecaTeatroDAO->buscarPecaPorId($id);
        
        if($pecaTeatroDAO->excluir($id)){
            $caminho = $peca['CAMINHO_IMAGEM'];
            unlink($caminho);
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