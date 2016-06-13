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
        echo "<br/>".$nome;
    }  

    echo"
        <h1>Deseja Realmente excluir a peça?</h1>
        <a href='excluirPecaBanco.php?id=$id'>SIM</a>
        <a href='../pages/admVizualizarPecas.php'>NÃO</a>
    ";
}
else{
    echo "Essa peça ainda nao possui reservas.
    <h1>Deseja realmente excluir a peça?</h1>
    
    <a href='excluirPecaBanco.php?id=$id';reserva='false'>SIM</a>
    <a href='../pages/admVizualizarPecas.php'>NÃO</a>";
}

?>

