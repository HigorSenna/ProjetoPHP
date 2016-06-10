<?php
use ProjetoPHP\Controller\ConsultaPecaTeatroController;

$consultaPecaTeatroController = new ConsultaPecaTeatroController();

if(isset($_GETT['id'])){
    $id = $_GET['id'];
    if($consultaPecaTeatroController->excluir($id)){
        echo"
            <script>
                alert('Peca excluida com sucesso!');
            </script>
        ";
    }
}

?>

