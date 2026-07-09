<?php

// Inverter o texto

function inverterTexto($texto) 
{
    
    $textoInvertido = strrev($texto);
    return $textoInvertido;

}

echo "Texto original: Oi, mundo! <br>";
echo "Texto invertido: " . inverterTexto("Oi, mundo!") . "<br>";
echo "Numero de caracteres: " . strlen("Oi, mundo!");