<?php
include_once('../Controller/ConsultaPecaTeatroController.php');
use ProjetoPHP\Controller\ConsultaPecaTeatroController;

$id = $_GET['id'];

$consultaPeca = new ConsultaPecaTeatroController();

if($consultaPeca->excluir($id)){
    echo"
        <script>
            alert('Peca excluida com sucesso!');
            window.location='../pages/admVizualizarPecas.php';
        </script>
    ";
}