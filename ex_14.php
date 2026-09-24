<?php
function  estatisticasNumericas($numeros)
{
 $soma = array_sum($numeros);
    $media = $soma / count($numeros);
    $maior = max($numeros);
    $menor = min($numeros);

    sort($numeros);
    $quantidade = count($numeros);

    if ($quantidade % 2 == 0) {
        $mediana = ($numeros[$quantidade / 2 - 1] + $numeros[$quantidade / 2]) / 2;
    } else {
        $mediana = $numeros[floor($quantidade / 2)];
    }

    $pares = 0;
    $impares = 0;

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    return [
        "Soma" => $soma,
        "Média" => number_format($media, 2, ",", "."),
        "Maior Valor" => $maior,
        "Menor Valor" => $menor,
        "Mediana" => $mediana,
        "Pares" => $pares,
        "Ímpares" => $impares
    ];
}

$numeros = [10, 5, 8, 3, 12, 7, 4];

$resultado = estatisticasNumericas($numeros);

echo "Soma: " . $resultado["Soma"] . "<br>";
echo "Média: " . $resultado["Média"] . "<br>";
echo "Maior valor: " . $resultado["Maior Valor"] . "<br>";
echo "Menor valor: " . $resultado["Menor Valor"] . "<br>";
echo "Mediana: " . $resultado["Mediana"] . "<br>";
echo "Quantidade de números pares: " . $resultado["Pares"] . "<br>";
echo "Quantidade de números ímpares: " . $resultado["Ímpares"];

?>