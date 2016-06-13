<!doctype html>
<html lang="pt-br">
<head>
    <script src="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/js/jquery-1.12.4.js"></script>
    <link rel="stylesheet" href="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    <meta charset="UTF-8">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <div class="container-fluid">
        <div class="form-group">
            <form action="/ProjetoPHP/Transacoes/inserirUsuario.php" method="POST">
                <label>Nome:</label>
                <input type="text" name="nomeUsuario" class="form-control" required="required"/>

                <label>Email:</label>
                <input type="text" name="emailUsuario" class="form-control" required="required"/>

                <label>CPF:</label>
                <input type="text" name="cpfUsuario" class="form-control" required="required"/>

                <label>Endereço:</label>
                <input type="text" name="enderecoUsuario" class="form-control" required="required"/>

                <label>Telefone:</label>
                <input type="text" name="telefoneUsuario" class="form-control" required="required"/>

                <label>Senha:</label>
                <input type="text" name="senhaUsuario" class="form-control" required="required"/>

                <input type="submit" class="btn-success" value="Cadastrar"/>
            </form>
        </div>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Login no sistema</button>

        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="row">
                <div class="col-md-3 col-md-offset-4">
                    <div class="panel well">
                        <img class="img-responsive" src="/ProjetoPHP/estilos/img/logo.jpg" alt="Logo Cinema" style="margin:0 auto;"/>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title" id="texto"><strong>Login Usuário</strong></h2>
                    </div>

                    <div class="panel-body">
                        <p class="alert alert-info">
                            <i class="fa fa-question-circle fa-fw"></i> Preencha os campos para logar no sistema.
                        </p>
                        <form action="/ProjetoPHP/Transacoes/transacoesADM.php" method="POST">
                            <div class="form-group">

                                <span class="glyphicon glyphicon-user"></span>
                                <label for="id">Usuário </label>
                                <input type="text" name="login" placeholder="Digite o usuário" class="form-control" id="usuario" />

                                <span class="glyphicon glyphicon-lock"></span>
                                <label for="pass">Senha </label>
                                <input type="password" name="senha" placeholder="Digite a senha" class="form-control" id="senha" />
                                <br>
                                <input type="submit"  class="btn&#x20;btn-lg&#x20;btn-success&#x20;btn-block" value="Logar" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- modal -->
    </div>
</body>
</html>
