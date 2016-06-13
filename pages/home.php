<script src="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/js/jquery-1.12.4.js"></script>
<link rel="stylesheet" href="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<script src="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
<?php
include_once('..\Controller\ConsultaPecaTeatroController.php');
use ProjetoPHP\Controller\ConsultaPecaTeatroController as ConsultaPecaTeatroController;

$consultaPeca = new ConsultaPecaTeatroController();
$registros = $consultaPeca->bucarTodasPecasCadastradas();

echo
"
    <h3 style='margin:auto;width:30%;'> Peças em Cartaz  </h3>
";

echo"<table class='table table-bordered' style='width:50%;margin:5% auto;'> 
    <th>Nome</th>
    <th>Data </th>
    <th>Hora </th>
    <th>Descricao </th>  
    <th>Ação </th>
   ";
while($resultado = $registros->fetch()){
    $id = $resultado['ID_PECA'];
    $nome = $resultado['NM_PECA'];
    $descricao = $resultado['DESC_PECA'];
    $data = $resultado['DT_PECA'];
    $hora = $resultado['HR_PECA'];

    echo"
        <tr>          
            <td>$nome</td>
            <td>$data</td>
            <td>$hora</td> 
            <td>$descricao</td>                     
            <td>
                <a href='vizualizarPecaEmCartaz.php?id=$id'>Vizualizar</a>               
            </td>
        </tr>
        ";
}
echo"
</table>";
