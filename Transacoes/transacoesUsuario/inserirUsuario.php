<?php
include ('../../Utils/usuarioUtils/UsuarioUtils.php');
include('../../Classes/Usuario.php');
include('../../Controller/CadastroUsuarioController.php');
if(1==1){
    $usuario = new Usuario();
    $usuario->setNome($_POST['nomeUsuario']);
    $usuario->setCPF($_POST['cpfUsuario']);
    $usuario->setEmail($_POST['emailUsuario']);
    $usuario->setEndereco($_POST['enderecoUsuario']);
    $usuario->setTelefone($_POST['telefoneUsuario']);
    $usuario->setSenha($_POST['senhaUsuario']);   

    $cadastroUsuarioController = new CadastroUsuarioController();
    $cadastroUsuarioController->salvar($usuario);
}
else{   
    echo"Nao funcionou";
}

