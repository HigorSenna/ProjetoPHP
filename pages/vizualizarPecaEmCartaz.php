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
        <h2> <?=$pecaTeatro['DT_PECA']?> </h2>
        <h2> <?=$pecaTeatro['HR_PECA']?> </h2>
        <h2> <?=$pecaTeatro['DESC_PECA']?> </h2>
        <img src="<?= $pecaTeatro['CAMINHO_IMAGEM']?>"> </img>
    </div>

</body>
</html>

