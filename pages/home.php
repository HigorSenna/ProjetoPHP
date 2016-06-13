<script src="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/js/jquery-1.12.4.js"></script>
<link rel="stylesheet" href="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<script src="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
<?php
session_start();
include_once('..\Controller\ConsultaPecaTeatroController.php');
use ProjetoPHP\Controller\ConsultaPecaTeatroController as ConsultaPecaTeatroController;

$consultaPeca = new ConsultaPecaTeatroController();
$registros = $consultaPeca->bucarTodasPecasCadastradas();
$nome = $_SESSION['user']['NM_USUARIO'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Peças em cartaz</title>
</head>
<body>
    <div class="container-fluid">
        <header style="border:1px solid red;">
            <h3 style='margin:auto;width:30%;'> Peças em Cartaz  </h3>
            <h2> Olá <?= $nome ?> </h2>
        </header>

        <div>
            <table class='table table-bordered' style='width:50%;margin:5% auto;'>
                <th>Nome</th>
                <th>Data </th>
                <th>Hora </th>
                <th>Descricao</th>
                <th>Ação </th>

                <?php
                    while ($resultado = $registros->fetch()):
                        $id = $resultado['ID_PECA'];
                        $nome = $resultado['NM_PECA'];
                        $descricao = $resultado['DESC_PECA'];
                        $data = $resultado['DT_PECA'];
                        $hora = $resultado['HR_PECA'];?>
                        <tr>
                            <td><?= $nome ?></td>
                            <td><?= $data ?></td>
                            <td><?= $hora ?></td>
                            <td><?= $descricao ?></td>
                            <td>
                                <a href='vizualizarPecaEmCartaz.php?id=<?=$id?>'>Vizualizar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
            </table>
        </div>
    </div>
</body>
</html>


