<?php
session_start();
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

require_once ('../Controller/ConsultaPecaTeatroController.php');
require_once ('../Controller/ReservaController.php');
include_once ('../Classes/Reserva.php');

use ProjetoPHP\Controller\ConsultaPecaTeatroController;
use ProjetoPHP\Controller\ReservaController;
use ProjetoPHP\Classes\Reserva;

$consultaPeca = new ConsultaPecaTeatroController();
$pecaTeatro = $consultaPeca->buscarPecaPorId($id);

$reservaController = new ReservaController();
$reserva = $reservaController->buscarTodasReservas($id);
$todasReservas = Array();
$j = 0;
$reserva ->setFetchMode(PDO::FETCH_ASSOC);
while($resultado = $reserva->fetch()){
    $todasReservas[$j]=$resultado['NUM_CADEIRA'];
    $j++;
}

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Peça em cartaz</title>
</head>
<body>
    <div class="container-fluid">
        <a href="sessionClose.php">Deslogar</a>
        <h2> <?=$pecaTeatro['NM_PECA']?> </h2>
        <h2> Dia: <?=$pecaTeatro['DT_PECA']?> </h2>
        <h2> Ás   <?=$pecaTeatro['HR_PECA']?> </h2>
        <h2> Descrição: <?=$pecaTeatro['DESC_PECA']?> </h2>
        <h2>Qtd Lugares: <?= $pecaTeatro['QTD'] ?> </h2>
        <img src="<?= $pecaTeatro['CAMINHO_IMAGEM']?>" style='width:300px;height: 400px;'> </img>

        <!--buscar todas as reservas do banco, se num_cadeira == i = esta reservado-->

        <div style="width:490px;margin:-285px auto;">        

                <?php
                    $lugares = $pecaTeatro['QTD'];
                   global  $estaReservada;
                    for($i = 1; $i <= $lugares;$i++){
                        for($j = 0; $j<count($todasReservas);$j++){
                            if($todasReservas[$j] == $i){
                                $estaReservada = true;
                            }
                        }
                        if($estaReservada == true){
                            $estaReservada= false;
                           // echo " <input type='radio' name='lugar' value='$i' disabled='disabled'/> <span style='color:red;'> X </span>";
                            echo "<img src='/ProjetoPHP/estilos/img/reservada.png' style='width:30px;'>";
                        }
                        else{
                            echo "<a href='../Transacoes/reserva.php?lugar=$i&idPeca=$id'> $i <img src='/ProjetoPHP/estilos/img/disponivel.png' style='width:30px;'> </a>";
                        }
                    }
                ?>

            <br />

            <a href="home.php">Peças em cartaz</a>
            <br />
            <br />
            <!--Se o usuario estiver se registrado nessa peça exibir o botao para retirar o registro.
            passar id do usuario e id da peca-->
            <?php
                $idUsuario = $_SESSION['user']['ID_USUARIO'];
            $reservaPecaController = new ReservaController();
            $reservaUusario = new Reserva();
            $reservaUusario->setIdPeca($id);
            $reservaUusario->setIdUsuario($idUsuario);
            $resultado = $reservaPecaController->buscarReservaUsuario($reservaUusario);
            if($resultado->rowCount()>0){
                echo"<a href='../Transacoes/retirarReserva.php?idUsuario=$idUsuario&&idPeca=$id'>Retirar Reserva</a>";
            }
            ?>
           
        </div>
    </div>

</body>
</html>

