<?php

function mascaraCpf($cpf){
    
    $mascaraCpf = '***.***.***-' . substr($cpf, -5);
    return $mascaraCpf;
}

echo "Cpf original: 141.663.659-59 <br>";
echo "Cpf mascarado: " . mascaraCpf("141.663.659-59") . "<br>";