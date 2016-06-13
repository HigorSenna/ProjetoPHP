<?php
//include ('../../Utils/usuarioUtils/UsuarioUtils.php');
include_once ('../Classes/Usuario.php');
include_once ('../Controller/CadastroUsuarioController.php');
use ProjetoPHP\Classes\Usuario;
use ProjetoPHP\Controller\CadastroUsuarioController;

if(1==1){
    $usuario = new Usuario();
    $usuario->setNome($_POST['nomeUsuario']);
    $usuario->setCPF($_POST['cpfUsuario']);
    $usuario->setEmail($_POST['emailUsuario']);
    $usuario->setEndereco($_POST['enderecoUsuario']);
    $usuario->setTelefone($_POST['telefoneUsuario']);
    $usuario->setSenha($_POST['senhaUsuario']);
    $usuario->setTipoUsuario("comum");

    $cadastroUsuarioController = new CadastroUsuarioController();
    $cadastroUsuarioController->salvar($usuario);
}
else{   
    echo"Nao funcionou";
}

