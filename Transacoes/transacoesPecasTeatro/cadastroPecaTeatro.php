<?php
include('../../Classes/PecaTeatro.php');
include('../../Controller/CadastroPecaTeatroController.php');

$peca = new PecaTeatro(
    $_POST['nome'],
    $_POST['data'],
    $_POST['hora'],
    $_POST['descricao']
);
$caminho = "../../uploads/".$_FILES['caminhoImagem']['name'];

$peca->setCaminhoImagem($caminho);

$cadastroPecaTeatroController = new CadastroPecaTeatroController();

if($cadastroPecaTeatroController->salvar($peca) == 1){
    echo"
        <script>
            alert('Peca de teatro cadastrada com sucesso!');
        </script>
    ";
}
else{

    echo"Nao funcionou ";
}

