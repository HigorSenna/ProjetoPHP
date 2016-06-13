<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

require_once ('../Controller/ConsultaPecaTeatroController.php');
use ProjetoPHP\Controller\ConsultaPecaTeatroController;
$consultaPeca = new ConsultaPecaTeatroController();
$pecaTeatro = $consultaPeca->buscarPecaPorId($id);
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Peça em cartaz</title>
</head>
<body>
    <div class="container-fluid">
        <h2> <?=$pecaTeatro['NM_PECA']?> </h2>
        <h2> Dia: <?=$pecaTeatro['DT_PECA']?> </h2>
        <h2> Ás   <?=$pecaTeatro['HR_PECA']?> </h2>
        <h2> Descrição: <?=$pecaTeatro['DESC_PECA']?> </h2>
        <h2>Qtd Lugares: <?= $pecaTeatro['QTD'] ?> </h2>
        <img src="<?= $pecaTeatro['CAMINHO_IMAGEM']?>" style='width:300px;height: 400px;'> </img>

        <div style="width:850px;margin:-285px auto;">
            <form action="" method="POST">
                <?php
                    $lugares = $pecaTeatro['QTD'];
                    for($i = 1; $i < $lugares;$i++){
                        if($i/11 == 1){
                            echo "<br> Lugar $i: <input type='radio' name='lugares' value='$i' /> ";
                        }
                        else{
                            echo "Lugar $i: <input type='radio' name='lugares' value='$i' /> ";
                        }
                    }
                ?>
                <input type="submit" value="Escolher cadeira"/>
            </form>
        </div>
    </div>

</body>
</html>

