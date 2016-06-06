<!doctype html>
<html lang="pt-br">
<head>
    
    <link rel="stylesheet" href="/ProjetoPHP/estilos/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <div class="container-fluid">
        <div class="form-group">
            <form action="../Transacoes/transacoesUsuario/inserirUsuario.php" method="POST">
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
        <a href="loginADM.php">Administrador</a>
    </div>
</body>
</html>