<!doctype html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="/ProjetoPHP/estilos/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <div class="container-fluid">
        <div class="form-group">
            <form action="../Transacoes/transacoesUsuario/inserirUsuario.php" method="POST">
                <label>Nome:</label>
                <input type="text" name="nomeUsuario" class="form-control"/>

                <label>Email:</label>
                <input type="text" name="emailUsuario" class="form-control"/>

                <label>CPF:</label>
                <input type="text" name="cpfUsuario" class="form-control"/>

                <label>Endereço:</label>
                <input type="text" name="enderecoUsuario" class="form-control"/>

                <label>Telefone:</label>
                <input type="text" name="telefoneUsuario" class="form-control"/>

                <label>Senha:</label>
                <input type="text" name="senhaUsuario" class="form-control"/>

                <input type="submit" class="btn-success" value="Cadastrar"/>
            </form>
        </div>
    </div>
</body>
</html>