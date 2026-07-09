<?php

    function calcularMedia($notas) {

    $maior = $notas[0];
    $menor = $notas[0];
    $soma = 0;

    foreach($notas as $nota){

        if($nota > $maior){
            $maior = $nota;
        }

        if($nota < $menor){
            $menor = $nota;
        }

        $soma += $nota;
    }

    $media = $soma / count($notas);

    if($media >= 7){
        $situacao = "Aprovado";
    }elseif($media >= 5){
        $situacao = "Recuperação";
    }else{
        $situacao = "Reprovado";
    }

    return [
        "Maior nota" => $maior,
        "Menor nota" => $menor,
        "Média" => $media,
        "Situação" => $situacao
    ];
}

    $notas = [8, 6, 9, 7];

    $resultado = calcularMedia($notas);

    echo "Maior nota: " . $resultado["Maior nota"] . "<br>";
    echo "Menor nota: " . $resultado["Menor nota"] . "<br>";
    echo "Média: " . number_format($resultado["Média"], 2) . "<br>";
    echo "Situação: " . $resultado["Situação"];

