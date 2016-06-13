<?php
use ProjetoPHP\Controller\ConsultaPecaTeatroController;
include_once('../Controller/ConsultaPecaTeatroController.php');
$consultaPecaTeatroController = new ConsultaPecaTeatroController();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    if($consultaPecaTeatroController->excluir($id)){
        echo"
            <script>
                alert('Peca excluida com sucesso!');
                window.location='../pages/admVizualizarPecas.php';
            </script>
        ";
    }
}

?>

