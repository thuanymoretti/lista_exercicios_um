<?php

function analisarSenha($senha) {
    $forca = 0;

    if (strlen($senha) >= 8) {
        $forca++;
    }

    if (preg_match('/[A-Z]/', $senha)) {
        $forca++;
    }

    if (preg_match('/[a-z]/', $senha)) {
        $forca++;
    }

    
    if (preg_match('/[0-9]/', $senha)) {
        $forca++;
    }

    if (preg_match('/[^a-zA-Z0-9]/', $senha)) {
        $forca++;
    }

    if ($forca <= 1) {
        $nivel = "Fraca";
    } elseif ($forca <= 3) {
        $nivel = "Média";
    } elseif ($forca == 4) {
        $nivel = "Forte";
    } else {
        $nivel = "Muito Forte";
    }

    return [
        "pontuacao" => $forca,
        "nivel" => $nivel
    ];
}


$resultado = analisarSenha("Abc@1234");

echo "Pontuação: " . $resultado["pontuacao"] . "<br>";
echo "Nível de segurança: " . $resultado["nivel"];

?>