<?php

namespace ProjetoPHP\Controller;
include_once('../Service/PecaTeatroService.php');
include_once('../Classes/PecaTeatro.php');
use ProjetoPHP\Classes\PecaTeatro;
use ProjetoPHP\Service\PecaTeatroService;

class CadastroPecaTeatroController
{
    public function salvar(PecaTeatro $peca){
        $pecaTeatroService = new PecaTeatroService();
        return $pecaTeatroService->salvar($peca);
    }
}