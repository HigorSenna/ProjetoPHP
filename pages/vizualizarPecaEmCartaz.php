<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

require_once ('../Controller/ConsultaPecaTeatroController.php');
require_once ('../Controller/ReservaController.php');
use ProjetoPHP\Controller\ConsultaPecaTeatroController;
use ProjetoPHP\Controller\ReservaController;

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
            <form action="../Transacoes/reserva.php" method="POST">
                <input type="hidden" name="idPeca" value="<?=$id?>"/>

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
                            echo " <input type='radio' name='lugar' value='$i' disabled='disabled'/> <span style='color:red;'> X </span>";
                        }
                        else{

                            echo "<input type='radio' name='lugar' value='$i' /> P $i";
                        }
                    }
                ?>
                <input type="submit" value="Escolher cadeira"/>

            </form>
            <a href="home.php">Peças em cartaz</a>
        </div>
    </div>

</body>
</html>

