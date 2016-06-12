<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/js/jquery-1.12.4.js"></script>
    <link rel="stylesheet" href="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/js/bootstrap.js"></script>

    <title>Login Administrador</title>
</head>
<body>
    <div class="container-fluid">
        <div class="form-group">
            <form action="/ProjetoPHP/Transacoes/transacoesADM.php" method="POST">
                <label>Login:</label>
                <input type="text" name="login" class="form-control" required="required"/>

                <label>Senha:</label>
                <input type="text" name="senha" class="form-control" required="required"/>

                <input type="submit" class="btn-success" value="Logar"/>
            </form>
        </div>
    </div>


</body>
</html>
