<?php

    function ordenarNomes($nomes){

    
    $lista = explode(",", $nomes);


    for($i = 0; $i < count($lista); $i++){
        $lista[$i] = trim($lista[$i]);
    }

 
    sort($lista);


    return implode(", ", $lista);
}

echo "Texto original: Thuany, Julia, Kamily, Arthur <br>";
echo "Texto ordenado: " . ordenarNomes("Thuany, Julia, Kamily, Arthur");