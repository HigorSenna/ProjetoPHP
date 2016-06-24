<script src="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/js/jquery-1.12.4.js"></script>
<link rel="stylesheet" href="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<script src="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
include_once('..\Controller\ConsultaPecaTeatroController.php');
use ProjetoPHP\Controller\ConsultaPecaTeatroController as ConsultaPecaTeatroController;

$consultaPeca = new ConsultaPecaTeatroController();
$registros = $consultaPeca->bucarTodasPecasCadastradas();

echo
"<div class='alert alert-success' id='panels'>
  <strong>CONSULTA DE PEÇAS ADM   <span class='glyphicon glyphicon-search'></span></strong>
</div>



";

echo"<table class='table table-striped ' style='width:50%;margin:15% auto;'>
    <th>ID</th>
    <th>Nome</th>
    <th>Data </th>
    <th>Hora </th>
    <th>Descricao </th>
    <th>Caminho da imagem</th>
    <th>Ação </th>
   ";
while($resultado = $registros->fetch()){
    $id =   $resultado['ID_PECA'];
    $nome = $resultado['NM_PECA'];
    $descricao = $resultado['DESC_PECA'];
    $data = $resultado['DT_PECA'];
    $hora = $resultado['HR_PECA'];
    $imagem = $resultado['CAMINHO_IMAGEM'];

    echo"
        <tr>
            <td>$id</td>
            <td>$nome</td>
            <td>$descricao</td>
            <td>$data</td>
            <td>$hora</td>
            <td>$imagem</td>
            <td>              
               <a href='/ProjetoPHP/Transacoes/excluirPecaTeatro.php?id=$id'>Excluir  <span class='glyphicon glyphicon-trash'></span></a>
            </td>
        </tr>
        ";
}
echo"
</table>";

?>