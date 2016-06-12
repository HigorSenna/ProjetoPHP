<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/js/jquery-1.12.4.js"></script>
    <link rel="stylesheet" href="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    <title>Cadastro de pe�as</title>
</head>
<body>
    <div class="container-fluid">
        <h2>Cadastro de peças de teatro</h2>
        <div class="form-group">
            <form action="/ProjetoPHP/Transacoes/cadastroPecaTeatro.php" method="POST" enctype="multipart/form-data">
                <label>Nome da peça</label>
                <input type="text" name="nome" class="form-control" required="required"/>

                <label>Horario</label>
                <input type="text" name="hora" class="form-control" required="required"/>

                <label>Lugares disponibilizados</label>
                <input type="text" disabled="disabled" name="lugares" value="100" class="form-control"/>

                <label>Descrição</label>
                <input type="text" name="descricao" name="descricao"  class="form-control" required="required"/>

                <label>Dia</label>
                <input type="text"  name="data" placeholder="dd/MM" class="form-control" required="required"/>

                <label>Imagem</label>
                <input type="file" name="caminhoImagem" required="required"/>

                <input type="submit" value="cadastrar" />
            </form>
        </div>
        
        <!--<img src="../uploads/Desert.jpg">-->
    </div>
</body>
</html>