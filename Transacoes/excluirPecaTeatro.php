<?php
include_once('../Controller/ConsultaPecaTeatroController.php');
include_once ('../Controller/ReservaController.php');
use ProjetoPHP\Controller\ConsultaPecaTeatroController;
use ProjetoPHP\Controller\ReservaController;
$id = $_GET['id'];

$consultaPecaTeatroController = new ConsultaPecaTeatroController();
$reservaController = new ReservaController();
$reserva = $reservaController->buscarReservaDaPeca($_GET['id']);


if($reserva->rowCount()>0){
    echo"<h2>Usuarios que reservaram lugar: </h2>";
    while($resultado = $reserva->fetch()){
        $nome = $resultado['EMAIL'];
        echo $nome;
    }
    
}
else{
    echo "nao tem reserva";
}
/*if($consultaPecaTeatroController->excluir($id)){
    echo"
        <script>
            alert('Peca excluida com sucesso!');
            window.location='../pages/admVizualizarPecas.php';
        </script>
    ";
}*/


?>

