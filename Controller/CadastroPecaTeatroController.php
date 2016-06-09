<?php
include('../../Service/PecaTeatroService.php');
class CadastroPecaTeatroController
{
    public function salvar(PecaTeatro $peca){
        $pecaTeatroService = new PecaTeatroService();
        return $pecaTeatroService->salvar($peca);
    }
}