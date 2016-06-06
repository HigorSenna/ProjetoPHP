<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <title>Login Administrador</title>
</head>
<body>
    <div class="container-fluid">
        <div class="form-group">
            <form action="../Transacoes/transacoesAdministrador/transacoesADM.php" method="POST">
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
