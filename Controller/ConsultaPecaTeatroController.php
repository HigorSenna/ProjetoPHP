<?php
namespace ProjetoPHP\Controller;
include_once('../Service/PecaTeatroService.php');
use ProjetoPHP\Service\PecaTeatroService as PecaTeatroService;

class ConsultaPecaTeatroController
{
    public function excluir($id){
        $pecaTeatroService = new PecaTeatroService();
        if($pecaTeatroService->excluirPeca($id)){
            return true;
        }
        return false;
    }
    public function bucarTodasPecasCadastradas(){
         $pecaTeatroService = new PecaTeatroService();
         return $pecaTeatroService->buscarTodasPecas();
    }
    
    public function buscarPecaPorId($id){
        $pecaTeatroService = new PecaTeatroService();
        return $pecaTeatroService->buscarPecaPorId($id);
    }

    public function buscarAscentoPeca($id){
        
    }
    
    public function excluirPecaSemReserva($id){
        $pecaTeatroService = new PecaTeatroService();
        if($pecaTeatroService->excluirPecaSemReserva($id)){
            return true;
        }
        return false;
    }

}