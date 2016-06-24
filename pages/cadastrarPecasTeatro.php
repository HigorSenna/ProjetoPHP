<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/js/jquery-1.12.4.js"></script>
    <link rel="stylesheet" href="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cadastro de peças</title>
</head>
<body>
<div class="container-fluid" id="containerFluidCadastrar">
    <div class="well">
        <div class="jumbotron">

            <div class="alert alert-success" id="panels">
                <strong>Cadastro de peças de teatro  <span class="glyphicon glyphicon-check"></span></strong>
            </div>

            <div class="form-group">
                <form action="/ProjetoPHP/Transacoes/cadastroPecaTeatro.php" method="POST" enctype="multipart/form-data">
                    <label>Nome da peça  <span class="glyphicon glyphicon-tags"></span></label>
                    <input type="text" name="nome" class="form-control" required="required"/>

                    <label>Horario  <span class="glyphicon glyphicon-time"></span></label>
                    <input type="text" name="hora" class="form-control" required="required"/>

                    <label>Lugares disponibilizados  <span class="glyphicon glyphicon-blackboard"></span></label>
                    <input type="text" disabled="disabled" name="lugares" value="100" class="form-control"/>

                    <label>Descrição  <span class="glyphicon glyphicon-list-alt"></span></label>
                    <input type="text" name="descricao" name="descricao"  class="form-control" required="required"/>

                    <label>Dia  <span class="glyphicon glyphicon-calendar"></span></label>
                    <input type="text"  name="data" placeholder="dd/MM" class="form-control" required="required"/>

                    <label>Imagem  <span class="glyphicon glyphicon-picture"></span></label>
                    <input type="file" name="caminhoImagem" required="required"/><br>


                    <button type="submit" class="btn btn-success btn-block" value="cadastrar"><strong>CADASTRAR  <span class="glyphicon glyphicon-ok"></span></strong></button>
                </form>
            </div>

            <a href="admVizualizarPecas.php" id="pecasCadastradas"><strong>Peças Cadastradas</strong> </a>
            <!--<img src="../uploads/Desert.jpg">-->
        </div>
    </div>
</body>
</html>