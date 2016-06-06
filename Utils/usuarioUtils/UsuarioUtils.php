<?php

class UsuarioUtils
{
    public static function validarParametros($nome,$senha,$email,$endereco,$cpf,$telefone)
    {
        if(isset($_POST[$nome])
            && isset($_POST[$senha])
            && isset($_POST[$email])
            && isset($POST[$endereco])
            && isset($_POST[$cpf])
            && isset($_POST[$telefone])){

         return true;
        }
        return false;
    }
}