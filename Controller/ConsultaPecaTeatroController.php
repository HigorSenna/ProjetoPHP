<?php
/* = getcwd();
echo "O seu caminho absoluto é: ";
echo $path; die();*/
include('../Service/PecaTeatroService.php');
class ConsultaPecaTeatroController
{
    public function bucarTodasPecasCadastradas(){
         $pecaTeatroService = new PecaTeatroService();
         return $pecaTeatroService->buscarTodasPecas();
    }
}