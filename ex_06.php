<?php

function converterTemperatura($valor, $origem, $destino){

    if($origem == "C" && $destino == "F"){
        return ($valor * 9/5) + 32;
    }

    elseif($origem == "C" && $destino == "K"){
        return $valor + 273.15;
    }

    elseif($origem == "F" && $destino == "C"){
        return ($valor - 32) * 5/9;
    }

    elseif($origem == "F" && $destino == "K"){
        return (($valor - 32) * 5/9) + 273.15;
    }

    elseif($origem == "K" && $destino == "C"){
        return $valor - 273.15;
    }

    elseif($origem == "K" && $destino == "F"){
        return (($valor - 273.15) * 9/5) + 32;
    }

    elseif($origem == $destino){
        return $valor;
    }

    else{
        return "Escala inválida!";
    }
}


echo "Fahrenheit: " . converterTemperatura(20, "C", "F") . " °F<br>";
echo "Celsius: " . converterTemperatura(68, "F", "C") . " °C<br>";
echo "Kelvin: " .converterTemperatura(78, "F", "K") . " K<br>";
echo "Celsius: " . converterTemperatura(30, "K", "C") . " °C<br>";
echo "Fahrenheit: " . converterTemperatura(310, "K", "F") . " °F<br>";
echo "Kelvin: " . converterTemperatura(2, "C", "K") . " K<br>";
