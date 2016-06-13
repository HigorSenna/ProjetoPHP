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
    <h3 style='margin:auto;width:30%;'> CONSULTA DE PECAS ADM  </h3>
";

echo"<table class='table table-bordered' style='width:50%;margin:5% auto;'>
    <th>ID</th>
    <th>Nome</th>
    <th>Data </th>
    <th>Hora </th>
    <th>Descricao </th>
    <th>Caminho da imagem</th>
    <th>A��o </th>
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
               <a href='/ProjetoPHP/Transacoes/excluirPecaTeatro.php?id=$id'>Excluir</a>
            </td>
        </tr>
        ";
    }
  echo"
</table>";

?>