<?php

function gerarSenha($senha)
{
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%&*';
    
    return substr(str_shuffle($caracteres), 0, $senha);
}

echo "Senha gerada: " . gerarSenha(10);