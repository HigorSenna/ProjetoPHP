<?php
include_once('../Classes/PecaTeatro.php');
include_once('../Controller/CadastroPecaTeatroController.php');
use ProjetoPHP\Classes\PecaTeatro;
use ProjetoPHP\Controller\CadastroPecaTeatroController;

$peca = new PecaTeatro();

$caminho = "../uploads/".$_FILES['caminhoImagem']['name'];
$peca->setNome($_POST['nome']);
$peca->setData( $_POST['data']);
$peca->setDescricao($_POST['descricao']);
$peca->setHora($_POST['hora']);
$peca->setCaminhoImagem($caminho);


$cadastroPecaTeatroController = new CadastroPecaTeatroController();

if($cadastroPecaTeatroController->salvar($peca)){
    echo"
        <script>
            alert('Peca de teatro cadastrada com sucesso!');
        </script>
    ";
}
else{

    echo"Nao funcionou ";
}

