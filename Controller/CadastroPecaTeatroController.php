<?php
//include('../../Service/PecaTeatroService.php')
namespace ProjetoPHP\Controller;
use ProjetoPHP\Classes\PecaTeatro;
use ProjetoPHP\Service\PecaTeatroService;

class CadastroPecaTeatroController
{
    public function salvar(PecaTeatro $peca){
        $pecaTeatroService = new PecaTeatroService();
        return $pecaTeatroService->salvar($peca);
    }
}