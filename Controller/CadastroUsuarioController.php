<?php
//include('../../Service/UsuarioService.php');
namespace ProjetoPHP\Controller;
include_once ('../Service/UsuarioService.php');
include_once ('../Classes/Usuario.php');
use ProjetoPHP\Service\UsuarioService;
use ProjetoPHP\Classes\Usuario;

class CadastroUsuarioController
{

    public function salvar(Usuario $usuario){
        $usuarioService = new UsuarioService();
        if($usuarioService->salvarUsuario($usuario)){
            echo"            
            <script>
                alert('Adicionado');
                window.location='../pages/cadastroUsuario.php'            
            </script>            
            ";
        }
        else{
            echo"            
            <script>
                alert('Nao Adicionado');
                window.location='../pages/cadastroUsuario.php'            
            </script>            
            ";
        }
    }
}