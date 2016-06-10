<?php
namespace ProjetoPHP\Classes;
class Usuario
{
    private $nome;
    private $email;
    private $telefone;
    private $endereco;
    private $cpf;
    private $senha;

    public function Usuario(){
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getTelefone(){
        return $this->telefone;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getEndereco(){
        return $this->endereco;
    }

    public function setCPF($cpf){
        $this->cpf = $cpf;
    }
    public function getCPF(){
        return $this->cpf;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function getSenha(){
        return $this->senha;
    }
}
