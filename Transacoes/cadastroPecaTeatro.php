<?php
include_once('../Classes/PecaTeatro.php');
include_once('../Controller/CadastroPecaTeatroController.php');
use ProjetoPHP\Classes\PecaTeatro;
use ProjetoPHP\Controller\CadastroPecaTeatroController;

$peca = new PecaTeatro();
if(isset($_POST['nome'])
    && isset($_POST['data'])
    && isset($_POST['descricao'])
    && isset($_POST['hora'])
    && isset($_FILES['caminhoImagem'])){

    $caminho = "../uploads/".$_FILES['caminhoImagem']['name'];
    $peca->setNome($_POST['nome']);
    $peca->setData($_POST['data']);
    $peca->setDescricao($_POST['descricao']);
    $peca->setHora($_POST['hora']);
    $peca->setCaminhoImagem($caminho);

}
$cadastroPecaTeatroController = new CadastroPecaTeatroController();

if($cadastroPecaTeatroController->salvar($peca)){
    echo"
        <script>
            alert('Peca de teatro cadastrada com sucesso!');
            window.location='../pages/cadastrarPecasTeatro.php';
        </script>
    ";
}
else{
    echo"
        <script>
            alert('Algum erro ocorreu!');
            window.location='../pages/cadastrarPecasTeatro.php';
        </script>
    ";
}

