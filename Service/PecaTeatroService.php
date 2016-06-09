<?php
include('../DataAcessObject(DAO)/PecaTeatroDAO.php');
class PecaTeatroService
{
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
}