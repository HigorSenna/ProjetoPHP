<?php
include('../../ConexaoBanco/ConexaoBanco.php');
class UsuarioDAO
{
    public function salvar(Usuario $usuario){
        //$db = ConexaoBanco::realizarConexao();
        $user = "root";
        $pass="root";
        $database="teatro";
        $server="localhost";
        $db = new PDO("mysql:host=$server;dbname=$database",$user,$pass);

        $sql = "INSERT INTO usuarios (NM_USUARIO,EMAIL,CPF,TELEFONE,SENHA) values(?,?,?,?,?)";
        $stmt = $db->prepare($sql);

         $valoresObjeto = array($usuario->getNome(),$usuario->getEmail(),$usuario->getCPF(),
          $usuario->getTelefone(),$usuario->getSenha());

        if($stmt->execute($valoresObjeto)){
            echo"            
            <script>
                alert('Adicionado');
                window.location='../pages/cadastroUsuario.php'            
            </script>            
            ";
        }
     }
}